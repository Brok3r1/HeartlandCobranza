<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComplementRelationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComplementRelationsTable Test Case
 */
class ComplementRelationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComplementRelationsTable
     */
    protected $ComplementRelations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ComplementRelations',
        'app.Invoices',
        'app.Complements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ComplementRelations') ? [] : ['className' => ComplementRelationsTable::class];
        $this->ComplementRelations = $this->getTableLocator()->get('ComplementRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ComplementRelations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ComplementRelationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ComplementRelationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
