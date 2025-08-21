<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComplementRelationsFixture
 */
class ComplementRelationsFixture extends TestFixture
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
                'id_complement_relation' => 1,
                'invoice_id' => 1,
                'complement_id' => 1,
                'serie' => 'Lorem ipsum dolor sit amet',
                'folio' => 'Lorem ipsum dolor sit amet',
                'uuid' => 'Lorem ipsum dolor sit amet',
                'moneda' => 'Lorem ipsum dolor sit amet',
                'equivalencia' => 'Lorem ipsum dolor sit amet',
                'num_parcialidad' => 1,
                'imp_pagado' => 1.5,
                'imp_saldo_ant' => 1.5,
                'imp_saldo_insoluto' => 1.5,
                'objeto_imp' => 'Lorem ipsum dolor sit amet',
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
                'status' => 1,
                'created' => '2025-08-21 22:59:01',
                'modified' => '2025-08-21 22:59:01',
            ],
        ];
        parent::init();
    }
}
