<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id_invoice
 * @property int|null $invoice_xml_id
 * @property string|null $serie
 * @property string|null $folio
 * @property string|null $tipo_comprobante
 * @property string|null $fecha
 * @property string|null $forma_pago
 * @property string|null $metodo_pago
 * @property string|null $condiciones_pago
 * @property string|null $exportacion
 * @property string|null $lugar_expedicion
 * @property string|null $moneda
 * @property string|null $tipo_cambio
 * @property string|null $subtotal
 * @property string|null $total
 * @property string|null $emisor_nombre
 * @property string|null $emisor_rfc
 * @property string|null $emisor_regimen_fiscal
 * @property string|null $receptor_nombre
 * @property string|null $receptor_rfc
 * @property string|null $receptor_domicilio_fiscal
 * @property string|null $receptor_regimen_fiscal
 * @property string|null $receptor_uso_cfdi
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
 * @property string|null $fecha_timbrado
 * @property string|null $uuid
 * @property int|null $status
 * @property int|null $status_alien
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\InvoiceXml $invoice_xml
 * @property \App\Model\Entity\ComplementRelation[] $complement_relations
 * @property \App\Model\Entity\CreditNoteRelation[] $credit_note_relations
 * @property \App\Model\Entity\CrossAccountRelation[] $cross_account_relations
 * @property \App\Model\Entity\DebitNoteRelation[] $debit_note_relations
 * @property \App\Model\Entity\InvoiceConcept[] $invoice_concepts
 */
class Invoice extends Entity
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
        'invoice_xml_id' => true,
        'serie' => true,
        'folio' => true,
        'tipo_comprobante' => true,
        'fecha' => true,
        'forma_pago' => true,
        'metodo_pago' => true,
        'condiciones_pago' => true,
        'exportacion' => true,
        'lugar_expedicion' => true,
        'moneda' => true,
        'tipo_cambio' => true,
        'subtotal' => true,
        'total' => true,
        'emisor_nombre' => true,
        'emisor_rfc' => true,
        'emisor_regimen_fiscal' => true,
        'receptor_nombre' => true,
        'receptor_rfc' => true,
        'receptor_domicilio_fiscal' => true,
        'receptor_regimen_fiscal' => true,
        'receptor_uso_cfdi' => true,
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
        'fecha_timbrado' => true,
        'uuid' => true,
        'status' => true,
        'status_alien' => true,
        'created' => true,
        'modified' => true,
        'invoice_xml' => true,
        'complement_relations' => true,
        'credit_note_relations' => true,
        'cross_account_relations' => true,
        'debit_note_relations' => true,
        'invoice_concepts' => true,
    ];
}
