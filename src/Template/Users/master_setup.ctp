<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Master Setup');
?>
<div class="portlet light ">
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-cursor font-purple-intense hide"></i>
			<span class="caption-subject font-blue-steel bold ">Stock info.</span>
		</div>
	</div>
	<div class="portlet-body">
		<div class="row">
			<div class="col-md-3">
				<span class="caption-subject bold ">Stock Groups</span>
				<div class="list-group">
					<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square menuCss']).' Create', '/StockGroups/Add',['escape' => false, 'class'=>'list-group-item']); ?>
					<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul menuCss']).' List', '/StockGroups',['escape' => false, 'class'=>'list-group-item']); ?>
				</div>
			</div>
			<div class="col-md-3">
				<span class="caption-subject bold ">Items</span>
				<div class="list-group">
					<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square menuCss']).' Create', '/Items/Add',['escape' => false, 'class'=>'list-group-item']); ?>
					<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul menuCss']).' List', '/Items',['escape' => false, 'class'=>'list-group-item']); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="portlet light ">
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-cursor font-purple-intense hide"></i>
			<span class="caption-subject font-blue-steel bold ">Account info.</span>
		</div>
	</div>
	<div class="portlet-body">
		<div class="row">
			<div class="col-md-3">
				<span class="caption-subject bold ">Accounting Groups</span>
				<div class="list-group">
					<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square']).' Create', '/AccountingGroups/Add',['escape' => false, 'class'=>'list-group-item']); ?>
					<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul']).' List', '/AccountingGroups',['escape' => false, 'class'=>'list-group-item']); ?>
				</div>
			</div>
			<div class="col-md-3">
				<span class="caption-subject bold ">Items</span>
				<div class="list-group">
					<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square menuCss']).' Create', '/Items/Add',['escape' => false, 'class'=>'list-group-item']); ?>
					<?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul menuCss']).' List', '/Items',['escape' => false, 'class'=>'list-group-item']); ?>
				</div>
			</div>
		</div>
	</div>
</div>
