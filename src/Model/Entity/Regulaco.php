<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Regulaco Entity
 *
 * @property int $cod_regulacao
 * @property int $cod_paciente
 * @property int $cod_solicitador
 * @property string $nome_solicitador
 * @property string $crm_solicitador
 * @property int $cod_avaliador
 * @property int $cod_prestador
 * @property int $cod_usuario_alteracao
 * @property int $cod_usuario_cancelamento
 * @property int $cod_unidade_origem
 * @property int $cod_unidade_regulacao
 * @property int $cod_unidade_destino
 * @property string $tipo_regulacao
 * @property int $status_reg
 * @property int $status_reg_compl
 * @property bool $via_direta
 * @property bool $tipo_transferencia
 * @property string $motivo_solicitacao
 * @property string $motivo_cancelamento
 * @property string $motivo_cronologico
 * @property string $motivo_prorrogacao
 * @property string $medicacoes_utilizadas
 * @property string $exames_complementares
 * @property string $cid10_diagnostico
 * @property string $cid10_seg_diagnostico
 * @property \Cake\I18n\Time $data_solicitacao
 * @property \Cake\I18n\Time $data_lista_reg
 * @property \Cake\I18n\Time $data_vaga_reg
 * @property \Cake\I18n\Time $data_admissao_reg
 * @property \Cake\I18n\Time $data_lista_hospital
 * @property \Cake\I18n\Time $data_vaga_hospital
 * @property \Cake\I18n\Time $data_internacao
 * @property \Cake\I18n\Time $data_cancel_solicitacao
 * @property \Cake\I18n\Time $data_transferencia
 * @property string $observacoes
 * @property string $traumatismo
 * @property string $prob_respiratorios
 * @property string $avc
 * @property string $convulsao
 * @property string $has
 * @property string $gravidez
 * @property string $diabetes
 * @property string $doenca_infecto
 * @property string $outras_comorbidades
 * @property string $contato_local
 * @property int $msg_solicitador
 * @property int $msg_avaliador
 * @property int $msg_prestador
 * @property string $tipo_destinatario
 * @property bool $em_permuta
 * @property string $clinica_origem
 * @property string $especialidade_medica
 * @property string $tipo_internacao_de
 * @property \Cake\I18n\Time $data_expiracao
 * @property bool $liberacao_extendida
 * @property string $motivo_expiracao
 * @property int $cod_cidade_residencia
 * @property int $cod_estado_residencia
 * @property \Cake\I18n\Time $data_troca_posicao
 * @property string $motivo_troca_posicao
 */
class Regulaco extends Entity
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
        'cod_regulacao' => false
    ];
}
