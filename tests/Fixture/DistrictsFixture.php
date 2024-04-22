<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DistrictsFixture
 */
class DistrictsFixture extends TestFixture
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
                'is_active' => 1,
                'orderflag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_on' => '2022-08-04 05:44:59',
                'updated_on' => '2022-08-04 05:44:59',
            ],
        ];
        parent::init();
    }
}
