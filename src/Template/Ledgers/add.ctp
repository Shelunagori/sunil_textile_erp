<?php
/**
 * @Author: Kounty
 */
$this->set('title', 'Create Ledger | Sunil Textile ERP');
?>
<div class="row">
	<div class="col-md-6">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Create Ledger</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($ledger) ?>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Name <span class="required">*</span></label>
							<?php echo $this->Form->control('name',['class'=>'form-control input-sm','placeholder'=>'Name','label'=>false,'autofocus']); ?>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Under Accounting Group</label>
									<?php echo $this->Form->control('accounting_group_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Primary Group-', 'options' => $accountingGroups]); ?>
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