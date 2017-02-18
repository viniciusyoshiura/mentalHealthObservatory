<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Internaco Entity
 *
 * @property int $cod_internacao
 * @property int $cod_regulacao
 * @property int $cod_transf_1
 * @property int $cod_transf_2
 * @property int $cod_transf_alta
 * @property int $cod_profissional
 * @property string $nome_unid_transf
 * @property int $cod_profissional_alta
 * @property string $nome_prof_alta
 * @property string $crm_prof_alta
 * @property bool $status_internacao
 * @property \Cake\I18n\Time $data_internacao
 * @property string $motivo_internacao
 * @property \Cake\I18n\Time $data_alta
 * @property string $cid10_diagnostico
 * @property string $cid10_seg_diagnostico
 * @property string $comorbidade
 * @property string $tipo_alta
 * @property string $tipo_internacao
 * @property string $motivo_transferencia
 * @property string $medicacao_inicial
 * @property string $observacoes
 * @property string $tratamento_internacao
 * @property string $exames_internacao
 * @property string $historia_clinica_internacao
 * @property string $medicacao_alta
 * @property string $cid10_diagnostico_alta
 * @property string $cid10_seg_diagnostico_alta
 * @property string $nro_prontuario_alta
 * @property string $nro_leito_alta
 * @property string $acompanhamento_alta
 * @property string $nome_resp
 * @property string $vinculo_resp
 * @property string $endereco_resp
 * @property string $telefone_resp
 */
class Internaco extends Entity
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
        'cod_internacao' => false
    ];
}
