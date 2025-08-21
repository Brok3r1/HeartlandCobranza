<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DebitNoteRelation Entity
 *
 * @property int $id_debit_note_relation
 * @property int|null $invoice_id
 * @property int|null $debit_note_id
 * @property string|null $tipo_relacion
 * @property string|null $uuid
 * @property int|null $status
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\DebitNote $debit_note
 */
class DebitNoteRelation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'invoice_id' => true,
        'debit_note_id' => true,
        'tipo_relacion' => true,
        'uuid' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'invoice' => true,
        'debit_note' => true,
    ];
}
