<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\IntraLocationStockTransferVoucher $intraLocationStockTransferVoucher
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Intra Location Stock Transfer Voucher'), ['action' => 'edit', $intraLocationStockTransferVoucher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Intra Location Stock Transfer Voucher'), ['action' => 'delete', $intraLocationStockTransferVoucher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intraLocationStockTransferVoucher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Intra Location Stock Transfer Vouchers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Intra Location Stock Transfer Voucher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Intra Location Stock Transfer Voucher Rows'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Intra Location Stock Transfer Voucher Row'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="intraLocationStockTransferVouchers view large-9 medium-8 columns content">
    <h3><?= h($intraLocationStockTransferVoucher->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $intraLocationStockTransferVoucher->has('company') ? $this->Html->link($intraLocationStockTransferVoucher->company->name, ['controller' => 'Companies', 'action' => 'view', $intraLocationStockTransferVoucher->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $intraLocationStockTransferVoucher->has('location') ? $this->Html->link($intraLocationStockTransferVoucher->location->name, ['controller' => 'Locations', 'action' => 'view', $intraLocationStockTransferVoucher->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($intraLocationStockTransferVoucher->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transfer From') ?></th>
            <td><?= $this->Number->format($intraLocationStockTransferVoucher->transfer_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transfer To') ?></th>
            <td><?= $this->Number->format($intraLocationStockTransferVoucher->transfer_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Date') ?></th>
            <td><?= h($intraLocationStockTransferVoucher->transaction_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Intra Location Stock Transfer Voucher Rows') ?></h4>
        <?php if (!empty($intraLocationStockTransferVoucher->intra_location_stock_transfer_voucher_rows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Intra Location Stock Transfer Voucher Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($intraLocationStockTransferVoucher->intra_location_stock_transfer_voucher_rows as $intraLocationStockTransferVoucherRows): ?>
            <tr>
                <td><?= h($intraLocationStockTransferVoucherRows->id) ?></td>
                <td><?= h($intraLocationStockTransferVoucherRows->intra_location_stock_transfer_voucher_id) ?></td>
                <td><?= h($intraLocationStockTransferVoucherRows->item_id) ?></td>
                <td><?= h($intraLocationStockTransferVoucherRows->quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'view', $intraLocationStockTransferVoucherRows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'edit', $intraLocationStockTransferVoucherRows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'delete', $intraLocationStockTransferVoucherRows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intraLocationStockTransferVoucherRows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
