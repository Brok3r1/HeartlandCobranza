<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CreditNoteConceptsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CreditNoteConceptsTable Test Case
 */
class CreditNoteConceptsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CreditNoteConceptsTable
     */
    protected $CreditNoteConcepts;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.CreditNoteConcepts',
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
        $config = $this->getTableLocator()->exists('CreditNoteConcepts') ? [] : ['className' => CreditNoteConceptsTable::class];
        $this->CreditNoteConcepts = $this->getTableLocator()->get('CreditNoteConcepts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CreditNoteConcepts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CreditNoteConceptsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CreditNoteConceptsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
