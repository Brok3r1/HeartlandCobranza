<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComplementsFixture
 */
class ComplementsFixture extends TestFixture
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
                'id_complement' => 1,
                'complement_xml_id' => 1,
                'serie' => 'Lorem ipsum dolor sit amet',
                'folio' => 'Lorem ipsum dolor sit amet',
                'tipo_comprobante' => 'Lorem ipsum dolor sit amet',
                'fecha' => 'Lorem ipsum dolor sit amet',
                'exportacion' => 'Lorem ipsum dolor sit amet',
                'lugar_expedicion' => 'Lorem ipsum dolor sit amet',
                'moneda' => 'Lorem ipsum dolor sit amet',
                'subtotal' => 1.5,
                'total' => 1.5,
                'emisor_nombre' => 'Lorem ipsum dolor sit amet',
                'emisor_rfc' => 'Lorem ipsum dolor sit amet',
                'emisor_regimen_fiscal' => 'Lorem ipsum dolor sit amet',
                'receptor_nombre' => 'Lorem ipsum dolor sit amet',
                'receptor_rfc' => 'Lorem ipsum dolor sit amet',
                'receptor_domicilio_fiscal' => 'Lorem ipsum dolor sit amet',
                'receptor_regimen_fiscal' => 'Lorem ipsum dolor sit amet',
                'receptor_uso_cfdi' => 'Lorem ipsum dolor sit amet',
                'cta_beneficiario' => 'Lorem ipsum dolor sit amet',
                'cta_ordenante' => 'Lorem ipsum dolor sit amet',
                'rfc_emisor_cta_Ben' => 'Lorem ipsum dolor sit amet',
                'fecha_pago' => 'Lorem ipsum dolor sit amet',
                'num_operacion' => 'Lorem ipsum dolor sit amet',
                'forma_pago' => 'Lorem ipsum dolor sit amet',
                'moneda_p' => 'Lorem ipsum dolor sit amet',
                'tipo_cambio' => 1.5,
                'monto' => 1.5,
                'impuesto_traslado0' => 'Lorem ipsum dolor sit amet',
                'impuesto_traslado_base0' => 1.5,
                'impuesto_traslado_importe0' => 1.5,
                'impuesto_traslado_tasa_cuota0' => 1.5,
                'impuesto_traslado_tipo_factor0' => 'Lorem ipsum dolor sit amet',
                'impuesto_traslado1' => 'Lorem ipsum dolor sit amet',
                'impuesto_traslado_base1' => 1.5,
                'impuesto_traslado_importe1' => 1.5,
                'impuesto_traslado_tasa_cuota1' => 1.5,
                'impuesto_traslado_tipo_factor1' => 'Lorem ipsum dolor sit amet',
                'fecha_timbrado' => 'Lorem ipsum dolor sit amet',
                'uuid' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'status_alien' => 1,
                'created' => '2025-08-21 22:58:41',
                'modified' => '2025-08-21 22:58:41',
            ],
        ];
        parent::init();
    }
}
