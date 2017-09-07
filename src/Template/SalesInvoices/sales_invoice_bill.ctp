<style>
  .strongClass{
	font: 11px arial, sans-serif
  }
</style>
<?php foreach($invoiceBills->toArray() as $data){
		foreach($data->sales_invoice_rows as $sales_invoice_row){?>
			<?php }}?>
			
			
<div style="width:300px; border:1px solid #333">

		<table style=" font-family:arial, sans-serif; font-size:10px; padding-left:2px;padding-right:2px" width='100%' border='0'>
   <tr><td class="strongClass"  height="40px" style="font-size:14px; text-align:center" colspan="4">  <strong>GST INVOICE</strong>
		</td></tr>
		
		<?php foreach($invoiceBills->toArray() as $data){
		foreach($data->sales_invoice_rows as $sales_invoice_row){?>
			<?php }}?>
		<tr><td colspan="4"><?=@$data->company->name?></td></tr>
		<tr><td colspan="4"><?=@$data->company->address?></td></tr>
		<tr><td colspan="4"><?=@$data->company->state->name?></td></tr>
		
		
		
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		
		<?php foreach($invoiceBills->toArray() as $data){
		foreach($data->sales_invoice_rows as $sales_invoice_row){?>
			<?php }}?>
		<tr><td colspan="4"><strong>Tel &nbsp;</strong>1111</td></tr>
		<tr><td colspan="4"><strong>GST No &nbsp;</strong>5555</td></tr>
		<tr><td colspan="4"><strong>Invoice No &nbsp;</strong><?=$data->voucher_no?></td></tr>
		<tr><td colspan="4"><strong>Cust No &nbsp;</strong>hgfh454</td></tr>
		<tr><td colspan="4"><strong>Cust Name &nbsp;</strong><?=$data->partyDetails->name?></td></tr>
		
	
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		<tr><td colspan="4"></td></tr>
		
		<tr class="strongClass">
		<td>Item Code</td>
		<td>Size</td>
		<td>Qty</td>
		<td>Rate</td>
		</tr>
		<tr class="strongClass">
		<td>HSN Code</td>
		<td>Dis%</td>
		<td></td>
		<td>Net Rate</td>
		</tr>
		<tr>
		<td></td>
		<td>Taxable Value</td>
		<td>%SGST</td>
		<td>SGST AMT</td>
		</tr>
		<tr>
		<td style="padding-bottom:20px"></td>
		<td style="padding-bottom:20px"></td>
		<td style="padding-bottom:20px">%CGST</td>
		<td style="padding-bottom:20px">CGST AMT</td>
		</tr>
		<?php
		
		
		foreach($invoiceBills->toArray() as $data){
		$cgst=0;
		$sgst=0;
		$igst=0;
		$totalAmount=0;
		
		foreach($data->sales_invoice_rows as $sales_invoice_row){
		if(@$data->company->state_id==$data->partyDetails->state_id){
		$gstValue=$sales_invoice_row->gst_value;
		$gst=$gstValue/2;
		$cgst+=$gst;
		$sgst+=$gst;
		$totalAmount+=$sales_invoice_row->quantity*$sales_invoice_row->rate;
		}
		else{
		$gstValue=$sales_invoice_row->gst_value;
		$gst=$gstValue;
		$igst+=$gst;
		}
		?>
		<tr>
		<td><?=$sales_invoice_row->item->name ?></td>
		<td><?=@$sales_invoice_row->item->size->name ?></td>
		<td><?=$sales_invoice_row->quantity ?></td>
		<td><?=$sales_invoice_row->rate ?></td>
		</tr>
		<tr>
		<td><?=$sales_invoice_row->item->hsn_code ?></td>
		<td><?=$sales_invoice_row->discount_percentage ?></td>
		<td></td>
		<td><?=$sales_invoice_row->net_amount ?></td>
		</tr>
		
		<?php if($data->company->state_id==$data->partyDetails->state_id){?>
		<tr>
		<td></td>
		<td><?=$sales_invoice_row->taxable_value ?></td>
		<td><?=$gst ?></td>
		<td></td>
		</tr>
		<tr>
		<td style="padding-bottom:20px"></td>
		<td style="padding-bottom:20px"></td>
		<td style="padding-bottom:20px"><?=$gst ?></td>
		<td style="padding-bottom:20px"></td>
		</tr>
		<?php }else {?>
		<tr>
		<td></td>
		<td><?=$sales_invoice_row->taxable_value ?></td>
		<td><?=$gst ?></td>
		<td></td>
		</tr>
		<?php }?>
		<?php }} ?>
		
		
		<?php if($data->company->state_id==$data->partyDetails->state_id){?>
		<tr class="strongClass">
		<td></td>
		<td>CGST</td>
		<td><?php echo number_format($cgst,2); ?></td>
		<td></td>
		</tr>
		<tr class="strongClass">
		<td style="padding-bottom:20px"></td>
		<td style="padding-bottom:20px">SGST</td>
		<td style="padding-bottom:20px"><?php echo number_format($sgst,2); ?></td>
		<td style="padding-bottom:20px"></td>
		</tr>
		<?php }else {?>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>
		<tr class="strongClass">
		<td style="padding-bottom:20px"></td>
		<td style="padding-bottom:20px">IGST</td>
		<td style="padding-bottom:20px"><?php echo number_format($igst,2);  ?></td>
		<td style="padding-bottom:20px"></td>
		</tr>
		<?php }?>
		
		<tr class="strongClass">
		<td>Total MRP</td>
		<td></td>
		<td></td>
		<td><?php echo number_format($totalAmount,2);  ?></td>
		</tr>
		<tr class="strongClass">
		<td>Discount &nbsp; <?php echo number_format($totalAmount-$data->amount_after_tax, 2);  ?></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>
		<tr class="strongClass">
		<td>Net Total</td>
		<td></td>
		<td></td>
		<td><?php echo number_format($data->amount_after_tax, 2);  ?></td>
		</tr>

        </table>
        </div>