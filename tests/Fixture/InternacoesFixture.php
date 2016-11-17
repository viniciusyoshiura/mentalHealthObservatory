<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InternacoesFixture
 *
 */
class InternacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cod_internacao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cod_regulacao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Código da regulação de onde o paciente proveio.', 'precision' => null, 'autoIncrement' => null],
        'cod_transf_1' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Código da unidade da internação.

*Quando um paciente é transferido pela primeira vez, entre setores do mesmo hospital ou entre o hospital Santa Tereza e o Cais, numa mesma internação, o cod_transf_1 deve ser modif', 'precision' => null, 'autoIncrement' => null],
        'cod_transf_2' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'cod_transf_especial
', 'precision' => null, 'autoIncrement' => null],
        'cod_transf_alta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Para transferência entre hospitais.
Quando o paciente tem alta por transferência, para qual unidade ele foi transferid', 'precision' => null, 'autoIncrement' => null],
        'cod_profissional' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Profissional responsável pela internação', 'precision' => null, 'autoIncrement' => null],
        'nome_unid_transf' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Unidade de transferência externa que não foi registrada no sistema, indicada no momento da alta do paciente', 'precision' => null, 'fixed' => null],
        'cod_profissional_alta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Profissional responsável pela alta.', 'precision' => null, 'autoIncrement' => null],
        'nome_prof_alta' => ['type' => 'string', 'length' => 70, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Nome do profissional para alta, para o caso da senha de serviço, ex. EPQU - HC.', 'precision' => null, 'fixed' => null],
        'crm_prof_alta' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'CRM do profissional da alta, para o caso da senha de serviço, ex. EPQU - HC.', 'precision' => null, 'fixed' => null],
        'status_internacao' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => 'Antigo: status (da tabela internacoes)Status da internação1 - Internado0 - Alt', 'precision' => null],
        'data_internacao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data e hora da internação.', 'precision' => null],
        'motivo_internacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Motivo da internação.', 'precision' => null],
        'data_alta' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da alta do paciente.
', 'precision' => null],
        'cid10_diagnostico' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Diagnóstico do paciente no momento da internação.', 'precision' => null, 'fixed' => null],
        'cid10_seg_diagnostico' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Segundo diagnóstico da internaçã', 'precision' => null, 'fixed' => null],
        'comorbidade' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Comorbidades do paciente.', 'precision' => null],
        'tipo_alta' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Tipo da alta do paciente (checklist)
', 'precision' => null, 'fixed' => null],
        'tipo_internacao' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Tipo da internação', 'precision' => null, 'fixed' => null],
        'motivo_transferencia' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Motivo da transferência.', 'precision' => null],
        'medicacao_inicial' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Medicação da entrada na internaç', 'precision' => null],
        'observacoes' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Observações da internação.', 'precision' => null],
        'tratamento_internacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Tratamento realizado durante a internção', 'precision' => null],
        'exames_internacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Exames realizados durante a internação', 'precision' => null],
        'historia_clinica_internacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'História clínica da internç', 'precision' => null],
        'medicacao_alta' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Medicação da alta.', 'precision' => null],
        'cid10_diagnostico_alta' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Diagnóstico da alta.', 'precision' => null, 'fixed' => null],
        'cid10_seg_diagnostico_alta' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Segundo diagnóstico da alta.', 'precision' => null, 'fixed' => null],
        'nro_prontuario_alta' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Número do prontuário.', 'precision' => null, 'fixed' => null],
        'nro_leito_alta' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Número do leito.', 'precision' => null, 'fixed' => null],
        'acompanhamento_alta' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Acompanhamento na alta.

Acompanhado/desacompanhado.
', 'precision' => null, 'fixed' => null],
        'nome_resp' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Nome do responsável por estar acompanhando o paciente na alta.', 'precision' => null, 'fixed' => null],
        'vinculo_resp' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Vínculo do acompanhante.', 'precision' => null, 'fixed' => null],
        'endereco_resp' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Endereço do acompanhante.', 'precision' => null, 'fixed' => null],
        'telefone_resp' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Telefone do acompanhante.', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_Unidades_Internacoes_idx' => ['type' => 'index', 'columns' => ['cod_transf_1'], 'length' => []],
            'fk_Usuarios_Internacoes_idx' => ['type' => 'index', 'columns' => ['cod_profissional_alta'], 'length' => []],
            'fk_Regulacoes_Internacoes_idx' => ['type' => 'index', 'columns' => ['cod_regulacao'], 'length' => []],
            'fk_Unidades_Internacoes_2_idx' => ['type' => 'index', 'columns' => ['cod_transf_alta'], 'length' => []],
            'fk_Unidades_Internacoes_3_idx' => ['type' => 'index', 'columns' => ['cod_transf_2'], 'length' => []],
            'fk_Usuarios_Internacoes_2_idx' => ['type' => 'index', 'columns' => ['cod_profissional'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_internacao'], 'length' => []],
            'internacoes_ibfk_1' => ['type' => 'foreign', 'columns' => ['cod_regulacao'], 'references' => ['regulacoes', 'cod_regulacao'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'internacoes_ibfk_2' => ['type' => 'foreign', 'columns' => ['cod_transf_1'], 'references' => ['unidades', 'cod_unidade'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'internacoes_ibfk_3' => ['type' => 'foreign', 'columns' => ['cod_transf_2'], 'references' => ['unidades', 'cod_unidade'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'internacoes_ibfk_4' => ['type' => 'foreign', 'columns' => ['cod_transf_alta'], 'references' => ['unidades', 'cod_unidade'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'internacoes_ibfk_5' => ['type' => 'foreign', 'columns' => ['cod_profissional'], 'references' => ['usuarios', 'cod_usuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'internacoes_ibfk_6' => ['type' => 'foreign', 'columns' => ['cod_profissional_alta'], 'references' => ['usuarios', 'cod_usuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'cod_internacao' => 1,
            'cod_regulacao' => 1,
            'cod_transf_1' => 1,
            'cod_transf_2' => 1,
            'cod_transf_alta' => 1,
            'cod_profissional' => 1,
            'nome_unid_transf' => 'Lorem ipsum dolor sit amet',
            'cod_profissional_alta' => 1,
            'nome_prof_alta' => 'Lorem ipsum dolor sit amet',
            'crm_prof_alta' => 'Lorem ip',
            'status_internacao' => 1,
            'data_internacao' => '2016-11-16 13:46:17',
            'motivo_internacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'data_alta' => '2016-11-16 13:46:17',
            'cid10_diagnostico' => 'Lorem ip',
            'cid10_seg_diagnostico' => 'Lorem ip',
            'comorbidade' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'tipo_alta' => 'Lorem ipsum dolor sit amet',
            'tipo_internacao' => 'Lorem ipsum dolor sit amet',
            'motivo_transferencia' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'medicacao_inicial' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'observacoes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'tratamento_internacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'exames_internacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'historia_clinica_internacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'medicacao_alta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'cid10_diagnostico_alta' => 'Lorem ip',
            'cid10_seg_diagnostico_alta' => 'Lorem ip',
            'nro_prontuario_alta' => 'Lorem ip',
            'nro_leito_alta' => 'Lorem ip',
            'acompanhamento_alta' => 'Lorem ipsum d',
            'nome_resp' => 'Lorem ipsum dolor sit amet',
            'vinculo_resp' => 'Lorem ipsum dolor ',
            'endereco_resp' => 'Lorem ipsum dolor sit amet',
            'telefone_resp' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
