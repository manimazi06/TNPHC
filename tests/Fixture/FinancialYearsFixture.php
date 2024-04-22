<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FinancialYearsFixture
 */
class FinancialYearsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'order_flag' => 1,
                'is_active' => 1,
                'created_by' => 1,
                'created_date' => '2022-08-02 09:00:33',
                'modified_by' => 1,
                'modified_date' => '2022-08-02 09:00:33',
            ],
        ];
        parent::init();
    }
}
