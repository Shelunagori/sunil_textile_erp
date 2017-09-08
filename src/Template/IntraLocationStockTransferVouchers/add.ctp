<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Intra Location Stock Transfer Vouchers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Intra Location Stock Transfer Voucher Rows'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Intra Location Stock Transfer Voucher Row'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="intraLocationStockTransferVouchers form large-9 medium-8 columns content">
    <?= $this->Form->create($intraLocationStockTransferVoucher) ?>
    <fieldset>
        <legend><?= __('Add Intra Location Stock Transfer Voucher') ?></legend>
        <?php
            echo $this->Form->control('transfer_from');
            echo $this->Form->control('transfer_to');
            echo $this->Form->control('transaction_date');
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('location_id', ['options' => $locations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
