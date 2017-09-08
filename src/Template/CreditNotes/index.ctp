<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Sales Invoice List');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Credit Note List</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-condensed">
						<thead>
							<tr>
								<th scope="col">Sr. No.</th>
								<th scope="col">Sales_invoice_no</th>
								<th scope="col">Transaction_date</th>
								<th scope="col">Customer</th>
								<th scope="col">Amount_before_tax</th>
								<th scope="col">Total CGST</th>
								<th scope="col">Total SGST</th>
								<th scope="col">Total IGST</th>
								<th scope="col">Amount After Tax</th>
								<th scope="col" class="actions"><?= __('Actions') ?></th>
							</tr>
						</thead>
						<tbody>
							<?php 	$i=0;      
									foreach ($creditNotes as $creditNote): 
									$i++;
									
							?>
							<tr>
								<td><?= h($i) ?></td>
								<td><?= h($creditNote->sales_invoice_no) ?></td>
								<td><?= h($creditNote->transaction_date) ?></td>
								<td><?= $creditNote->has('party_ledger') ? $this->Html->link($creditNote->party_ledger->name, ['controller' => 'Ledgers', 'action' => 'view', $creditNote->party_ledger->id]) : '' ?></td>
								<td><?= $this->Number->format($creditNote->amount_before_tax) ?></td>
								<td><?= $this->Number->format($creditNote->total_cgst) ?></td>
								<td><?= $this->Number->format($creditNote->total_sgst) ?></td>
								<td><?= $this->Number->format($creditNote->total_igst) ?></td>
								<td><?= $this->Number->format($creditNote->amount_after_tax) ?></td>
								<td class="actions">
									<?= $this->Html->link(__('View'), ['action' => 'view', $creditNote->id]) ?>
									<?= $this->Html->link(__('Edit'), ['action' => 'edit', $creditNote->id]) ?>
										</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
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