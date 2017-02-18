<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Unidade Entity
 *
 * @property int $cod_unidade
 * @property int $hospital_vinculado
 * @property string $nome
 * @property string $municipio
 * @property string $uf
 * @property string $regional
 * @property string $tipo_atencao
 * @property int $total_leitos
 * @property int $leitos_disponiveis
 * @property string $tipo_leito
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cep
 * @property string $telefone_fax
 * @property string $email
 */
class Unidade extends Entity
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
        'cod_unidade' => false
    ];
}
