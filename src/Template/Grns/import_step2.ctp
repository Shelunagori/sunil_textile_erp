<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Import');
?>
<?php if($countSecondTampGrnRecords>0){ ?>
	<span>
		There is already data processing. 
		<?php echo $this->Html->link(' Check from here', '/SecondTampGrnRecords',['escape' => false]); ?>
	</span><br/>
	<span>
		<?php echo $notvalid_to_importRecords; ?> Records are not valid to import. 
		<?php echo $this->Html->link(' Check from here', '/SecondTampGrnRecords/index/invalid',['escape' => false]); ?>
	</span><br/>
	<span>First fix the invalid records then import command will be appear.<span><br/>
	<span>Delete existing data and start again step 2. <a href="#">Delete & Start</a><span>
<?php goto Bottom; } ?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Uplode CSV File</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($grn,['enctype'=>'multipart/form-data']) ?>
				<div class="row">
				    <div class="col-md-6">
					    <div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>uplode csv </label>
									<?php echo $this->Form->input('csv', ['type'=>'file','class' => 'form-control', 'label' => false, 'placeholder' => 'csv upload',]); ?>
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
<?php Bottom: ?>