<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Stock Journal View| Sunil Textile ERP');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Stock Journal View</span>
				</div>
			</div>
			<div class="portlet-body">
				<table width="100%" >
				  <tr>
					<td width="15%"><b>Voucher No </b></td>
					<td width="1%">:</td>
					<td><?php echo '#'.str_pad($stockJournal->voucher_no, 4, '0', STR_PAD_LEFT);?></td>
					<td><b>Reference No</b></td>
					<td width="1%">:</td>
					<td><?php echo $stockJournal->reference_no; ?></td>
					<td width="15%"><b>Transaction Date</b></td>
					<td width="1%">:</td>
					<td><?php echo date("d-m-Y",strtotime($stockJournal->transaction_date)); ?></td>
				  </tr>
                  <tr>
					<td width="15%"><b>Narration </b></td>
					<td width="1%">:</td>
					<td><?php echo $stockJournal->narration;?></td>
				  </tr>
                </table><br>
       			<table width="100%" >
				<tr>
				      <td width="50%">
							<table id="main_table" class="table table-condensed table-bordered" style="margin-bottom: 4px;" width="100%">
								<thead>
								<tr><td align="center" colspan="6"><b>Inward</b></td></tr>
								<tr align="center">
									<td><b>Sr</b></td>
									<td><b>Item</b></td>
									<td><b>Qty</b></td>
									<td><b>Rate</b></td>
									<td><b>Amount</b></td>
								</tr>
								</thead>
								<tbody id='main_tbody' class="tab">
                                 <?php if(!empty($stockJournal->inwards))
                                         $i=0;									
								         foreach($stockJournal->inwards as $inward)
									     {
							    ?>
									<tr class="main_tr" class="tab">
										<td width="7%"><?php echo $i+1; ?></td>
										<td width="25%">
											<?php echo $inward->item->id; ?>
										</td>
										<td width="15%">
											<?php echo $inward->quantity; ?>
										</td>
										<td width="20%">
											<?php echo $inward->rate; ?>
										</td>
										<td width="25%">
											<?php echo $inward->amount; ?>	
										</td>
									</tr>
								<?php $i++; } ?>
								</tbody>
								</table>
					  </td>
				      <td width="50%">
						<table id="main_table2" class="table table-condensed table-bordered" style="margin-bottom: 4px;" width="100%">
								<thead>
								<tr><td align="center" colspan="6"><b>Outward</b></td></tr>
								<tr align="center">
									<td><b>Sr</b></td>
									<td><b>Item</b></td>
									<td><b>Qty</b></td>
									<td><b>Rate</b></td>
									<td><b>Amount</b></td>
								</tr>
								</thead>
								<tbody id='main_tbody2' class="tab">
								  <?php if(!empty($stockJournal->outwards))
                                         $j=0;									
								         foreach($stockJournal->outwards as $outward)
									     {
							        ?>
									<tr class="main_tr" class="tab">
										<td width="7%"><?php echo $j+1;?></td>
										<td width="25%">
											<?php echo $outward->item->id; ?>
										</td>
										<td width="15%">
											<?php echo $outward->quantity; ?>
										</td>
										<td width="20%">
											<?php echo $outward->rate; ?>
										</td>
										<td width="25%">
											<?php echo $outward->amount; ?>	
										</td>
									</tr>
								<?php $j++; } ?>
								</tbody>
								</table>
					  </td>
				  </tr>			
				</table>
            </div>
		</div>
	</div>
</div>

