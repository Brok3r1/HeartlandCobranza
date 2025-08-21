<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvoiceConceptsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvoiceConceptsTable Test Case
 */
class InvoiceConceptsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InvoiceConceptsTable
     */
    protected $InvoiceConcepts;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.InvoiceConcepts',
        'app.Invoices',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('InvoiceConcepts') ? [] : ['className' => InvoiceConceptsTable::class];
        $this->InvoiceConcepts = $this->getTableLocator()->get('InvoiceConcepts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->InvoiceConcepts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\InvoiceConceptsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\InvoiceConceptsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
