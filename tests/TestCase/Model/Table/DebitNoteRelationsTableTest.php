<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DebitNoteRelationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DebitNoteRelationsTable Test Case
 */
class DebitNoteRelationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DebitNoteRelationsTable
     */
    protected $DebitNoteRelations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.DebitNoteRelations',
        'app.Invoices',
        'app.DebitNotes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DebitNoteRelations') ? [] : ['className' => DebitNoteRelationsTable::class];
        $this->DebitNoteRelations = $this->getTableLocator()->get('DebitNoteRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DebitNoteRelations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DebitNoteRelationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\DebitNoteRelationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
