<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuperAdministratorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuperAdministratorsTable Test Case
 */
class SuperAdministratorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuperAdministratorsTable
     */
    protected $SuperAdministrators;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SuperAdministrators',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SuperAdministrators') ? [] : ['className' => SuperAdministratorsTable::class];
        $this->SuperAdministrators = $this->getTableLocator()->get('SuperAdministrators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SuperAdministrators);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\SuperAdministratorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\SuperAdministratorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
