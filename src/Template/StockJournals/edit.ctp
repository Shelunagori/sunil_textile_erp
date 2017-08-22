<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stockJournal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stockJournal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stock Journals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inwards'), ['controller' => 'Inwards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inward'), ['controller' => 'Inwards', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Outwards'), ['controller' => 'Outwards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Outward'), ['controller' => 'Outwards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stockJournals form large-9 medium-8 columns content">
    <?= $this->Form->create($stockJournal) ?>
    <fieldset>
        <legend><?= __('Edit Stock Journal') ?></legend>
        <?php
            echo $this->Form->control('voucher_no');
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('transaction_date');
            echo $this->Form->control('reference_no');
            echo $this->Form->control('narration');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
