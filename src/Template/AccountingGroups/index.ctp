<?php
/**
 * @Author: Kounty
 */
$this->set('title', 'Accounting Groups | kounty');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Accounting Groups</span>
				</div>
			</div>
			<div class="portlet-body">
				<?php $page_no=$this->Paginator->current('AccountingGroups'); $page_no=($page_no-1)*20; ?>
				<table class="table table-bordered table-hover table-condensed">
					<thead>
						<tr>
							<th scope="col">Sr</th>
							<th scope="col"><?= $this->Paginator->sort('nature_of_group_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('name') ?></th>
							<th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($accountingGroups as $accountingGroup): ?>
						<tr>
							<td><?= h(++$page_no) ?></td>
							<td><?= $accountingGroup->has('nature_of_group') ? $accountingGroup->nature_of_group->name : '' ?></td>
							<td><?= h($accountingGroup->name) ?></td>
							<td><?= $accountingGroup->has('parent_accounting_group') ? $accountingGroup->parent_accounting_group->name : '' ?></td>
							<td class="actions">
								<?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountingGroup->id]) ?>
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

