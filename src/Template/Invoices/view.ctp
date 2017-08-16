<?php $this->set('title', 'View Invoice'); ?>
<style>

.maindiv{
		font-family: sans-serif !important; font-size:12px !important;
	}
@media print{
	.maindiv{
		width:100% !important;font-family: sans-serif;
	}	
	.hidden-print{
		display:none;
	}
	body {
      -webkit-print-color-adjust: exact;
   }
}
@page {
    size: auto;   /* auto is the initial value */
    margin: 0 20px 0 20px;  /* this affects the margin in the printer settings */
}

p{
	margin-bottom: 0;
}

.tbl td, .tbl th {
    border: 1px solid black;
}

.footertble td{
    padding: 1px 3px;
}


.nbtbl td, .nbtbl th {
    border: none;
}
.tbl th {
    text-align:center;
}
.tbl td {
    padding:3px;
}
</style>
<a class="btn  blue hidden-print" onclick="javascript:window.print();">Print <i class="fa fa-print"></i></a>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->id],['class'=>'btn yellow-crusta hidden-print']) ?>
<div style="width:80%;margin:auto;border:solid 1px;font-family: serif;background-color: #FFF;" class="maindiv">
	<table width="100%">
		<tr>
			<td width="30%" style="padding:5px;"><?php echo $this->Html->image('/img/viewlogo.png', ['height' => '100px']); ?></td>
			<td>
				<div align="center" style="color: #c4151c;"><b>
					<span style="font-size:16px;color: #c4151c !important;" style="">NEW BHAGYALAXMI MOBILE POINT</span><br/>
					<span style="color: #4a4c4c;">287-A, MAIN ROAD SAVEENA,</span><br/>
					<span style="color: #4a4c4c;">Udaipur, Rajasthan. PIN: 313001</span><br/>
					<span style="color: #4a4c4c;">Tel: +91 9001222622</span><br/>
					<span style="color: #4a4c4c;">GSTIN: 08BICPD5795A1ZG</span></b>
				</div>
			</td>
			<td width="30%"></td>
		</tr>
	</table>
	
	<div align="center" style="padding: 5px 0px;border-top: solid 1px;border-bottom: solid 1px;background-color : #c4151c !important;font-size:18px;color: #FFF !important;"><b style="color: #FFF !important;">TAX INVOICE</b></div>
	<div>
		<table width="100%">
			<tr>
				<td style="border-right:solid 1px;padding:5px;" width="50%" valign="top">
					<table>
						<tr>
							<td><b>Invoice No.</b></td>
							<td>&nbsp;:&nbsp;</td>
							<td><?= h('#'.str_pad($invoice->invoice_no, 4, '0', STR_PAD_LEFT)) ?></td>
						</tr>
						<tr>
							<td><b>Invoice Date</b></td>
							<td>&nbsp;:&nbsp;</td>
							<td><?= $invoice->invoice_date ?></td>
						</tr>
						<tr>
							<td><b>State</b></td>
							<td>&nbsp;:&nbsp;</td>
							<td>Rajasthan</td>
						</tr>
					</table>
				</td>
				<td style="padding:5px;" valign="top">
					<table width="100%">
						<tr>
							<td colspan="6">
								<div style="text-align: center;"><u>Bill to Party</u></div>
							</td>
						</tr>
						<tr>
							<td width="50"><b>Name</b></td>
							<td>&nbsp;:&nbsp;</td>
							<td><?= $invoice->party_name ?></td>
							<td width="50"><b>Mobile</b></td>
							<td>&nbsp;:&nbsp;</td>
							<td><?= $invoice->party_mobile ?></td>
						</tr>
						<tr>
							<td valign="top" width="50"><b>Address</b></td>
							<td valign="top">&nbsp;:&nbsp;</td>
							<td colspan="4"><?= $this->Text->autoParagraph(h($invoice->party_address)) ?></td>
						</tr>
						<tr>
							<td width="50"><b>State</b></td>
							<td>&nbsp;:&nbsp;</td>
							<td><?= $invoice->party_state ?></td>
							<td><b>GSTIN</b></td>
							<td>&nbsp;:&nbsp;</td>
							<td><?= $invoice->party_gst ?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div align="center" style="border:none;">
		<table width="100%" class="tbl">
			<thead>
				<tr style="background-color: #e4e3e3 !important;">
					<th rowspan="2" style="border-left: none;">Sr. No.</th>
					<th rowspan="2">Item Description</th>
					<th rowspan="2">HSN code</th>
					<th rowspan="2">Qty</th>
					<th rowspan="2">Rate</th>
					<th rowspan="2">Amount</th>
					<th colspan="2">Discount</th>
					<th rowspan="2">Taxable Value</th>
					<th colspan="2">CGST</th>
					<th colspan="2">SGST</th>
					<th rowspan="2" style="border-right: none;">Total</th>
				</tr>
				<tr style="background-color: #e4e3e3 !important;">
					<th>Rate</th>
					<th>Amount</th>
					<th>Rate</th>
					<th>Amount</th>
					<th>Rate</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=0; foreach($invoice->invoice_rows as $invoice_row){ ?>
				<tr>
					<td style="text-align:center;border-left: none;"><?= ++$i ?></td>
					<td><?= $this->Text->autoParagraph(h($invoice_row->item)) ?></td>
					<td><?= $invoice_row->hsn_code ?></td>
					<td style="text-align:center;"><?= $invoice_row->quantity ?></td>
					<td style="text-align:right;"><?= $invoice_row->rate ?></td>
					<td style="text-align:right;"><?= $invoice_row->amount ?></td>
					<td style="text-align:right;"><?= $invoice_row->discount_rate ?></td>
					<td style="text-align:right;"><?= $invoice_row->discount_amount ?></td>
					<td style="text-align:right;"><?= $invoice_row->taxable_value ?></td>
					<td style="text-align:right;"><?= $invoice_row->cgst_rate ?></td>
					<td style="text-align:right;"><?= $invoice_row->cgst_amount ?></td>
					<td style="text-align:right;"><?= $invoice_row->sgst_rate ?></td>
					<td style="text-align:right;"><?= $invoice_row->sgst_amount ?></td>
					<td style="text-align:right;border-right: none;"><?= $invoice_row->total ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<?php
		$grand_total=explode('.',$invoice->total_amount_after_tax);
		$rupees=$grand_total[0];
		$paisa_text='';
		if(sizeof($grand_total)==2)
		{
			$grand_total[1]=str_pad($grand_total[1], 2, '0', STR_PAD_RIGHT);
			$paisa=(int)$grand_total[1];
			$paisa_text=' and ' . h(ucwords($this->NumberWords->convert_number_to_words($paisa))) .' Paisa';
		}else{ $paisa_text=""; }
		?>
		<table width="100%" class="tbl">
			<tbody>
				<tr>
					<td style="text-align:left;border-left: none;border-top: none;" rowspan="2" width="70%" valign="top">
						<p><b>Amount in words : </b>
						<?= h(ucwords($this->NumberWords->convert_number_to_words($rupees))) ?> Rupees<?= h($paisa_text) ?>
						</p>
					</td>
					<td style="text-align:right;border-top: none;"><b>Total Amount before Tax</b></td>
					<td style="text-align:right;border-right: none;border-top: none;" width="80"><?= $invoice->total_amount_before_tax ?></td>
				</tr>
				<tr>
					<td style="text-align:right;"><b>Total CGST</b></td>
					<td style="text-align:right;border-right: none;"><?= $invoice->total_cgst ?></td>
				</tr>
				<tr>
					<td style="border-left: none;border-top: none;" rowspan="2" width="70%" valign="top">
						<table width="100%" class="nbtbl">
							<tr>
								<td colspan="2"><b><u>Bank Details:-</u></b> Union Bank of India</td>
							</tr>
							<tr>
								<td><b>Bank A/C : </b>760101010050042</td>
								<td><b>IFSC Code: </b>UBIN0576018</td>
							</tr>
						</table>
					</td>
					<td style="text-align:right;"><b>Total SGST</b></td>
					<td style="text-align:right;border-right: none;"><?= $invoice->total_sgst ?></td>
				</tr>
				<tr>
					<td style="text-align:right;"><b>Total Amount after Tax</b></td>
					<td style="text-align:right;border-right: none;"><?= $invoice->total_amount_after_tax ?></td>
				</tr>
			</tbody>
		</table>
		<table width="100%" class="tbl">
			<tbody>
				<tr>
					<td style="border-top: none;border-left: none;border-right: none;"  valign="top" colspan="2">
						<b><u>Terms & Conditions</u></b>
						<ol>
							<li>बेचा हुआ मॉल वापस नहीं लिया जायेगा </li>
							<li>सर्व विवादों का न्याय क्षेत्र उदयपुर होगा</li>
							<li>टूट-फुट की की गारंटी नहीं होगी </li>
							<li>सेट गिरने या पानी मे जाने पर कंपनी की वारंटी समाप्त हो जायेगी </li>
							<li>वारंटी के अंदर फ़ोन रिपेयर हो कर आने मे काम से काम 15  दिन लगेंगे </li>
							<li>बिक्री के पश्चात सेवा के लिए बिल की मूल प्रति सर्विस सेंटर पर प्रस्तुत करे</li>
							<li>किसी भी खराबी के लिए संबधित कम्पनी जिम्मेदार होगी  ना की विक्रेता </li>
							<li>बिक्री के पश्चात सेवा कंपनी के ऑथॉरिज़ेड सर्विस सेंटर द्वारा  दी जायगी </li>
							<li>कंपनियों के सर्विस सेंटर के  पते व फ़ोन नंबर निचे दिए गये  है  </li>
						</ol>
					</td>
				</tr>
				<tr>
					<td style="border-top: none;border-left: none;" width="50%" valign="top">
						<div align="center"><b>Customer Signture</b></div>
					</td>
					<td style="border-top: none;border-right: none;" valign="bottom">
						<div align="center"><b>For NEW BHAGYALAXMI MOBILE POINT</b></div><br/><br/><br/>
						<div align="center"><span style="border-top: solid 1px;"><b>Authorised signatory</b><span></div>
					</td>
				</tr>
			</tbody>
		</table>
		<div align="center">
			<p>Nokia-Opp. gurunanak school shastri circle | vivo-4th floor mehta chember delhigate | oppo- Rk plaza 1st floor sharstri circle | samsung- technokey police line road tekri udaipur | lava-42 jindathsuri comolex mewar motors gali udaipur | tecno/itel- 131 1st floor b block anand plaza univercity road udaipur | gionee-Rishabh telecom 31 indarprasth complex opp. gurunanak school</p>
		</div>
		<div style="border-top: solid 1px;" >
			<table width="100%" class="footertble">
				<tr>
					<td width="16%" ><?php echo $this->Html->image('/img/oppo.jpg', ['width' => '100%','height'=>'100px']); ?></td>
					<td width="16%"><?php echo $this->Html->image('/img/vivo.jpg', ['width' => '100%','height'=>'50px']); ?></td>
					<td width="16%"><?php echo $this->Html->image('/img/samsung.jpg', ['width' => '100%']); ?></td>
					<td width="16%"><?php echo $this->Html->image('/img/lava.jpg', ['width' => '100%']); ?></td>
					<td width="16%"><?php echo $this->Html->image('/img/gionee.jpg', ['width' => '100%']); ?></td>
					<td width="16%"><?php echo $this->Html->image('/img/nokia.jpg', ['width' => '100%']); ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
