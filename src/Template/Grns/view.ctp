<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Grn $grn
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grn'), ['action' => 'edit', $grn->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grn'), ['action' => 'delete', $grn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grn->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grn'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grn Rows'), ['controller' => 'GrnRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grn Row'), ['controller' => 'GrnRows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grns view large-9 medium-8 columns content">
    <h3><?= h($grn->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $grn->has('company') ? $this->Html->link($grn->company->name, ['controller' => 'Companies', 'action' => 'view', $grn->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grn->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voucher No') ?></th>
            <td><?= $this->Number->format($grn->voucher_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Id') ?></th>
            <td><?= $this->Number->format($grn->location_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Date') ?></th>
            <td><?= h($grn->transaction_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Grn Rows') ?></h4>
        <?php if (!empty($grn->grn_rows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Grn Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Purchase Rate') ?></th>
                <th scope="col"><?= __('Sale Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($grn->grn_rows as $grnRows): ?>
            <tr>
                <td><?= h($grnRows->id) ?></td>
                <td><?= h($grnRows->grn_id) ?></td>
                <td><?= h($grnRows->item_id) ?></td>
                <td><?= h($grnRows->quantity) ?></td>
                <td><?= h($grnRows->purchase_rate) ?></td>
                <td><?= h($grnRows->sale_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GrnRows', 'action' => 'view', $grnRows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GrnRows', 'action' => 'edit', $grnRows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GrnRows', 'action' => 'delete', $grnRows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grnRows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
