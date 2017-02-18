<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PessoasFixture
 *
 */
class PessoasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cod_pessoa' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código que identifica uma pessoa unicamente.', 'autoIncrement' => true, 'precision' => null],
        'tipo_pessoa' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Tipos: Paciente ou Profissional.
Paciente = PA
Profissional = PR', 'precision' => null, 'fixed' => null],
        'data_cadastro' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data e hora na qual a pessoa foi cadastrada no sistema.', 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Nome da pessoa.', 'precision' => null, 'fixed' => null],
        'sexo' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Sexo da pessoa.
Valores:
F - feminino
M - masculino
T - transsexual', 'precision' => null, 'fixed' => null],
        'cpf' => ['type' => 'string', 'length' => 14, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Cpf - valor único por pessoa.', 'precision' => null, 'fixed' => null],
        'nro_rg' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Rg - valor único por estado.', 'precision' => null, 'fixed' => null],
        'uf_rg' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Estado emissor do RG.', 'precision' => null, 'fixed' => null],
        'data_nascimento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data de nascimento da pessoa.', 'precision' => null],
        'profissao_ocupacao' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Profissão ou Ocupação da pessoa.', 'precision' => null, 'fixed' => null],
        'logradouro' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Nome do Logradouro:', 'precision' => null, 'fixed' => null],
        'numero' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Número do Logradouro.', 'precision' => null, 'fixed' => null],
        'complemento' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Complemento do Logradouro.', 'precision' => null, 'fixed' => null],
        'bairro' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Bairro do Logradouro.', 'precision' => null, 'fixed' => null],
        'uf' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Estado do Logradouro.', 'precision' => null, 'fixed' => null],
        'municipio' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Município do Logradouro.', 'precision' => null, 'fixed' => null],
        'cep' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'CEP do Logradouro.', 'precision' => null, 'fixed' => null],
        'telefone' => ['type' => 'string', 'length' => 18, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Telefone da Pessoa.', 'precision' => null, 'fixed' => null],
        'tipo_telefone' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Tipo de Telefone

RES - Residencial
CEL - Celular', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_pessoa'], 'length' => []],
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
            'cod_pessoa' => 1,
            'tipo_pessoa' => '',
            'data_cadastro' => '2016-11-07 12:53:02',
            'nome' => 'Lorem ipsum dolor sit amet',
            'sexo' => 'Lorem ipsum dolor sit ame',
            'cpf' => 'Lorem ipsum ',
            'nro_rg' => 'Lorem ipsum dolor ',
            'uf_rg' => '',
            'data_nascimento' => '2016-11-07',
            'profissao_ocupacao' => 'Lorem ipsum dolor sit amet',
            'logradouro' => 'Lorem ipsum dolor sit amet',
            'numero' => 'Lor',
            'complemento' => 'Lorem ipsum d',
            'bairro' => 'Lorem ipsum dolor sit amet',
            'uf' => '',
            'municipio' => 'Lorem ipsum dolor sit amet',
            'cep' => 'Lorem ip',
            'telefone' => 'Lorem ipsum dolo',
            'tipo_telefone' => 'L',
            'email' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
