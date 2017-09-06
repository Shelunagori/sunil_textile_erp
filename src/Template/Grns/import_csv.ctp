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
					<span class="caption-subject font-green-sharp bold ">Choose Steps</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($import_csv) ?>
				<div class="row">
				
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
