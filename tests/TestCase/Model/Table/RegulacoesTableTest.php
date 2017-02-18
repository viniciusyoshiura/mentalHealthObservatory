<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegulacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegulacoesTable Test Case
 */
class RegulacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegulacoesTable
     */
    public $Regulacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.regulacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Regulacoes') ? [] : ['className' => 'App\Model\Table\RegulacoesTable'];
        $this->Regulacoes = TableRegistry::get('Regulacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Regulacoes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
