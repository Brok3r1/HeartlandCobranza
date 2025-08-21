<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Invoice> $invoices
 */
?>
<div class="invoices index content">
    <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invoices') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_invoice') ?></th>
                    <th><?= $this->Paginator->sort('invoice_xml_id') ?></th>
                    <th><?= $this->Paginator->sort('serie') ?></th>
                    <th><?= $this->Paginator->sort('folio') ?></th>
                    <th><?= $this->Paginator->sort('tipo_comprobante') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('forma_pago') ?></th>
                    <th><?= $this->Paginator->sort('metodo_pago') ?></th>
                    <th><?= $this->Paginator->sort('condiciones_pago') ?></th>
                    <th><?= $this->Paginator->sort('exportacion') ?></th>
                    <th><?= $this->Paginator->sort('lugar_expedicion') ?></th>
                    <th><?= $this->Paginator->sort('moneda') ?></th>
                    <th><?= $this->Paginator->sort('tipo_cambio') ?></th>
                    <th><?= $this->Paginator->sort('subtotal') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('emisor_nombre') ?></th>
                    <th><?= $this->Paginator->sort('emisor_rfc') ?></th>
                    <th><?= $this->Paginator->sort('emisor_regimen_fiscal') ?></th>
                    <th><?= $this->Paginator->sort('receptor_nombre') ?></th>
                    <th><?= $this->Paginator->sort('receptor_rfc') ?></th>
                    <th><?= $this->Paginator->sort('receptor_domicilio_fiscal') ?></th>
                    <th><?= $this->Paginator->sort('receptor_regimen_fiscal') ?></th>
                    <th><?= $this->Paginator->sort('receptor_uso_cfdi') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_base0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_importe0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tasa_cuota0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tipo_factor0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado1') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_base1') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_importe1') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tasa_cuota1') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tipo_factor1') ?></th>
                    <th><?= $this->Paginator->sort('fecha_timbrado') ?></th>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('status_alien') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invoices as $invoice): ?>
                <tr>
                    <td><?= $this->Number->format($invoice->id_invoice) ?></td>
                    <td><?= $invoice->hasValue('invoice_xml') ? $this->Html->link($invoice->invoice_xml->id_invoice_xml, ['controller' => 'InvoiceXmls', 'action' => 'view', $invoice->invoice_xml->id_invoice_xml]) : '' ?></td>
                    <td><?= h($invoice->serie) ?></td>
                    <td><?= h($invoice->folio) ?></td>
                    <td><?= h($invoice->tipo_comprobante) ?></td>
                    <td><?= h($invoice->fecha) ?></td>
                    <td><?= h($invoice->forma_pago) ?></td>
                    <td><?= h($invoice->metodo_pago) ?></td>
                    <td><?= h($invoice->condiciones_pago) ?></td>
                    <td><?= h($invoice->exportacion) ?></td>
                    <td><?= h($invoice->lugar_expedicion) ?></td>
                    <td><?= h($invoice->moneda) ?></td>
                    <td><?= $invoice->tipo_cambio === null ? '' : $this->Number->format($invoice->tipo_cambio) ?></td>
                    <td><?= $invoice->subtotal === null ? '' : $this->Number->format($invoice->subtotal) ?></td>
                    <td><?= $invoice->total === null ? '' : $this->Number->format($invoice->total) ?></td>
                    <td><?= h($invoice->emisor_nombre) ?></td>
                    <td><?= h($invoice->emisor_rfc) ?></td>
                    <td><?= h($invoice->emisor_regimen_fiscal) ?></td>
                    <td><?= h($invoice->receptor_nombre) ?></td>
                    <td><?= h($invoice->receptor_rfc) ?></td>
                    <td><?= h($invoice->receptor_domicilio_fiscal) ?></td>
                    <td><?= h($invoice->receptor_regimen_fiscal) ?></td>
                    <td><?= h($invoice->receptor_uso_cfdi) ?></td>
                    <td><?= h($invoice->impuesto_traslado0) ?></td>
                    <td><?= $invoice->impuesto_traslado_base0 === null ? '' : $this->Number->format($invoice->impuesto_traslado_base0) ?></td>
                    <td><?= $invoice->impuesto_traslado_importe0 === null ? '' : $this->Number->format($invoice->impuesto_traslado_importe0) ?></td>
                    <td><?= $invoice->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($invoice->impuesto_traslado_tasa_cuota0) ?></td>
                    <td><?= h($invoice->impuesto_traslado_tipo_factor0) ?></td>
                    <td><?= h($invoice->impuesto_traslado1) ?></td>
                    <td><?= $invoice->impuesto_traslado_base1 === null ? '' : $this->Number->format($invoice->impuesto_traslado_base1) ?></td>
                    <td><?= $invoice->impuesto_traslado_importe1 === null ? '' : $this->Number->format($invoice->impuesto_traslado_importe1) ?></td>
                    <td><?= $invoice->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($invoice->impuesto_traslado_tasa_cuota1) ?></td>
                    <td><?= h($invoice->impuesto_traslado_tipo_factor1) ?></td>
                    <td><?= h($invoice->fecha_timbrado) ?></td>
                    <td><?= h($invoice->uuid) ?></td>
                    <td><?= $invoice->status === null ? '' : $this->Number->format($invoice->status) ?></td>
                    <td><?= $invoice->status_alien === null ? '' : $this->Number->format($invoice->status_alien) ?></td>
                    <td><?= h($invoice->created) ?></td>
                    <td><?= h($invoice->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->id_invoice]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->id_invoice]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $invoice->id_invoice],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $invoice->id_invoice),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>