<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cidade Entity
 *
 * @property int $estado_cod_estado
 * @property int $cod_cidade
 * @property string $nome
 * @property string $cep
 */
class Cidade extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'cod_cidade' => false
    ];
}
