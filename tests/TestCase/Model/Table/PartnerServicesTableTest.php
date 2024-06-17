<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartnerServicesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartnerServicesTable Test Case
 */
class PartnerServicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PartnerServicesTable
     */
    protected $PartnerServices;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.PartnerServices',
        'app.Partners',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PartnerServices') ? [] : ['className' => PartnerServicesTable::class];
        $this->PartnerServices = $this->getTableLocator()->get('PartnerServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PartnerServices);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PartnerServicesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PartnerServicesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
