<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DebitNoteConceptsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DebitNoteConceptsTable Test Case
 */
class DebitNoteConceptsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DebitNoteConceptsTable
     */
    protected $DebitNoteConcepts;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.DebitNoteConcepts',
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
        $config = $this->getTableLocator()->exists('DebitNoteConcepts') ? [] : ['className' => DebitNoteConceptsTable::class];
        $this->DebitNoteConcepts = $this->getTableLocator()->get('DebitNoteConcepts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DebitNoteConcepts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DebitNoteConceptsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\DebitNoteConceptsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
