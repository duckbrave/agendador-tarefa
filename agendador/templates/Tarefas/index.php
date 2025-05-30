<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tarefa> $tarefas
 */
?>
<div class="tarefas index content">
    <?= $this->Html->link(__('New Tarefa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tarefas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('data_agendada') ?></th>
                    <th><?= $this->Paginator->sort('concluida') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tarefas as $tarefa): ?>
                <tr>
                    <td><?= $this->Number->format($tarefa->id) ?></td>
                    <td><?= h($tarefa->titulo) ?></td>
                    <td><?= h($tarefa->data_agendada) ?></td>
                    <td><?= h($tarefa->concluida) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tarefa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tarefa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
