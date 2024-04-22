<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BuildingTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BuildingTypesTable Test Case
 */
class BuildingTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BuildingTypesTable
     */
    protected $BuildingTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BuildingTypes',
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
        $config = $this->getTableLocator()->exists('BuildingTypes') ? [] : ['className' => BuildingTypesTable::class];
        $this->BuildingTypes = $this->getTableLocator()->get('BuildingTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BuildingTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BuildingTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BuildingTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
