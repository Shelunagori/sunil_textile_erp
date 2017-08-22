<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Stock Groups | Sunil Textile ERP');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Stock Groups</span>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-condensed table-hover table-bordered">
					<thead>
						<tr>
							<th scope="col"><?= $this->Paginator->sort('Sr') ?></th>
							<th scope="col"><?= $this->Paginator->sort('name') ?></th>
							<th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($stockGroups as $stockGroup): ?>
						<tr>
							<td><?= $this->Number->format($stockGroup->id) ?></td>
							<td><?= h($stockGroup->name) ?></td>
							<td><?= $stockGroup->has('parent_stock_group') ? $this->Html->link($stockGroup->parent_stock_group->name, ['controller' => 'StockGroups', 'action' => 'view', $stockGroup->parent_stock_group->id]) : '' ?></td>
							<td><?= $stockGroup->has('company') ? $this->Html->link($stockGroup->company->name, ['controller' => 'Companies', 'action' => 'view', $stockGroup->company->id]) : '' ?></td>
							<td class="actions">
								<?= $this->Html->link(__('View'), ['action' => 'view', $stockGroup->id]) ?>
								<?= $this->Html->link(__('Edit'), ['action' => 'edit', $stockGroup->id]) ?>
								<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stockGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockGroup->id)]) ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class="paginator">
					<ul class="pagination">
						<?= $this->Paginator->first('<< ' . __('first')) ?>
						<?= $this->Paginator->prev('< ' . __('previous')) ?>
						<?= $this->Paginator->numbers() ?>
						<?= $this->Paginator->next(__('next') . ' >') ?>
						<?= $this->Paginator->last(__('last') . ' >>') ?>
					</ul>
					<p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

