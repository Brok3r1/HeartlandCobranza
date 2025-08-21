<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrossAccountRelationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrossAccountRelationsTable Test Case
 */
class CrossAccountRelationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrossAccountRelationsTable
     */
    protected $CrossAccountRelations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.CrossAccountRelations',
        'app.Invoices',
        'app.CrossAccounts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CrossAccountRelations') ? [] : ['className' => CrossAccountRelationsTable::class];
        $this->CrossAccountRelations = $this->getTableLocator()->get('CrossAccountRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CrossAccountRelations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CrossAccountRelationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CrossAccountRelationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
