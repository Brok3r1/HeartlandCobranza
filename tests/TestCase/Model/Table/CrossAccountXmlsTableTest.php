<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrossAccountXmlsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrossAccountXmlsTable Test Case
 */
class CrossAccountXmlsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrossAccountXmlsTable
     */
    protected $CrossAccountXmls;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.CrossAccountXmls',
        'app.CrossAccounts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CrossAccountXmls') ? [] : ['className' => CrossAccountXmlsTable::class];
        $this->CrossAccountXmls = $this->getTableLocator()->get('CrossAccountXmls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CrossAccountXmls);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CrossAccountXmlsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CrossAccountXmlsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
