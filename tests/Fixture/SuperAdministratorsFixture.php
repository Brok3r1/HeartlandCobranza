<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuperAdministratorsFixture
 */
class SuperAdministratorsFixture extends TestFixture
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
                'id_super_administrator' => 1,
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-08-20 23:16:25',
                'modified' => '2025-08-20 23:16:25',
            ],
        ];
        parent::init();
    }
}
