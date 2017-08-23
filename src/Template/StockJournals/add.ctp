<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Create Stock Journal | Sunil Textile ERP');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Create Stock Journal</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($stockJournal) ?>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Voucher No </label>&nbsp;&nbsp;
								<?= h('#'.str_pad(1, 4, '0', STR_PAD_LEFT)) ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Reference No </label>
								<?php echo $this->Form->control('reference_no',['class'=>'form-control input-sm','label'=>false,'placeholder'=>'Reference No']); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Transaction Date <span class="required">*</span></label>
								<?php echo $this->Form->control('transaction_date',['class'=>'form-control input-sm date-picker','data-date-format'=>'dd-mm-yyyy','label'=>false,'placeholder'=>'DD-MM-YYYY','type'=>'text']); ?>
							</div>
						</div>
					</div>
					<br>
                  <div class="row">
					<table width="100%" class="table  table-bordered">
						<tr>
							<td width="50%">
								<table id="main_table" class="table table-condensed table-bordered" style="margin-bottom: 4px;" width="100%">
								<thead>
								<tr><td align="center" colspan="6">Inward/Source</td></tr>
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
								</table>
								<button type="button" class="add_inward btn btn-default input-sm"><i class="fa fa-plus"></i> Add row</button>
							</td>
							<td width="50%">
								<table id="main_table2" class="table table-condensed table-bordered" style="margin-bottom: 4px;" width="100%">
								<thead>
								<tr><td align="center" colspan="6">Outward/Destination</td></tr>
								<tr align="center">
									<td><label>Sr<label></td>
									<td><label>Item<label></td>
									<td><label>Qty<label></td>
									<td><label>Rate<label></td>
									<td><label>Amount<label></td>
									<td></td>
								</tr>
								</thead>
								<tbody id='main_tbody2' class="tab">

								</tbody>
								</table>
								<button type="button" class="add_outward btn btn-default input-sm"><i class="fa fa-plus"></i> Add row</button>
							</td>
						</tr>
					</table>
				  </div>
				  
				 <div class="row">
					<div class="col-md-4">
							<div class="form-group">
								<label>Narration </label>
								<?php echo $this->Form->control('narration',['class'=>'form-control input-sm ','label'=>false,'placeholder'=>'Narration','rows'=>'2']); ?>
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
<!-- BEGIN PAGE LEVEL STYLES -->
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css', ['block' => 'cssComponentsPickers']); ?>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', ['block' => 'jsPageLevelPluginsComponentsPickers']); ?>
<!-- END PAGE LEVEL PLUGINS -->
<?php
	$js="
	$(document).ready(function() {
	  $('.calculation').die().live('keyup',function(){
		  amt_calc();
	  });
	  $('.reverseCalculation').die().live('keyup',function(){
		   reverce_amt_calc();
	  });
	  function amt_calc()
	  {
		  var qty = $('.qty').val();
		  var rate = $('.rate').val();
          var amt = qty*rate
		  $('.amt').val(amt.toFixed(2)); 
	  }
	  
	  function reverce_amt_calc()
	  {
		  var qty = $('.qty').val();
		  var amt = $('.amt').val();
		  if(qty){
		  var rate = amt/qty;
		  $('.rate').val(rate.toFixed(2));  }
	  }
    });
	
	$('.add_inward').click(function(){
				add_row_inward();
		});
		
	
		function add_row_inward(){
				var tr=$('#sample_table tbody tr.main_tr').clone();
				$('#main_table tbody#main_tbody').append(tr);
				
				rename_rows();
			}
			
	$('.add_outward').click(function(){
				add_row_outward();
		});
		
		function add_row_outward(){
				var tr=$('#sample_table tbody tr.main_tr').clone();
				$('#main_table2 tbody#main_tbody2').append(tr);
				
				
			}
			
		function rename_rows(){
				var i=0;
				$('#main_table tbody#main_tbody tr.main_tr').each(function(){ 
					$(this).find('td:nth-child(1)').html(i+1);
					
					i++;
				});
			}
	";

echo $this->Html->scriptBlock($js, array('block' => 'jsPageLevelPluginsComponentsPickers')); 
?>
<table id="sample_table" style="display:none;" width="100%">
			<tbody>
				<tr class="main_tr" class="tab">
				    <td width="7%"></td>
				    <td width="25%">
						<?php echo $this->Form->input('item_id', ['empty'=>'--Select--','options'=>$items,'label' => false,'class' => 'form-control input-sm ']); ?>
					</td>
					<td width="15%">
						<?php echo $this->Form->input('quantity', ['label' => false,'class' => 'form-control input-sm','id'=>'check']); ?>
					</td>
					<td width="20%">
						<?php echo $this->Form->input('rate', ['label' => false,'class' => 'form-control input-sm']); ?>
					</td>
                    <td width="25%">
						<?php echo $this->Form->input('amount', ['label' => false,'class' => 'form-control input-sm']); ?>	
					</td>
                    <td>
						<a class="btn btn-danger delete-tr input-sm" href="#" role="button" style="margin-bottom: 5px;"><i class="fa fa-times"></i></a>
					</td>
				</tr>
			</tbody>
</table>