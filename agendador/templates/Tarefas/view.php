<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tarefa'), ['action' => 'edit', $tarefa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tarefa'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tarefas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tarefa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tarefas view content">
            <h3><?= h($tarefa->titulo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($tarefa->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tarefa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Agendada') ?></th>
                    <td><?= h($tarefa->data_agendada) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concluida') ?></th>
                    <td><?= $tarefa->concluida ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tarefa->descricao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
