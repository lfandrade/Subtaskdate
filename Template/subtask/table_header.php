<th>
	<?php if (isset($paginator)): ?>
	    <?= $paginator->order(t('Begin Date'), \Kanboard\Model\SubtaskModel::TABLE.'.begin_date') ?>
	<?php else: ?>
		<?= t('Begin Date') ?>
	<?php endif ?>
</th>
<th>
	<?php if (isset($paginator)): ?>
	    <?= $paginator->order(t('Due Date'), \Kanboard\Model\SubtaskModel::TABLE.'.due_date') ?>
	<?php else: ?>
		<?= t('Due Date') ?>
	<?php endif ?>
</th>

