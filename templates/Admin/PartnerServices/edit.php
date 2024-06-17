<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PartnerService $partnerService
 * @var string[]|\Cake\Collection\CollectionInterface $partners
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $partnerService->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $partnerService->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Partner Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="partnerServices form content">
            <?= $this->Form->create($partnerService) ?>
            <fieldset>
                <legend><?= __('Edit Partner Service') ?></legend>
                <?php
                    echo $this->Form->control('partner_id', ['options' => $partners]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
