<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ledger[]|\Cake\Collection\CollectionInterface $ledgers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ledger'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounting Groups'), ['controller' => 'AccountingGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Accounting Group'), ['controller' => 'AccountingGroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounting Entries'), ['controller' => 'AccountingEntries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Accounting Entry'), ['controller' => 'AccountingEntries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ledgers index large-9 medium-8 columns content">
    <h3><?= __('Ledgers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accounting_group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('freeze') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax_percentage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gst_type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ledgers as $ledger): ?>
            <tr>
                <td><?= $this->Number->format($ledger->id) ?></td>
                <td><?= h($ledger->name) ?></td>
                <td><?= $ledger->has('accounting_group') ? $this->Html->link($ledger->accounting_group->name, ['controller' => 'AccountingGroups', 'action' => 'view', $ledger->accounting_group->id]) : '' ?></td>
                <td><?= h($ledger->freeze) ?></td>
                <td><?= $ledger->has('company') ? $this->Html->link($ledger->company->name, ['controller' => 'Companies', 'action' => 'view', $ledger->company->id]) : '' ?></td>
                <td><?= $ledger->has('supplier') ? $this->Html->link($ledger->supplier->name, ['controller' => 'Suppliers', 'action' => 'view', $ledger->supplier->id]) : '' ?></td>
                <td><?= $ledger->has('customer') ? $this->Html->link($ledger->customer->name, ['controller' => 'Customers', 'action' => 'view', $ledger->customer->id]) : '' ?></td>
                <td><?= $this->Number->format($ledger->tax_percentage) ?></td>
                <td><?= h($ledger->gst_type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ledger->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ledger->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ledger->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ledger->id)]) ?>
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
