<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\PurchaseVoucher $purchaseVoucher
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Purchase Voucher'), ['action' => 'edit', $purchaseVoucher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Purchase Voucher'), ['action' => 'delete', $purchaseVoucher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseVoucher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Purchase Vouchers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase Voucher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Purchase Voucher Rows'), ['controller' => 'PurchaseVoucherRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase Voucher Row'), ['controller' => 'PurchaseVoucherRows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="purchaseVouchers view large-9 medium-8 columns content">
    <h3><?= h($purchaseVoucher->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $purchaseVoucher->has('company') ? $this->Html->link($purchaseVoucher->company->name, ['controller' => 'Companies', 'action' => 'view', $purchaseVoucher->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplier Invoice No') ?></th>
            <td><?= h($purchaseVoucher->supplier_invoice_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($purchaseVoucher->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voucher No') ?></th>
            <td><?= $this->Number->format($purchaseVoucher->voucher_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voucher Amount') ?></th>
            <td><?= $this->Number->format($purchaseVoucher->voucher_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Date') ?></th>
            <td><?= h($purchaseVoucher->transaction_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplier Invoice Date') ?></th>
            <td><?= h($purchaseVoucher->supplier_invoice_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Narration') ?></h4>
        <?= $this->Text->autoParagraph(h($purchaseVoucher->narration)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Purchase Voucher Rows') ?></h4>
        <?php if (!empty($purchaseVoucher->purchase_voucher_rows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Purchase Voucher Id') ?></th>
                <th scope="col"><?= __('Ledger Id') ?></th>
                <th scope="col"><?= __('Debit') ?></th>
                <th scope="col"><?= __('Credit') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($purchaseVoucher->purchase_voucher_rows as $purchaseVoucherRows): ?>
            <tr>
                <td><?= h($purchaseVoucherRows->id) ?></td>
                <td><?= h($purchaseVoucherRows->purchase_voucher_id) ?></td>
                <td><?= h($purchaseVoucherRows->ledger_id) ?></td>
                <td><?= h($purchaseVoucherRows->debit) ?></td>
                <td><?= h($purchaseVoucherRows->credit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PurchaseVoucherRows', 'action' => 'view', $purchaseVoucherRows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PurchaseVoucherRows', 'action' => 'edit', $purchaseVoucherRows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PurchaseVoucherRows', 'action' => 'delete', $purchaseVoucherRows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseVoucherRows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
