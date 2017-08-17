<div class="row">
	<div class="col-md-5 col-sm-5">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="font-purple-intense"></i>
					<span class="caption-subject font-purple-intense ">
						<?php 
						$updt_id=@$unit->id;
						if(!empty(@$updt_id)){ ?>
							<i class="fa fa-pencil-square-o"></i> Edit Unit
						<?php }else{ ?>
							<i class="fa fa-plus"></i> Add Unit
						<?php } ?>
					</span>
				</div>
				<div class="actions">
					<?php if(!empty($updt_id)){ ?>
						<?php echo $this->Html->link('<i class="fa fa-plus"></i> Add New',['action' => 'index'],array('escape'=>false,'class'=>'btn btn-default')); ?>
					<?php } ?>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($unit,['id'=>'form_sample_3']) ?>
				<div class="row">
					<div class="col-md-12">  
					    <label class=" control-label">Unit <span class="required" aria-required="true">*</span></label>
						<?= $this->Form->input('name',['class'=>'form-control input-sm','placeholder'=>'Killo-Grams','type'=>'text','label'=>false]) ?>
					</div>
				</div>
				<br/>
				<?= $this->Form->button($this->Html->tag('i', '', ['class'=>'fa fa-plus']) . __(' Submit'),['class'=>'btn btn-success','id' => 'submitbtn']); ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
	<div class="col-md-7 col-sm-7">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>
					<span class="caption-subject font-purple-plum ">Units</span>
				</div>
				<div class="actions">
					<input type="text" class="form-control input-sm pull-right" placeholder="Search..." id="search3"  style="width: 200px;">
				</div>
			</div>
			<div class="portlet-body">
				<div style="overflow-y: scroll;height: 400px;">
				<table class="table table-bordered table-condensed" id="main_tble" width="100%">
					<thead>
						<tr style="table-layout: fixed;">
							<th rowspan="2"><?=  ('Sr') ?></th>
							<th rowspan="2"><?=  ('Name') ?></th>
							<th class="actions" colspan='2'><div align="center"><?= __('Actions') ?></div></th>
						</tr>
						<tr>
							<th width="50"><div align="center">Edit</div></th>
							<th width="50"><div align="center">Delete</div></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($units as $unit):
							@$k++;
						?>
						<tr>
							<td width="10%"><?= h($k) ?></td>
							<td><?= h($unit->name) ?></td>
							<td class="actions" align="center">
							<?php echo $this->Html->link('<i class="fa fa-pencil-square-o"></i>',['action' => 'index', $unit->id],array('escape'=>false,'class'=>'btn btn-xs blue')); ?>
							</td>
							<td class="actions" align="center">
							<?= $this->Form->postLink('<i class="fa fa-trash"></i> ',
									['action' => 'delete', $unit->id], 
									[
										'escape' => false,
										'class' => 'btn btn-xs btn-danger',
										'confirm' => __('Are you sure ?', $unit->id)
									]) ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Html->script('/assets/global/plugins/jquery.min.js'); ?>

<script>
$(document).ready(function() {
	
	//--------- FORM VALIDATION
	var form3 = $('#form_sample_3');
	var error3 = $('.alert-danger', form3);
	var success3 = $('.alert-success', form3);
	form3.validate({
		
		errorElement: 'span', //default input error message container
		errorClass: 'help-block help-block-error', // default input error message class
		focusInvalid: true, // do not focus the last invalid input
		rules: {
				name:{
					required: true,					 
				}
			},

		errorPlacement: function (error, element) { // render error placement for each input type
			if (element.parent(".input-group").size() > 0) {
				error.insertAfter(element.parent(".input-group"));
			} else if (element.attr("data-error-container")) { 
				error.appendTo(element.attr("data-error-container"));
			} else if (element.parents('.radio-list').size() > 0) { 
				error.appendTo(element.parents('.radio-list').attr("data-error-container"));
			} else if (element.parents('.radio-inline').size() > 0) { 
				error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
			} else if (element.parents('.checkbox-list').size() > 0) {
				error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
			} else if (element.parents('.checkbox-inline').size() > 0) { 
				error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
			} else {
				error.insertAfter(element); // for other inputs, just perform default behavior
			}
		},

		invalidHandler: function (event, validator) { //display error alert on form submit   
			success3.hide();
			error3.show();
		},

		highlight: function (element) { // hightlight error inputs
		   $(element)
				.closest('.form-group').addClass('has-error'); // set error class to the control group
		},

		unhighlight: function (element) { // revert the change done by hightlight
			$(element)
				.closest('.form-group').removeClass('has-error'); // set error class to the control group
		},

		success: function (label) {
			label
				.closest('.form-group').removeClass('has-error'); // set success class to the control group
		},

		submitHandler: function (form) {
			$('#submitbtn').prop('disabled', true);
			$('#submitbtn').text('Submitting.....');
			success3.show();
			error3.hide();
			form[0].submit(); // submit the form
		}

	});
	//--	 END OF VALIDATION
	
	var $rows = $('#main_tble tbody tr');
	$('#search3').die().live('keyup',function() { 
		var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
		var v = $(this).val();
		if(v){ 
			$rows.show().filter(function() {
				var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
	
				return !~text.indexOf(val);
			}).hide();
		}else{
			$rows.show();
		}
	});
	
	
	
	
});
</script>