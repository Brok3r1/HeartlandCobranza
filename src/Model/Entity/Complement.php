<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Complement Entity
 *
 * @property int $id_complement
 * @property int|null $complement_xml_id
 * @property string|null $serie
 * @property string|null $folio
 * @property string|null $tipo_comprobante
 * @property string|null $fecha
 * @property string|null $exportacion
 * @property string|null $lugar_expedicion
 * @property string|null $moneda
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
 * @property string|null $cta_beneficiario
 * @property string|null $cta_ordenante
 * @property string|null $rfc_emisor_cta_Ben
 * @property string|null $fecha_pago
 * @property string|null $num_operacion
 * @property string|null $forma_pago
 * @property string|null $moneda_p
 * @property string|null $tipo_cambio
 * @property string|null $monto
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
 * @property \App\Model\Entity\ComplementXml $complement_xml
 * @property \App\Model\Entity\ComplementRelation[] $complement_relations
 */
class Complement extends Entity
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
        'complement_xml_id' => true,
        'serie' => true,
        'folio' => true,
        'tipo_comprobante' => true,
        'fecha' => true,
        'exportacion' => true,
        'lugar_expedicion' => true,
        'moneda' => true,
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
        'cta_beneficiario' => true,
        'cta_ordenante' => true,
        'rfc_emisor_cta_Ben' => true,
        'fecha_pago' => true,
        'num_operacion' => true,
        'forma_pago' => true,
        'moneda_p' => true,
        'tipo_cambio' => true,
        'monto' => true,
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
        'complement_xml' => true,
        'complement_relations' => true,
    ];
}
