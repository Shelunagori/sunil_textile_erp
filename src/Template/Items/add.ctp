<?php
/**
 * @Author: Kounty
 */
$this->set('title', 'Create Item | Sunil Textile ERP');
?>
<div class="row">
	<div class="col-md-6">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Create Item</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($item) ?>
				<div class="row">
					 <div class="col-md-12">
						<div class="form-group">
									<label>Item Name <span class="required">*</span></label>
									<?php echo $this->Form->control('name',['class'=>'form-control input-sm','placeholder'=>'Item Name','label'=>false,'autofocus']); ?>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Quantity <span class="required">*</span></label>
									<?php echo $this->Form->control('quantity',['class'=>'form-control input-sm qty calculation','label'=>false,'placeholder'=>'Quantity']); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Rate <span class="required">*</span></label>
									<?php echo $this->Form->control('rate',['class'=>'form-control input-sm rate calculation','label'=>false,'placeholder'=>'Rate']); ?>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-md-6">
								<div class="form-group">
									<label>Amount <span class="required">*</span></label>
									<?php echo $this->Form->control('amount',['class'=>'form-control input-sm amt','label'=>false,'placeholder'=>'Amount']); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Unit <span class="required">*</span></label>
									<?php echo $this->Form->control('unit_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Unit-', 'options' => $units,'required'=>'required']); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Stock Group <span class="required">*</span></label>
									<?php echo $this->Form->control('stock_group_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Stock Group-', 'options' => $stockGroups]); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>HSN Code <span class="required">*</span></label>
									<?php echo $this->Form->control('hsn_code',['class'=>'form-control input-sm','label'=>false,'placeholder'=>'HSN Code']); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Unit <span class="required">*</span></label>
									<?php echo $this->Form->control('unit_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Unit-', 'options' => $units,'required'=>'required']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>
<?php
	$js="
	$(document).ready(function() {
	  $('.calculation').die().live('keyup',function(){
		  amt_calc();
	  });
	  function amt_calc()
	  {
		  var qty = $('.qty').val();
		  var rate = $('.rate').val();
		  var amt = qty*rate
		  $('.amt').val(amt.toFixed(2)); 
	  }
	  
    });
	";

echo $this->Html->scriptBlock($js, array('block' => 'jsPageLevelPluginsComponentsPickers')); 
?>