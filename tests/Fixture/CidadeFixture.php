<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CidadeFixture
 *
 */
class CidadeFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cidade';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'estado_cod_estado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cod_cidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cep' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_cidade_estado1_idx' => ['type' => 'index', 'columns' => ['estado_cod_estado'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_cidade'], 'length' => []],
            'fk_cidade_estado1' => ['type' => 'foreign', 'columns' => ['estado_cod_estado'], 'references' => ['estado', 'cod_estado'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'estado_cod_estado' => 1,
            'cod_cidade' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'cep' => 'Lorem '
        ],
    ];
}
