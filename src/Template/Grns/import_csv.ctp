<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Import CSV');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Instructions Steps </span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($import_csv) ?>
				<div class="row">
					<div class="col-md-6 col-sm-6">
					<div class="portlet box blue-steel">
						<div class="portlet-title">
							<div class="caption">
								Follow the Instructions Steps given Below
							</div>
						</div>
						<div class="portlet-body">
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="scroller" style="height: 300px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible="0" data-initialized="1">
								<b></b><ol class="numbers">
									
									<?php $url=$this->request->webroot.'samplecsv/importGRNSapmleStep1.csv';
									?><br/>
									<li><b>First Download the Sample CSV file
										<span><a href="<?php echo $url; ?>"> Click here to Download </b></a></span>
									</li>
									<br/>
									<li><b>Open the CSV file and fill the records(Item code, Quantity,Sales Rate,Purchase Rate) in given format and save it. </b>
									</li>
									<br/>
									<li><b>Upload the CSV File and submit it <span><?php echo $this->Html->link('Click Here to go to link',['controller'=>'FirstTampGrnRecords','action' => 'Import'],['escape'=>false]); ?></span></b>
									</li>
									<br/>
									<li><b>Download the CSV file for furher Process
										<?php echo $this->Html->link('Click Here to Download',['controller'=>'FirstTampGrnRecords','action' => 'csvDownload'],['escape'=>false]); ?></span></b>
									</li>
									</br>
									<li><b>Open the CSV file and if Addition Item Data Required is "Yes" then fill the other records( item name, hsn code,unit, gst rate fix or fluid, first gst rate,amount in refence to gst rate(if gst rate is fluid), second gst rate(if gst rate is fluid)) in given format and save it. </b>
									</li>
									<br/>
									<li><b>Upload the CSV File and submit it, After that Edit the Invalid data if have and Click on Final Import  <span><?php echo $this->Html->link('Click Here to go to link',['controller'=>'Grns','action' => 'ImportStep2'],['escape'=>false]); ?></span></b>
									</li>
									<br/>
								</ol>
							</div>
						</div>
					</div>
				</div>s
				</div>
				<div class="row" style="display:none;">
				
					<div class="col-md-6" align="center">
					    <?php echo $this->Html->link($this->Html->tag('i', '').' Step First', '/FirstTampGrnRecords/import',['escape' => false,'class'=>'icon-btn']); ?>
					</div>
					<div class="col-md-6" align="center">
						<?php echo $this->Html->link($this->Html->tag('i', '').' Step Second', '/Grns/import_step2',['escape' => false,'class'=>'icon-btn']); ?>
					</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
