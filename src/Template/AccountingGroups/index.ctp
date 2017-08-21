<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AccountingGroup[]|\Cake\Collection\CollectionInterface $accountingGroups
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Accounting Group'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nature Of Groups'), ['controller' => 'NatureOfGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nature Of Group'), ['controller' => 'NatureOfGroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ledgers'), ['controller' => 'Ledgers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ledger'), ['controller' => 'Ledgers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accountingGroups index large-9 medium-8 columns content">
    <h3><?= __('Accounting Groups') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nature_of_group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplier') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accountingGroups as $accountingGroup): ?>
            <tr>
                <td><?= $this->Number->format($accountingGroup->id) ?></td>
                <td><?= $accountingGroup->has('nature_of_group') ? $this->Html->link($accountingGroup->nature_of_group->name, ['controller' => 'NatureOfGroups', 'action' => 'view', $accountingGroup->nature_of_group->id]) : '' ?></td>
                <td><?= h($accountingGroup->name) ?></td>
                <td><?= $accountingGroup->has('parent_accounting_group') ? $this->Html->link($accountingGroup->parent_accounting_group->name, ['controller' => 'AccountingGroups', 'action' => 'view', $accountingGroup->parent_accounting_group->id]) : '' ?></td>
                <td><?= $accountingGroup->has('company') ? $this->Html->link($accountingGroup->company->name, ['controller' => 'Companies', 'action' => 'view', $accountingGroup->company->id]) : '' ?></td>
                <td><?= h($accountingGroup->customer) ?></td>
                <td><?= h($accountingGroup->supplier) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $accountingGroup->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountingGroup->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountingGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingGroup->id)]) ?>
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
