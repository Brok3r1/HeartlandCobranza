<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvoiceXmlsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvoiceXmlsTable Test Case
 */
class InvoiceXmlsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InvoiceXmlsTable
     */
    protected $InvoiceXmls;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.InvoiceXmls',
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
        $config = $this->getTableLocator()->exists('InvoiceXmls') ? [] : ['className' => InvoiceXmlsTable::class];
        $this->InvoiceXmls = $this->getTableLocator()->get('InvoiceXmls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->InvoiceXmls);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\InvoiceXmlsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\InvoiceXmlsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
