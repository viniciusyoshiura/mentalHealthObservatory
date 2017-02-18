<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternacoesTable Test Case
 */
class InternacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternacoesTable
     */
    public $Internacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Internacoes') ? [] : ['className' => 'App\Model\Table\InternacoesTable'];
        $this->Internacoes = TableRegistry::get('Internacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Internacoes);

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
