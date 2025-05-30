<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tarefa Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property \Cake\I18n\FrozenTime $data_agendada
 * @property bool $concluida
 */
class Tarefa extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'titulo' => true,
        'descricao' => true,
        'data_agendada' => true,
        'concluida' => true,
    ];
}
