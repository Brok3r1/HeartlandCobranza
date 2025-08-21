<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CreditNoteXmlsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CreditNoteXmlsTable Test Case
 */
class CreditNoteXmlsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CreditNoteXmlsTable
     */
    protected $CreditNoteXmls;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.CreditNoteXmls',
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
        $config = $this->getTableLocator()->exists('CreditNoteXmls') ? [] : ['className' => CreditNoteXmlsTable::class];
        $this->CreditNoteXmls = $this->getTableLocator()->get('CreditNoteXmls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CreditNoteXmls);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CreditNoteXmlsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CreditNoteXmlsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
