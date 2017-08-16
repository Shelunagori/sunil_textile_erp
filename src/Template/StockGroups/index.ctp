<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\StockGroup[]|\Cake\Collection\CollectionInterface $stockGroups
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stock Group'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stockGroups index large-9 medium-8 columns content">
    <h3><?= __('Stock Groups') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stockGroups as $stockGroup): ?>
            <tr>
                <td><?= $this->Number->format($stockGroup->id) ?></td>
                <td><?= h($stockGroup->name) ?></td>
                <td><?= $stockGroup->has('parent_stock_group') ? $this->Html->link($stockGroup->parent_stock_group->name, ['controller' => 'StockGroups', 'action' => 'view', $stockGroup->parent_stock_group->id]) : '' ?></td>
                <td><?= $stockGroup->has('company') ? $this->Html->link($stockGroup->company->name, ['controller' => 'Companies', 'action' => 'view', $stockGroup->company->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stockGroup->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stockGroup->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stockGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockGroup->id)]) ?>
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
