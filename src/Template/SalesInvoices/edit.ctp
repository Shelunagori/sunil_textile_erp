<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $salesInvoice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salesInvoice->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sales Invoices'), ['action' => 'index']) ?></li>
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
<div class="salesInvoices form large-9 medium-8 columns content">
    <?= $this->Form->create($salesInvoice) ?>
    <fieldset>
        <legend><?= __('Edit Sales Invoice') ?></legend>
        <?php
            echo $this->Form->control('voucher_no');
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('transaction_date');
            echo $this->Form->control('cash_or_credit');
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('gst_figure_id', ['options' => $gstFigures]);
            echo $this->Form->control('amount_before_tax');
            echo $this->Form->control('total_cgst');
            echo $this->Form->control('total_sgst');
            echo $this->Form->control('total_igst');
            echo $this->Form->control('amount_after_tax');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
