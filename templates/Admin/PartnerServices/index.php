<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\PartnerService> $partnerServices
 */
?>
<div class="users index content">
    <h3><?= __('Company and services') ?></h3>
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('partner_id') ?></th>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($partnerServices as $partnerService): ?>
                <tr>
                    <td><?= $this->Number->format($partnerService->id) ?></td>
                    <td><?= $partnerService->hasValue('partner') ? $this->Html->link($partnerService->partner->name, ['controller' => 'Partners', 'action' => 'view', $partnerService->partner->id]) : '' ?></td>
                    <td><?= $partnerService->hasValue('service') ? $this->Html->link($partnerService->service->name, ['controller' => 'Services', 'action' => 'view', $partnerService->service->id]) : '' ?></td>
                    <td><?= h($partnerService->created) ?></td>
                    <td><?= h($partnerService->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $partnerService->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partnerService->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partnerService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partnerService->id)]) ?>
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
