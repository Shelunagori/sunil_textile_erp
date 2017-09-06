<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SecondTampGrnRecord[]|\Cake\Collection\CollectionInterface $secondTampGrnRecords
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Second Tamp Grn Record'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="secondTampGrnRecords index large-9 medium-8 columns content">
    <h3><?= __('Second Tamp Grn Records') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purchase_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sales_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_addition_item_data_required') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hsn_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gst_rate_fixed_or_fluid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_gst_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_in_ref_of_gst_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('second_gst_rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($secondTampGrnRecords as $secondTampGrnRecord): ?>
            <tr>
                <td><?= $this->Number->format($secondTampGrnRecord->id) ?></td>
                <td><?= h($secondTampGrnRecord->item_code) ?></td>
                <td><?= $this->Number->format($secondTampGrnRecord->quantity) ?></td>
                <td><?= $this->Number->format($secondTampGrnRecord->purchase_rate) ?></td>
                <td><?= $this->Number->format($secondTampGrnRecord->sales_rate) ?></td>
                <td><?= $secondTampGrnRecord->has('user') ? $this->Html->link($secondTampGrnRecord->user->name, ['controller' => 'Users', 'action' => 'view', $secondTampGrnRecord->user->id]) : '' ?></td>
                <td><?= h($secondTampGrnRecord->processed) ?></td>
                <td><?= $this->Number->format($secondTampGrnRecord->is_addition_item_data_required) ?></td>
                <td><?= h($secondTampGrnRecord->item_name) ?></td>
                <td><?= h($secondTampGrnRecord->hsn_code) ?></td>
                <td><?= h($secondTampGrnRecord->unit) ?></td>
                <td><?= $this->Number->format($secondTampGrnRecord->gst_rate_fixed_or_fluid) ?></td>
                <td><?= $this->Number->format($secondTampGrnRecord->first_gst_rate) ?></td>
                <td><?= $this->Number->format($secondTampGrnRecord->amount_in_ref_of_gst_rate) ?></td>
                <td><?= $this->Number->format($secondTampGrnRecord->second_gst_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $secondTampGrnRecord->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $secondTampGrnRecord->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $secondTampGrnRecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secondTampGrnRecord->id)]) ?>
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
