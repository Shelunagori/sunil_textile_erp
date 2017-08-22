<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\StockJournal[]|\Cake\Collection\CollectionInterface $stockJournals
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stock Journal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inwards'), ['controller' => 'Inwards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inward'), ['controller' => 'Inwards', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Outwards'), ['controller' => 'Outwards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Outward'), ['controller' => 'Outwards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stockJournals index large-9 medium-8 columns content">
    <h3><?= __('Stock Journals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voucher_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference_no') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stockJournals as $stockJournal): ?>
            <tr>
                <td><?= $this->Number->format($stockJournal->id) ?></td>
                <td><?= $this->Number->format($stockJournal->voucher_no) ?></td>
                <td><?= $stockJournal->has('company') ? $this->Html->link($stockJournal->company->name, ['controller' => 'Companies', 'action' => 'view', $stockJournal->company->id]) : '' ?></td>
                <td><?= h($stockJournal->transaction_date) ?></td>
                <td><?= $this->Number->format($stockJournal->reference_no) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stockJournal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stockJournal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stockJournal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockJournal->id)]) ?>
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
