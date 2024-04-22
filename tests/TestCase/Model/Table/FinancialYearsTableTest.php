<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinancialYearsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinancialYearsTable Test Case
 */
class FinancialYearsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FinancialYearsTable
     */
    protected $FinancialYears;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.FinancialYears',
        'app.ProjectWorks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FinancialYears') ? [] : ['className' => FinancialYearsTable::class];
        $this->FinancialYears = $this->getTableLocator()->get('FinancialYears', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FinancialYears);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FinancialYearsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FinancialYearsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
