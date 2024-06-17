<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PartnerService $partnerService
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Partner Service'), ['action' => 'edit', $partnerService->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Partner Service'), ['action' => 'delete', $partnerService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partnerService->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Partner Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Partner Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="partnerServices view content">
            <h3><?= h($partnerService->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Partner') ?></th>
                    <td><?= $partnerService->hasValue('partner') ? $this->Html->link($partnerService->partner->name, ['controller' => 'Partners', 'action' => 'view', $partnerService->partner->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($partnerService->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($partnerService->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($partnerService->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($partnerService->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($partnerService->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
