<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar Tarefa'), ['action' => 'edit', $task->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Tarefa'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Tarefa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Tarefa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tasks view content">
            <h3><?= h($task->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($task->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($task->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Agendada') ?></th>
                    <td><?= h($task->data_agendada ? $task->data_agendada->format('d/m/Y') : '') ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($task->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($task->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Completed') ?></th>
                    <td><?= $task->completed ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($task->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
