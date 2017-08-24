<div class="purchaseVouchers form large-9 medium-8 columns content">
    <?= $this->Form->create($purchaseVoucher) ?>
    <fieldset>
        <legend><?= __('Add Purchase Voucher') ?></legend>
        <?php
            echo $this->Form->control('voucher_no');
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('transaction_date');
            echo $this->Form->control('supplier_invoice_no');
            echo $this->Form->control('supplier_invoice_date');
            echo $this->Form->control('narration');
            echo $this->Form->control('voucher_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
