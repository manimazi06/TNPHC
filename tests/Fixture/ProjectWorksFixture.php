<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectWorksFixture
 */
class ProjectWorksFixture extends TestFixture
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
                'department_type' => 1,
                'department_id' => 1,
                'financial_year_id' => 1,
                'project_code' => 'Lorem ipsum dolor sit amet',
                'project_name' => 'Lorem ipsum dolor sit amet',
                'project_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'project_amount' => 1,
                'building_type_id' => 1,
                'file_upload' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'is_active' => 1,
                'created_by' => 1,
                'created_date' => '2022-08-01 10:41:28',
                'modified_by' => 1,
                'modified_date' => '2022-08-01 10:41:28',
            ],
        ];
        parent::init();
    }
}
