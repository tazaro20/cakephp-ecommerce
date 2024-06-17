<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $partners
 */
?>
<div class="users index content">
    <div class="actions">
        <?= $this->Html->link(__('Add User'), ['action' => 'add'], ['class' => 'button']) ?>
    </div>
    <h3><?= __('Company') ?></h3>
    <div class="table table-responsive">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($partners as $partner): ?>
                <tr>
                    <td><?= $this->Number->format($partner->id) ?></td>
                    <td><?= h($partner->name) ?></td>
                    <td><?= h($partner->email) ?></td>
                    <td><?= h($partner->phone) ?></td>
                    <td><?= h($partner->address) ?></td>
                    <td><?= h($partner->created) ?></td>
                    <td><?= h($partner->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $partner->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partner->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partner->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
