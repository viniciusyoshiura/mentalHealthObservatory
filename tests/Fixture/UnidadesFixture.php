<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UnidadesFixture
 *
 */
class UnidadesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cod_unidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Identifica unicamente cada unidade.', 'autoIncrement' => true, 'precision' => null],
        'hospital_vinculado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'antigo:hospital
', 'precision' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 400, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Nome da unidade.', 'precision' => null, 'fixed' => null],
        'municipio' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Municipio ao qual pertence a unidade.', 'precision' => null, 'fixed' => null],
        'uf' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Estado ao qual pertence a unidade.', 'precision' => null, 'fixed' => null],
        'regional' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Regional de Saúde a qual pertence a unidade, caso houver.', 'precision' => null, 'fixed' => null],
        'tipo_atencao' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Atenção Básica
Atenção Especializada
Atenção Hos', 'precision' => null, 'fixed' => null],
        'total_leitos' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Total de leitos de uma unidade.', 'precision' => null, 'autoIncrement' => null],
        'leitos_disponiveis' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Leitos disponíveis na unidade, caso ela possua leitos. Se não possuir o valor dessa coluna será = ', 'precision' => null, 'autoIncrement' => null],
        'tipo_leito' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Tipos de leito podem ser:

F - feminino
M - masculino', 'precision' => null, 'fixed' => null],
        'logradouro' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Logradouro no qual se encontra a unidade.', 'precision' => null, 'fixed' => null],
        'numero' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Número no logradouro no qual se encontra a unidade.', 'precision' => null, 'fixed' => null],
        'complemento' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Complemento no logradouro no qual se encontra a unidade.', 'precision' => null, 'fixed' => null],
        'bairro' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Bairro no qual se encontra a unidade.', 'precision' => null, 'fixed' => null],
        'cep' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Cep da Unidade.', 'precision' => null, 'fixed' => null],
        'telefone_fax' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Telefone e Fax da Unidade', 'precision' => null],
        'email' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Email da Unidade', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_Unidades_Unidades_idx' => ['type' => 'index', 'columns' => ['hospital_vinculado'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_unidade'], 'length' => []],
            'unidades_ibfk_2' => ['type' => 'foreign', 'columns' => ['hospital_vinculado'], 'references' => ['unidades', 'cod_unidade'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'cod_unidade' => 1,
            'hospital_vinculado' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'municipio' => 'Lorem ipsum dolor sit amet',
            'uf' => 'Lorem ip',
            'regional' => 'Lorem ip',
            'tipo_atencao' => 'Lorem ipsum dolor sit a',
            'total_leitos' => 1,
            'leitos_disponiveis' => 1,
            'tipo_leito' => '',
            'logradouro' => 'Lorem ipsum dolor sit amet',
            'numero' => 'Lor',
            'complemento' => 'Lorem ipsum d',
            'bairro' => 'Lorem ipsum dolor sit amet',
            'cep' => 'Lorem ip',
            'telefone_fax' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'email' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
