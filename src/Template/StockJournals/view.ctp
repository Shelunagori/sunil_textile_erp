<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\StockJournal $stockJournal
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Stock Journal'), ['action' => 'edit', $stockJournal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stock Journal'), ['action' => 'delete', $stockJournal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockJournal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stock Journals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stock Journal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inwards'), ['controller' => 'Inwards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inward'), ['controller' => 'Inwards', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Outwards'), ['controller' => 'Outwards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Outward'), ['controller' => 'Outwards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stockJournals view large-9 medium-8 columns content">
    <h3><?= h($stockJournal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $stockJournal->has('company') ? $this->Html->link($stockJournal->company->name, ['controller' => 'Companies', 'action' => 'view', $stockJournal->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($stockJournal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voucher No') ?></th>
            <td><?= $this->Number->format($stockJournal->voucher_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reference No') ?></th>
            <td><?= $this->Number->format($stockJournal->reference_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Date') ?></th>
            <td><?= h($stockJournal->transaction_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Narration') ?></h4>
        <?= $this->Text->autoParagraph(h($stockJournal->narration)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Inwards') ?></h4>
        <?php if (!empty($stockJournal->inwards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Rate') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Stock Journal Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($stockJournal->inwards as $inwards): ?>
            <tr>
                <td><?= h($inwards->id) ?></td>
                <td><?= h($inwards->item_id) ?></td>
                <td><?= h($inwards->quantity) ?></td>
                <td><?= h($inwards->rate) ?></td>
                <td><?= h($inwards->amount) ?></td>
                <td><?= h($inwards->stock_journal_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Inwards', 'action' => 'view', $inwards->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Inwards', 'action' => 'edit', $inwards->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inwards', 'action' => 'delete', $inwards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inwards->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Outwards') ?></h4>
        <?php if (!empty($stockJournal->outwards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Rate') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Stock Journal Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($stockJournal->outwards as $outwards): ?>
            <tr>
                <td><?= h($outwards->id) ?></td>
                <td><?= h($outwards->item_id) ?></td>
                <td><?= h($outwards->quantity) ?></td>
                <td><?= h($outwards->rate) ?></td>
                <td><?= h($outwards->amount) ?></td>
                <td><?= h($outwards->stock_journal_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Outwards', 'action' => 'view', $outwards->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Outwards', 'action' => 'edit', $outwards->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Outwards', 'action' => 'delete', $outwards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $outwards->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
