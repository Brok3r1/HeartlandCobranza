<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrossAccountsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrossAccountsTable Test Case
 */
class CrossAccountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrossAccountsTable
     */
    protected $CrossAccounts;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.CrossAccounts',
        'app.CrossAccountXmls',
        'app.CrossAccountRelations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CrossAccounts') ? [] : ['className' => CrossAccountsTable::class];
        $this->CrossAccounts = $this->getTableLocator()->get('CrossAccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CrossAccounts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CrossAccountsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CrossAccountsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
