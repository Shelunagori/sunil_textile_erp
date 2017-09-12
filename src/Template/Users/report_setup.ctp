<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Report Setup');
?>
<div class="row">
	<div class="col-md-6">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-cursor font-purple-intense hide"></i>
					<span class="caption-subject font-blue-steel bold ">Report</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6">
						<span class="caption-subject bold ">Trial Balance</span>
						<div class="list-group">
							<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-edit']).'Trail Balance Report', '/Ledgers/trial_balance',['escape' => false, 'class'=>'list-group-item']); ?>
							</div>
					</div>
					<div class="col-md-6">
						<span class="caption-subject bold ">Account Ledger</span>
						<div class="list-group">
							<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-edit']).'Account Ledger Report', '/Ledgers/accountLedger',['escape' => false, 'class'=>'list-group-item']); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



