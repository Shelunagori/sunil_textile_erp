<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Grn[]|\Cake\Collection\CollectionInterface $grns
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grn'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grn Rows'), ['controller' => 'GrnRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grn Row'), ['controller' => 'GrnRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grns index large-9 medium-8 columns content">
    <h3><?= __('Grns') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voucher_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grns as $grn): ?>
            <tr>
                <td><?= $this->Number->format($grn->id) ?></td>
                <td><?= $this->Number->format($grn->voucher_no) ?></td>
                <td><?= $this->Number->format($grn->location_id) ?></td>
                <td><?= $grn->has('company') ? $this->Html->link($grn->company->name, ['controller' => 'Companies', 'action' => 'view', $grn->company->id]) : '' ?></td>
                <td><?= h($grn->transaction_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $grn->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grn->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grn->id)]) ?>
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
