<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegulacoesFixture
 *
 */
class RegulacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cod_regulacao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cod_paciente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Código do paciente.', 'precision' => null, 'autoIncrement' => null],
        'cod_solicitador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nome_solicitador' => ['type' => 'string', 'length' => 70, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Para as senhas de serviço e para o solicitante da epqu - nome antigo: solicitante.', 'precision' => null, 'fixed' => null],
        'crm_solicitador' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Para as senhas de serviço.', 'precision' => null, 'fixed' => null],
        'cod_avaliador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cod_prestador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Antigo: cod_profissional (da tabela internacao)
', 'precision' => null, 'autoIncrement' => null],
        'cod_usuario_alteracao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Código do usuário responsável por mudar o paciente de list', 'precision' => null, 'autoIncrement' => null],
        'cod_usuario_cancelamento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cod_unidade_origem' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cod_unidade_regulacao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cod_unidade_destino' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_regulacao' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'NORMAL - NO
EPQU - EP
DEMANDA EXPONTÂNEA - DE
CAPS 3 - CAP', 'precision' => null, 'fixed' => null],
        'status_reg' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => '3', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status_reg_compl' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Nome antigo: status2

Status complementar da lista de regulação, para que se possa transferir um paciente e também dar a al', 'precision' => null, 'autoIncrement' => null],
        'via_direta' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => 'Representa tipo de solicitação:

0: via UCP
1: via internação hospitalar
2: via ambulato', 'precision' => null],
        'tipo_transferencia' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => 'Tipo de transferência:

0 - transferência normal (VIA UCP ou Via internação hospitalar).
1 - transferência entre hospi', 'precision' => null],
        'motivo_solicitacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Motivo da solicitação de internação.

Nome antigo: descricao_caso

Motivo da epqu tambem virá pra cá!
Antigo: outros_mo', 'precision' => null],
        'motivo_cancelamento' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Motivo do cancelamento da solicitação', 'precision' => null],
        'motivo_cronologico' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Motivo pelo não seguimento da ordem cronológica na lista de regulação.', 'precision' => null],
        'motivo_prorrogacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Motivo para a prorrogação da solicitação.', 'precision' => null],
        'medicacoes_utilizadas' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Medicações utilizadas com o paciente', 'precision' => null],
        'exames_complementares' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Exames complementares.
', 'precision' => null],
        'cid10_diagnostico' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Código CID10 do diagnóstico', 'precision' => null, 'fixed' => null],
        'cid10_seg_diagnostico' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Segundo diagnóstico do paciente.', 'precision' => null, 'fixed' => null],
        'data_solicitacao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que foi feita a solicitação.', 'precision' => null],
        'data_lista_reg' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que o paciente foi aceito na lista da UE / Regulação', 'precision' => null],
        'data_vaga_reg' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que a vaga foi liberada para o paciente chegar até a UE / Regulaçã', 'precision' => null],
        'data_admissao_reg' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que o paciente foi admitido na UE / Regulação', 'precision' => null],
        'data_lista_hospital' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que o prestador aceitou paciente em sua lista.
', 'precision' => null],
        'data_vaga_hospital' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que a vaga foi liberada pelo hospital.
', 'precision' => null],
        'data_internacao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que o paciente foi internado no prestador.
', 'precision' => null],
        'data_cancel_solicitacao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que foi feito o cancelamento da solicitaçao.', 'precision' => null],
        'data_transferencia' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data em que o médico da UE inseriu o paciente na lista do hospital', 'precision' => null],
        'observacoes' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Observações da solicitação.', 'precision' => null],
        'traumatismo' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Traumatismo:

Sim
Nã', 'precision' => null, 'fixed' => null],
        'prob_respiratorios' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Problemas respiratórios

Sim
N', 'precision' => null, 'fixed' => null],
        'avc' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Sequela de AVC', 'precision' => null, 'fixed' => null],
        'convulsao' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Convulsão:

Sim
N', 'precision' => null, 'fixed' => null],
        'has' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Hipertensão arterial sistêmcia:

Sim
N', 'precision' => null, 'fixed' => null],
        'gravidez' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Gravidez:

Sim
Nã', 'precision' => null, 'fixed' => null],
        'diabetes' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Diabetes

Sim
Nã', 'precision' => null, 'fixed' => null],
        'doenca_infecto' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Doenças infecto-contagiosas:

Sim
N', 'precision' => null, 'fixed' => null],
        'outras_comorbidades' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'contato_local' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Contato da unidade solicitante onde o paciente está aguardando para ser encaminhando para outro local.', 'precision' => null],
        'msg_solicitador' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => 'msg_solicitador 0 = mensagem do solicitador (remetente) não lida
msg_solicitador 1 =  mensagem do solicitador (remetente) lid', 'precision' => null, 'autoIncrement' => null],
        'msg_avaliador' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => 'msg_avaliador 0 = mensagem do avaliador (remetente) não lida
msg_avaliador 1 =  mensagem do avaliador (remetente) lid', 'precision' => null, 'autoIncrement' => null],
        'msg_prestador' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => 'msg_prestador 0 = mensagem do prestador (remetente) não lida
msg_prestador 1 =  mensagem do prestador (remetente) lid', 'precision' => null, 'autoIncrement' => null],
        'tipo_destinatario' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Solicitador - SO
Avaliador - AV', 'precision' => null, 'fixed' => null],
        'em_permuta' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'clinica_origem' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'especialidade_medica' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'tipo_internacao_de' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Tipo da internação por demanda espontânea da UE:
- Demanda espontânea 
- Ordem judicial de porta
- Transferência de outra clínica', 'precision' => null],
        'data_expiracao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'liberacao_extendida' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'motivo_expiracao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cod_cidade_residencia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cod_estado_residencia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'estado de residencia do paciente no momento da solicitacao', 'precision' => null, 'autoIncrement' => null],
        'data_troca_posicao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'motivo_troca_posicao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Pacientes_Regulacoes_idx' => ['type' => 'index', 'columns' => ['cod_paciente'], 'length' => []],
            'fk_Unidades_Regulacoes_idx' => ['type' => 'index', 'columns' => ['cod_unidade_origem'], 'length' => []],
            'fk_Unidades_Regulacoes_2_idx' => ['type' => 'index', 'columns' => ['cod_unidade_regulacao'], 'length' => []],
            'fk_Unidades_Regulacoes_3_idx' => ['type' => 'index', 'columns' => ['cod_unidade_destino'], 'length' => []],
            'fk_Usuarios_Regulacoes_idx' => ['type' => 'index', 'columns' => ['cod_solicitador'], 'length' => []],
            'fk_Usuarios_Regulacoes_2_idx' => ['type' => 'index', 'columns' => ['cod_avaliador'], 'length' => []],
            'fk_Usuarios_Regulacoes_3_idx' => ['type' => 'index', 'columns' => ['cod_prestador'], 'length' => []],
            'fk_Usuarios_Regulacoes_4_idx' => ['type' => 'index', 'columns' => ['cod_usuario_cancelamento'], 'length' => []],
            'fk_Usuarios_Regulacoes_5_idx' => ['type' => 'index', 'columns' => ['cod_usuario_alteracao'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_regulacao'], 'length' => []],
            'regulacoes_ibfk_1' => ['type' => 'foreign', 'columns' => ['cod_paciente'], 'references' => ['pacientes', 'cod_paciente'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'regulacoes_ibfk_2' => ['type' => 'foreign', 'columns' => ['cod_solicitador'], 'references' => ['usuarios', 'cod_usuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'regulacoes_ibfk_3' => ['type' => 'foreign', 'columns' => ['cod_avaliador'], 'references' => ['usuarios', 'cod_usuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'regulacoes_ibfk_4' => ['type' => 'foreign', 'columns' => ['cod_prestador'], 'references' => ['usuarios', 'cod_usuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'regulacoes_ibfk_5' => ['type' => 'foreign', 'columns' => ['cod_usuario_alteracao'], 'references' => ['usuarios', 'cod_usuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'regulacoes_ibfk_6' => ['type' => 'foreign', 'columns' => ['cod_usuario_cancelamento'], 'references' => ['usuarios', 'cod_usuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'regulacoes_ibfk_7' => ['type' => 'foreign', 'columns' => ['cod_unidade_origem'], 'references' => ['unidades', 'cod_unidade'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'regulacoes_ibfk_8' => ['type' => 'foreign', 'columns' => ['cod_unidade_regulacao'], 'references' => ['unidades', 'cod_unidade'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'regulacoes_ibfk_9' => ['type' => 'foreign', 'columns' => ['cod_unidade_destino'], 'references' => ['unidades', 'cod_unidade'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'cod_regulacao' => 1,
            'cod_paciente' => 1,
            'cod_solicitador' => 1,
            'nome_solicitador' => 'Lorem ipsum dolor sit amet',
            'crm_solicitador' => 'Lorem ip',
            'cod_avaliador' => 1,
            'cod_prestador' => 1,
            'cod_usuario_alteracao' => 1,
            'cod_usuario_cancelamento' => 1,
            'cod_unidade_origem' => 1,
            'cod_unidade_regulacao' => 1,
            'cod_unidade_destino' => 1,
            'tipo_regulacao' => 'Lorem ip',
            'status_reg' => 1,
            'status_reg_compl' => 1,
            'via_direta' => 1,
            'tipo_transferencia' => 1,
            'motivo_solicitacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'motivo_cancelamento' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'motivo_cronologico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'motivo_prorrogacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'medicacoes_utilizadas' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'exames_complementares' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'cid10_diagnostico' => 'Lorem ip',
            'cid10_seg_diagnostico' => 'Lorem ip',
            'data_solicitacao' => '2016-11-16 13:46:45',
            'data_lista_reg' => '2016-11-16 13:46:45',
            'data_vaga_reg' => '2016-11-16 13:46:45',
            'data_admissao_reg' => '2016-11-16 13:46:45',
            'data_lista_hospital' => '2016-11-16 13:46:45',
            'data_vaga_hospital' => '2016-11-16 13:46:45',
            'data_internacao' => '2016-11-16 13:46:45',
            'data_cancel_solicitacao' => '2016-11-16 13:46:45',
            'data_transferencia' => '2016-11-16 13:46:45',
            'observacoes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'traumatismo' => 'Lorem ipsum d',
            'prob_respiratorios' => 'Lorem ipsum d',
            'avc' => 'Lorem ipsum d',
            'convulsao' => 'Lorem ipsum d',
            'has' => 'Lorem ipsum d',
            'gravidez' => 'Lorem ipsum d',
            'diabetes' => 'Lorem ipsum d',
            'doenca_infecto' => 'Lorem ipsum d',
            'outras_comorbidades' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'contato_local' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'msg_solicitador' => 1,
            'msg_avaliador' => 1,
            'msg_prestador' => 1,
            'tipo_destinatario' => '',
            'em_permuta' => 1,
            'clinica_origem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'especialidade_medica' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'tipo_internacao_de' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'data_expiracao' => '2016-11-16 13:46:45',
            'liberacao_extendida' => 1,
            'motivo_expiracao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'cod_cidade_residencia' => 1,
            'cod_estado_residencia' => 1,
            'data_troca_posicao' => '2016-11-16 13:46:45',
            'motivo_troca_posicao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
