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
            <?= $this->Html->link(__('List Tarefas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tarefas form content">
            <?= $this->Form->create($tarefa) ?>
            <fieldset>
                <legend><?= __('Add Tarefa') ?></legend>
                <?php
                echo $this->Form->control('titulo');
                echo $this->Form->control('descricao');
                echo $this->Form->control('data_agendada', ['type' => 'date']);

                echo $this->Form->control('concluida');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>