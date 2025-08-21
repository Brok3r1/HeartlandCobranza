<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvoiceConceptsFixture
 */
class InvoiceConceptsFixture extends TestFixture
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
                'id_invoice_concept' => 1,
                'invoice_id' => 1,
                'clave_prod_serv' => 'Lorem ipsum dolor sit amet',
                'clave_unidad' => 'Lorem ipsum dolor sit amet',
                'no_identificacion' => 'Lorem ipsum dolor sit amet',
                'unidad' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'valor_unitario' => 1.5,
                'cantidad' => 1.5,
                'importe' => 1.5,
                'objeto_imp' => 'Lorem ipsum dolor sit amet',
                'impuesto_traslado' => 'Lorem ipsum dolor sit amet',
                'impuesto_traslado_base' => 1.5,
                'impuesto_traslado_importe' => 1.5,
                'impuesto_traslado_tasa_cuota' => 1.5,
                'impuesto_traslado_tipo_factor' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-08-21 22:56:41',
                'modified' => '2025-08-21 22:56:41',
            ],
        ];
        parent::init();
    }
}
