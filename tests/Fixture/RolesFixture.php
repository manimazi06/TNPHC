<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 */
class RolesFixture extends TestFixture
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
                'created_by' => 1,
                'created_date' => '2022-07-01 07:16:30',
                'modified_date' => '2022-07-01 07:16:30',
                'modified_by' => 1,
            ],
        ];
        parent::init();
    }
}
