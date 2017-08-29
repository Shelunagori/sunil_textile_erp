<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SalesInvoice[]|\Cake\Collection\CollectionInterface $salesInvoices
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sales Invoice'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gst Figures'), ['controller' => 'GstFigures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gst Figure'), ['controller' => 'GstFigures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sales Invoice Rows'), ['controller' => 'SalesInvoiceRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sales Invoice Row'), ['controller' => 'SalesInvoiceRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salesInvoices index large-9 medium-8 columns content">
    <h3><?= __('Sales Invoices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voucher_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cash_or_credit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gst_figure_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_before_tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_cgst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_sgst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_igst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_after_tax') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salesInvoices as $salesInvoice): ?>
            <tr>
                <td><?= $this->Number->format($salesInvoice->id) ?></td>
                <td><?= $this->Number->format($salesInvoice->voucher_no) ?></td>
                <td><?= $salesInvoice->has('company') ? $this->Html->link($salesInvoice->company->name, ['controller' => 'Companies', 'action' => 'view', $salesInvoice->company->id]) : '' ?></td>
                <td><?= h($salesInvoice->transaction_date) ?></td>
                <td><?= h($salesInvoice->cash_or_credit) ?></td>
                <td><?= $salesInvoice->has('customer') ? $this->Html->link($salesInvoice->customer->name, ['controller' => 'Customers', 'action' => 'view', $salesInvoice->customer->id]) : '' ?></td>
                <td><?= $salesInvoice->has('gst_figure') ? $this->Html->link($salesInvoice->gst_figure->name, ['controller' => 'GstFigures', 'action' => 'view', $salesInvoice->gst_figure->id]) : '' ?></td>
                <td><?= $this->Number->format($salesInvoice->amount_before_tax) ?></td>
                <td><?= $this->Number->format($salesInvoice->total_cgst) ?></td>
                <td><?= $this->Number->format($salesInvoice->total_sgst) ?></td>
                <td><?= $this->Number->format($salesInvoice->total_igst) ?></td>
                <td><?= $this->Number->format($salesInvoice->amount_after_tax) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salesInvoice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salesInvoice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salesInvoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesInvoice->id)]) ?>
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
