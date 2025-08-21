<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CredentialsFixture
 */
class CredentialsFixture extends TestFixture
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
                'id_credential' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'home' => 'Lorem ipsum dolor sit amet',
                'menu' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-08-20 23:15:46',
                'modified' => '2025-08-20 23:15:46',
            ],
        ];
        parent::init();
    }
}
