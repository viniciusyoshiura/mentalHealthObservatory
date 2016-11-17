<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $cod_pessoa
 * @property string $tipo_pessoa
 * @property \Cake\I18n\Time $data_cadastro
 * @property string $nome
 * @property string $sexo
 * @property string $cpf
 * @property string $nro_rg
 * @property string $uf_rg
 * @property \Cake\I18n\Time $data_nascimento
 * @property string $profissao_ocupacao
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $uf
 * @property string $municipio
 * @property string $cep
 * @property string $telefone
 * @property string $tipo_telefone
 * @property string $email
 */
class Pessoa extends Entity
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
        'cod_pessoa' => false
    ];
}
