<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\IntraLocationStockTransferVoucher[]|\Cake\Collection\CollectionInterface $intraLocationStockTransferVouchers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Intra Location Stock Transfer Voucher'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Intra Location Stock Transfer Voucher Rows'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Intra Location Stock Transfer Voucher Row'), ['controller' => 'IntraLocationStockTransferVoucherRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="intraLocationStockTransferVouchers index large-9 medium-8 columns content">
    <h3><?= __('Intra Location Stock Transfer Vouchers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transfer_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transfer_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($intraLocationStockTransferVouchers as $intraLocationStockTransferVoucher): ?>
            <tr>
                <td><?= $this->Number->format($intraLocationStockTransferVoucher->id) ?></td>
                <td><?= $this->Number->format($intraLocationStockTransferVoucher->transfer_from) ?></td>
                <td><?= $this->Number->format($intraLocationStockTransferVoucher->transfer_to) ?></td>
                <td><?= h($intraLocationStockTransferVoucher->transaction_date) ?></td>
                <td><?= $intraLocationStockTransferVoucher->has('company') ? $this->Html->link($intraLocationStockTransferVoucher->company->name, ['controller' => 'Companies', 'action' => 'view', $intraLocationStockTransferVoucher->company->id]) : '' ?></td>
                <td><?= $intraLocationStockTransferVoucher->has('location') ? $this->Html->link($intraLocationStockTransferVoucher->location->name, ['controller' => 'Locations', 'action' => 'view', $intraLocationStockTransferVoucher->location->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $intraLocationStockTransferVoucher->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $intraLocationStockTransferVoucher->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $intraLocationStockTransferVoucher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intraLocationStockTransferVoucher->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
