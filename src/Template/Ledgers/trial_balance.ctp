<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Trial balance report');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Trial Balance Report</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<?= $this->Form->create($ledger) ?>
					<div class="col-md-3">
						<div class="form-group">
							<label>From Date</label>
							<?php 
							if(@$from_date=='1970-01-01')
							{
								$from_date = '';
							}
							elseif(!empty($from_date))
							{
								$from_date = date("d-m-Y",strtotime(@$from_date));
							}
							echo $this->Form->control('from_date',['class'=>'form-control input-sm date-picker','data-date-format'=>'dd-mm-yyyy','label'=>false,'placeholder'=>'DD-MM-YYYY','type'=>'text','value'=>@$from_date,'data-date-start-date'=>@$coreVariable[fyValidFrom],'data-date-end-date'=>@$coreVariable[fyValidTo]]); ?>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>To Date</label>
							<?php 
							if(@$to_date=='1970-01-01')
							{
								$to_date = '';
							}
							elseif(!empty($to_date))
							{
								$to_date = date("d-m-Y",strtotime(@$to_date));
							}
							echo $this->Form->control('to_date',['class'=>'form-control input-sm date-picker','data-date-format'=>'dd-mm-yyyy','label'=>false,'placeholder'=>'DD-MM-YYYY','type'=>'text','value'=>@$to_date,'data-date-start-date'=>@$coreVariable[fyValidFrom],'data-date-end-date'=>@$coreVariable[fyValidTo]]); ?>
						</div>
					</div>
					<div class="col-md-2" >
							<div class="form-group" style="padding-top:22px;"> 
								<button type="submit" class="btn btn-xs blue input-sm srch"><i class="fa fa-search"></i> Search</button>
							</div>
					</div>	
					<?= $this->Form->end() ?>
				</div>
				<?php if(!empty($openingBalanceArray)){?>
				<table class="table table-bordered table-hover table-condensed" width="100%">
					<thead>
						<tr>
							<th scope="col"></th>
							<th scope="col" colspan="2" style="text-align:center";>Opening Balance</th>
							<th scope="col" colspan="2" style="text-align:center";>Transactions</th>
							<th scope="col" colspan="2" style="text-align:center";>Closing balance</th>
						</tr>
						<tr>
							<th scope="col">Ledgers</th>
							<th scope="col" style="text-align:center";>Debit</th>
							<th scope="col" style="text-align:center";>Credit</th>
							<th scope="col" style="text-align:center";>Debit</th>
							<th scope="col" style="text-align:center";>Credit</th>
							<th scope="col" style="text-align:center";>Debit</th>
							<th scope="col" style="text-align:center";>Credit</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$openingBalanceDebitTotal=0;
							$openingBalanceCreditTotal=0;
							$transactionDebitTotal=0;
							$transactionCreditTotal=0;
							$closingBalanceDebitTotal=0;
							$closingBalanceCreditTotal=0;
							foreach($openingBalanceArray as $key => $openingBalance)
							{ 
								foreach($openingBalance as $key1 => $openingBalance1)
								{
									$closing_credit=0;
									$closing_debit=0;
							?>
									<tr>
										<td scope="col"><?php echo @$ledgersArray[$key];?></td>
										<td scope="col" align="right">
										<?php
										    $closing_debit = $closing_debit+$key1;
											$openingBalanceDebitTotal += $key1;
											echo $key1;
										?>
										</td>
										<td scope="col" align="right">
										<?php 
											$closing_credit = $closing_credit+$openingBalance1;
											$openingBalanceCreditTotal +=$openingBalance1;
											echo $openingBalance1;
										?>
										</td>
										<td scope="col" align="right">
										<?php
											if(!empty($transactionArray1[$key]))
											{
												$transactionDebitTotal +=$transactionArray1[$key];
												$closing_debit = $closing_debit+$transactionArray1[$key];
												echo $transactionArray1[$key];
											}
										?>
										</td>
										<td scope="col" align="right">
										<?php 
										    if(!empty($transactionArray2[$key]))
											{
												$transactionCreditTotal +=$transactionArray2[$key];
												$closing_credit = $closing_credit+$transactionArray2[$key];
												echo $transactionArray2[$key];
											}
										?>
										</td>
										<td scope="col" align="right">
										<?php
											$closingBalanceDebitTotal +=$closing_debit;
											echo @$closing_debit;
										?>
										</td>
										<td scope="col" align="right">
										<?php 
											$closingBalanceCreditTotal +=$closing_credit;
											echo @$closing_credit;
										?>
										</td>
									</tr>
						<?php 
								}
							}
						?>
					</tbody>
					<tfoot>
						<tr>
							<td scope="col">Total</td>
							<td scope="col" align="right"><?php echo $openingBalanceDebitTotal;?></td>
							<td scope="col" align="right"><?php echo $openingBalanceCreditTotal;?></td>
							<td scope="col" align="right"><?php echo $transactionDebitTotal;?></td>
							<td scope="col" align="right"><?php echo $transactionCreditTotal;?></td>
							<td scope="col" align="right"><?php echo $closingBalanceDebitTotal;?></td>
							<td scope="col" align="right"><?php echo $closingBalanceCreditTotal;?></td>
						</tr>
					</tfoot>
				</table>
				<?php } ?>
			</div>
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

<?php
	$js="
	$(document).ready(function() {
         ComponentsPickers.init();
	})";

echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom')); 
?>