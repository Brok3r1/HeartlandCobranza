<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DebitNoteConcept Entity
 *
 * @property int $id_debit_note_concept
 * @property int|null $debit_note_id
 * @property string|null $clave_prod_serv
 * @property string|null $clave_unidad
 * @property string|null $no_identificacion
 * @property string|null $unidad
 * @property string|null $descripcion
 * @property string|null $valor_unitario
 * @property string|null $cantidad
 * @property string|null $importe
 * @property string|null $objeto_imp
 * @property string|null $impuesto_traslado
 * @property string|null $impuesto_traslado_base
 * @property string|null $impuesto_traslado_importe
 * @property string|null $impuesto_traslado_tasa_cuota
 * @property string|null $impuesto_traslado_tipo_factor
 * @property int|null $status
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\DebitNote $debit_note
 */
class DebitNoteConcept extends Entity
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
        'debit_note_id' => true,
        'clave_prod_serv' => true,
        'clave_unidad' => true,
        'no_identificacion' => true,
        'unidad' => true,
        'descripcion' => true,
        'valor_unitario' => true,
        'cantidad' => true,
        'importe' => true,
        'objeto_imp' => true,
        'impuesto_traslado' => true,
        'impuesto_traslado_base' => true,
        'impuesto_traslado_importe' => true,
        'impuesto_traslado_tasa_cuota' => true,
        'impuesto_traslado_tipo_factor' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'debit_note' => true,
    ];
}
