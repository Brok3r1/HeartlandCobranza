<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CrossAccountRelation Entity
 *
 * @property int $id_cross_account_relation
 * @property int|null $invoice_id
 * @property int|null $cross_account_id
 * @property string|null $serie
 * @property string|null $folio
 * @property string|null $uuid
 * @property string|null $moneda
 * @property string|null $equivalencia
 * @property int|null $num_parcialidad
 * @property string|null $imp_pagado
 * @property string|null $imp_saldo_ant
 * @property string|null $imp_saldo_insoluto
 * @property string|null $objeto_imp
 * @property string|null $impuesto_traslado0
 * @property string|null $impuesto_traslado_base0
 * @property string|null $impuesto_traslado_importe0
 * @property string|null $impuesto_traslado_tasa_cuota0
 * @property string|null $impuesto_traslado_tipo_factor0
 * @property string|null $impuesto_traslado1
 * @property string|null $impuesto_traslado_base1
 * @property string|null $impuesto_traslado_importe1
 * @property string|null $impuesto_traslado_tasa_cuota1
 * @property string|null $impuesto_traslado_tipo_factor1
 * @property int|null $status
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\CrossAccount $cross_account
 */
class CrossAccountRelation extends Entity
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
        'cross_account_id' => true,
        'serie' => true,
        'folio' => true,
        'uuid' => true,
        'moneda' => true,
        'equivalencia' => true,
        'num_parcialidad' => true,
        'imp_pagado' => true,
        'imp_saldo_ant' => true,
        'imp_saldo_insoluto' => true,
        'objeto_imp' => true,
        'impuesto_traslado0' => true,
        'impuesto_traslado_base0' => true,
        'impuesto_traslado_importe0' => true,
        'impuesto_traslado_tasa_cuota0' => true,
        'impuesto_traslado_tipo_factor0' => true,
        'impuesto_traslado1' => true,
        'impuesto_traslado_base1' => true,
        'impuesto_traslado_importe1' => true,
        'impuesto_traslado_tasa_cuota1' => true,
        'impuesto_traslado_tipo_factor1' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'invoice' => true,
        'cross_account' => true,
    ];
}
