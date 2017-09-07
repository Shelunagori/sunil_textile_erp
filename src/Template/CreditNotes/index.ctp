<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CreditNote[]|\Cake\Collection\CollectionInterface $creditNotes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Credit Note'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Party Ledgers'), ['controller' => 'Ledgers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Party Ledger'), ['controller' => 'Ledgers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Credit Note Rows'), ['controller' => 'CreditNoteRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Credit Note Row'), ['controller' => 'CreditNoteRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="creditNotes index large-9 medium-8 columns content">
    <h3><?= __('Credit Notes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voucher_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sales_invoice_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('party_ledger_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sales_ledger_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_before_tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_cgst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_sgst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_igst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_after_tax') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($creditNotes as $creditNote): ?>
            <tr>
                <td><?= $this->Number->format($creditNote->id) ?></td>
                <td><?= $this->Number->format($creditNote->voucher_no) ?></td>
                <td><?= h($creditNote->sales_invoice_no) ?></td>
                <td><?= $creditNote->has('company') ? $this->Html->link($creditNote->company->name, ['controller' => 'Companies', 'action' => 'view', $creditNote->company->id]) : '' ?></td>
                <td><?= h($creditNote->transaction_date) ?></td>
                <td><?= $creditNote->has('party_ledger') ? $this->Html->link($creditNote->party_ledger->name, ['controller' => 'Ledgers', 'action' => 'view', $creditNote->party_ledger->id]) : '' ?></td>
                <td><?= $creditNote->has('sales_ledger') ? $this->Html->link($creditNote->sales_ledger->name, ['controller' => 'Ledgers', 'action' => 'view', $creditNote->sales_ledger->id]) : '' ?></td>
                <td><?= $this->Number->format($creditNote->amount_before_tax) ?></td>
                <td><?= $this->Number->format($creditNote->total_cgst) ?></td>
                <td><?= $this->Number->format($creditNote->total_sgst) ?></td>
                <td><?= $this->Number->format($creditNote->total_igst) ?></td>
                <td><?= $this->Number->format($creditNote->amount_after_tax) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $creditNote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creditNote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $creditNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $creditNote->id)]) ?>
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
