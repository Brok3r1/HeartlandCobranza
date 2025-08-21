<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DebitNoteXmlsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DebitNoteXmlsTable Test Case
 */
class DebitNoteXmlsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DebitNoteXmlsTable
     */
    protected $DebitNoteXmls;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.DebitNoteXmls',
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
        $config = $this->getTableLocator()->exists('DebitNoteXmls') ? [] : ['className' => DebitNoteXmlsTable::class];
        $this->DebitNoteXmls = $this->getTableLocator()->get('DebitNoteXmls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DebitNoteXmls);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DebitNoteXmlsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\DebitNoteXmlsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
