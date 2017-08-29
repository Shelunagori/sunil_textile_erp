<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Create Purchase Voucher');
?>
<div class="row">
	<div class="col-md-9">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Sales Invoice</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($salesInvoice,['onsubmit'=>'return checkValidation()']) ?>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Voucher No :</label>&nbsp;&nbsp;
								<?= h('#'.str_pad($voucher_no, 4, '0', STR_PAD_LEFT)) ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Transaction Date <span class="required">*</span></label>
								<?php echo $this->Form->control('transaction_date',['class'=>'form-control input-sm date-picker','data-date-format'=>'dd-mm-yyyy','label'=>false,'placeholder'=>'DD-MM-YYYY','type'=>'text','data-date-start-date'=>@$coreVariable[fyValidFrom],'data-date-end-date'=>@$coreVariable[fyValidTo],'value'=>date('d-m-Y')]); ?>
							</div>
						</div>
						<input type="hidden" name="company_id" value="<?php echo $company_id;?>">
						<div class="col-md-3">
							    <label style="">Cash/Credit</label>
								<?php $option =[['value'=>'cash','text'=>'Cash'],['value'=>'credit','text'=>'Credit']];
									echo $this->Form->control('cash_or_credit',['class'=>'form-control input-sm cashCredit','label'=>false, 'options' => $option,'value'=>'cash']);
								?>
						</div>
						<div class="col-md-3" style="display:none" id="cusomerIds">
							<div class="form-group">
								<label>Customer Name</label>
								<?php echo $this->Form->control('customer_id',['class'=>'form-control input-sm select2me select2','label'=>false, 'options' => $customers,'value'=>'cash']);
								?>
									</div>
						</div> 
					</div>
					<br>
					
				   <div class="row">
				  <div class="table-responsive">
								<table id="main_table" class="table table-condensed table-bordered" style="margin-bottom: 4px;" width="100%">
								<thead>
								<tr><td align="center" colspan="6">Inward</td></tr>
								<tr align="center">
									<td><label>Sr<label></td>
									<td><label>Item<label></td>
									<td><label>Qty<label></td>
									<td><label>Rate<label></td>
									<td><label>Amount<label></td>
									<td></td>
								</tr>
								</thead>
								<tbody id='main_tbody' class="tab">

								</tbody>
								<tfoot>
									<tr>
										<td colspan="4" >	
											<button type="button" class="add_row btn btn-default input-sm"><i class="fa fa-plus"></i> Add row</button>
										</td>
										<td width="25%"><?php echo $this->Form->input('inward_amount_total', ['label' => false,'class' => 'form-control input-sm','id'=>'total_inward','placeholder'=>'Total']); ?></td>
										<td></td>
									</tr>
								</tfoot>
								</table>
				   </div>
				  </div>
			</div>
				<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
				<?= $this->Form->end() ?>
		</div>
	</div>
</div>


<!-- BEGIN PAGE LEVEL STYLES -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->css('/assets/global/plugins/clockface/css/clockface.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<!-- END COMPONENTS PICKERS -->

	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-select/bootstrap-select.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/select2/select2.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/jquery-multi-select/css/multi-select.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/clockface/js/clockface.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/moment.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<!-- END COMPONENTS PICKERS -->
	
	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-select/bootstrap-select.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/select2/select2.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->script('/assets/admin/pages/scripts/components-pickers.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<!-- END COMPONENTS PICKERS -->

	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->script('/assets/global/scripts/metronic.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/layout.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/quick-sidebar.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/demo.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/pages/scripts/components-dropdowns.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL SCRIPTS -->

<table id="sample_table" style="display:none;" width="100%">
	<tbody>
		<tr class="main_tr" class="tab">
			<td width="7%"></td>
			<td width="25%">
				<?php echo $this->Form->input('item_id', ['empty'=>'--Select--','options'=>$Items,'label' => false,'class' => 'form-control input-medium','required'=>'required']); ?>
			</td>
			<td width="15%">
				<?php echo $this->Form->input('quantity', ['label' => false,'class' => '','id'=>'check','required'=>'required','placeholder'=>'Quantity']); ?>
			</td>
			<td width="20%">
				<?php echo $this->Form->input('rate', ['label' => false,'class' => 'form-control input-sm','required'=>'required','placeholder'=>'Rate']); ?>
			</td>
			<td width="25%">
				<?php echo $this->Form->input('amount', ['label' => false,'class' => 'form-control input-sm','required'=>'required','placeholder'=>'Amount']); ?>	
			</td>
			<td align="center">
				<a class="btn btn-danger delete-tr btn-xs" href="#" role="button" style="margin-bottom: 5px;"><i class="fa fa-times"></i></a>
			</td>
		</tr>
	</tbody>
</table>

<?php
	$js="
	$(document).ready(function() {

	$('.cashCredit').die().live('change',function(){
		 var cashcredit=$(this).val();
		 if(cashcredit=='credit')
		 {
		 $('#cusomerIds').show();
		 }
		 else{
		 $('#cusomerIds').hide();
		 }
		});
	
	
		

		$('.delete-tr').die().live('click',function() 
		{
			$(this).closest('tr').remove();
			rename_rows();
			total_debit_credit();
		});

		ComponentsPickers.init();
	});

	

	$('.add_row').click(function(){
		add_row();
    }) ;


	function add_row()
	{
		var tr=$('#sample_table tbody tr.main_tr').clone();
				$('#main_table tbody#main_tbody').append(tr);
		rename_rows();
	}
	rename_rows();
	function rename_rows()
	{
		var i=0;
		$('#main_table tbody#main_tbody tr.main_tr').each(function(){ 

			$(this).find('td:nth-child(2) select').select2().attr({name:'purchase_voucher_rows['+i+'][ledger_id]',id:'purchase_voucher_rows-'+i+'-ledger_id'});	

			$(this).find('td:nth-child(3) input').attr({name:'purchase_voucher_rows['+i+'][debit]', id:'purchase_voucher_rows-'+i+'-debit'});
			$(this).find('td:nth-child(4) input').attr({name:'purchase_voucher_rows['+i+'][credit]', id:'purchase_voucher_rows-'+i+'-credit'});

			i++;
		});
	}

	function checkValidation() 
	{  
		var total_debit  = $('.total_debit').val();
		var total_credit = $('.total_credit').val();

		if(total_debit!=total_credit)
		{
			alert('Credit and debit value not matched');
			return false;
		}
		else
		{
			if(confirm('Are you sure you want to submit!'))
			{
				return true;
			}
			else
			{
				return false;
			}

		}
	}";

echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom')); 
?>