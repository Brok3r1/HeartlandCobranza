<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComplementsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComplementsTable Test Case
 */
class ComplementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComplementsTable
     */
    protected $Complements;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Complements',
        'app.ComplementXmls',
        'app.ComplementRelations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Complements') ? [] : ['className' => ComplementsTable::class];
        $this->Complements = $this->getTableLocator()->get('Complements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Complements);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ComplementsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ComplementsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
