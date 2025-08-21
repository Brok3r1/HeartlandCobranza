<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id_user' => 1,
                'credential_id' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'status_recover' => 1,
                'created' => '2025-08-20 23:16:10',
                'modified' => '2025-08-20 23:16:10',
            ],
        ];
        parent::init();
    }
}
