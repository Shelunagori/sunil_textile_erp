<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Create Accounting Group');
?>
<div class="row">
	<div class="col-md-6">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Create Accounting Group</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($accountingGroup) ?>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Name <span class="required">*</span></label>
							<?php echo $this->Form->control('name',['class'=>'form-control input-sm','placeholder'=>'Name','label'=>false,'autofocus']); ?>
						</div>
						
						<div class="row">
						    <div class="col-md-6">
								<div class="form-group">
									<label>Under</label>
									<?php echo $this->Form->control('parent_id',['class'=>'form-control input-sm calculation','label'=>false,'empty'=>'-Primary-', 'options' => $parentAccountingGroups]); ?>
								</div>
							</div>
							<div class="col-md-6">
							    <div class="form-group hide_group">
									<label>Nature of Group</label>
									<?php echo $this->Form->control('nature_of_group_id',['class'=>'form-control input-sm ','label'=>false,'empty'=>'-Nature of Group-', 'options' => $natureOfGroups]); ?>
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
	  $('.calculation').die().live('change',function(){
		  check();
	  });
	  function check()
	  {
		  var parent_id =$('.calculation').val();
		  if(parent_id)
		  {
			  $('.hide_group').hide();
		  }
		  else
		  {
			  $('.hide_group').show();
		  }
	  }
	  
    });
	";

echo $this->Html->scriptBlock($js, array('block' => 'jsPageLevelPluginsComponentsPickers')); 
?>