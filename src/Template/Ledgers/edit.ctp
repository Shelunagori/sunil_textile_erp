<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Edit Ledger');
?>
<div class="row">
	<div class="col-md-6">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Edit Ledger</span>
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
									<?php echo $this->Form->control('accounting_group_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Primary Group-', 'options' => $accountingGroups,'required','required'=>'required']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4" style="padding-right: 0px;">
						<div class="form-group" >
							<label>Opening Balance</label>
							
							<?php 
							$value="";
									if(!empty($ledger->accounting_entries[0]->debit))
									{
										$value =$ledger->accounting_entries[0]->debit;
									}
									else
									{
										$value =@$ledger->accounting_entries[0]->credit;
									}
							echo $this->Form->control('opening_balance_value',['class'=>'form-control input-sm','label'=>false,'value'=>$value]);
							?>
						</div>
					</div>
					<div class="col-md-2" style="padding-left: 0px;padding-right:0;">
						<label style="visibility:hidden;">s</label>
						<?php 
						    $check="";
							if(!empty($ledger->accounting_entries[0]->debit))
							{
								$check ='Dr';
							}
							else
							{
								$check ='Cr';
							}
							$option =[['value'=>'Dr','text'=>'Dr'],['value'=>'Cr','text'=>'Cr']];
							echo $this->Form->control('debit_credit',['class'=>'form-control input-sm','label'=>false, 'options' => $option,'value'=>'debitor']);
							?>
					</div>
				</div>
				<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>