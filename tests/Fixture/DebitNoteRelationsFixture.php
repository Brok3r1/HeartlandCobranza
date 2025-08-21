<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DebitNoteRelationsFixture
 */
class DebitNoteRelationsFixture extends TestFixture
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
                'id_debit_note_relation' => 1,
                'invoice_id' => 1,
                'debit_note_id' => 1,
                'tipo_relacion' => 'Lorem ipsum dolor sit amet',
                'uuid' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-08-21 22:58:17',
                'modified' => '2025-08-21 22:58:17',
            ],
        ];
        parent::init();
    }
}
