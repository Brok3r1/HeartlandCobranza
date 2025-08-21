<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CreditNoteRelationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CreditNoteRelationsTable Test Case
 */
class CreditNoteRelationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CreditNoteRelationsTable
     */
    protected $CreditNoteRelations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.CreditNoteRelations',
        'app.Invoices',
        'app.CreditNotes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CreditNoteRelations') ? [] : ['className' => CreditNoteRelationsTable::class];
        $this->CreditNoteRelations = $this->getTableLocator()->get('CreditNoteRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CreditNoteRelations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CreditNoteRelationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CreditNoteRelationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
