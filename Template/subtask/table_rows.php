<td>
    <?php if (! empty($subtask['begin_date'])): ?>
        <?= $this->dt->date($subtask['begin_date']) ?>
    <?php endif ?>
</td>
<td>
    <?php if (! empty($subtask['due_date'])): ?>
        <?= $this->dt->date($subtask['due_date']) ?>
    <?php endif ?>
</td>
