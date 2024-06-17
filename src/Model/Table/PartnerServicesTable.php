<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PartnerServices Model
 *
 * @property \App\Model\Table\PartnersTable&\Cake\ORM\Association\BelongsTo $Partners
 *
 * @method \App\Model\Entity\PartnerService newEmptyEntity()
 * @method \App\Model\Entity\PartnerService newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PartnerService> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PartnerService get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PartnerService findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PartnerService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PartnerService> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PartnerService|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PartnerService saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PartnerService>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartnerService>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartnerService>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartnerService> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartnerService>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartnerService>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartnerService>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartnerService> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartnerServicesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('partner_services');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Partners', [
            'foreignKey' => 'partner_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('partner_id')
            ->notEmptyString('partner_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['partner_id'], 'Partners'), ['errorField' => 'partner_id']);

        return $rules;
    }
}
