<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComplementXmlsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComplementXmlsTable Test Case
 */
class ComplementXmlsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComplementXmlsTable
     */
    protected $ComplementXmls;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ComplementXmls',
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
        $config = $this->getTableLocator()->exists('ComplementXmls') ? [] : ['className' => ComplementXmlsTable::class];
        $this->ComplementXmls = $this->getTableLocator()->get('ComplementXmls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ComplementXmls);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ComplementXmlsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ComplementXmlsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
