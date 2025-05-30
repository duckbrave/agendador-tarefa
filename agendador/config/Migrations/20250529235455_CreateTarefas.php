<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTarefas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('tarefas');
        $table->addColumn('titulo', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('descricao', 'text', ['null' => true, 'default' => null])
            ->addColumn('data_agendada', 'date', ['null' => true, 'default' => null]) // só data, sem hora
            ->addColumn('concluida', 'boolean', ['default' => false])
            ->addTimestamps()
            ->create();
    }
}
