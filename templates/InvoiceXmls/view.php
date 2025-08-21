<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceXml $invoiceXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invoice Xml'), ['action' => 'edit', $invoiceXml->id_invoice_xml], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invoice Xml'), ['action' => 'delete', $invoiceXml->id_invoice_xml], ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceXml->id_invoice_xml), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invoice Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invoice Xml'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="invoiceXmls view content">
            <h3><?= h($invoiceXml->id_invoice_xml) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Invoice Xml') ?></th>
                    <td><?= $this->Number->format($invoiceXml->id_invoice_xml) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $invoiceXml->status === null ? '' : $this->Number->format($invoiceXml->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($invoiceXml->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($invoiceXml->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Original Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invoiceXml->original_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Invoices') ?></h4>
                <?php if (!empty($invoiceXml->invoices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Invoice') ?></th>
                            <th><?= __('Invoice Xml Id') ?></th>
                            <th><?= __('Serie') ?></th>
                            <th><?= __('Folio') ?></th>
                            <th><?= __('Tipo Comprobante') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Forma Pago') ?></th>
                            <th><?= __('Metodo Pago') ?></th>
                            <th><?= __('Condiciones Pago') ?></th>
                            <th><?= __('Exportacion') ?></th>
                            <th><?= __('Lugar Expedicion') ?></th>
                            <th><?= __('Moneda') ?></th>
                            <th><?= __('Tipo Cambio') ?></th>
                            <th><?= __('Subtotal') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Emisor Nombre') ?></th>
                            <th><?= __('Emisor Rfc') ?></th>
                            <th><?= __('Emisor Regimen Fiscal') ?></th>
                            <th><?= __('Receptor Nombre') ?></th>
                            <th><?= __('Receptor Rfc') ?></th>
                            <th><?= __('Receptor Domicilio Fiscal') ?></th>
                            <th><?= __('Receptor Regimen Fiscal') ?></th>
                            <th><?= __('Receptor Uso Cfdi') ?></th>
                            <th><?= __('Impuesto Traslado0') ?></th>
                            <th><?= __('Impuesto Traslado Base0') ?></th>
                            <th><?= __('Impuesto Traslado Importe0') ?></th>
                            <th><?= __('Impuesto Traslado Tasa Cuota0') ?></th>
                            <th><?= __('Impuesto Traslado Tipo Factor0') ?></th>
                            <th><?= __('Impuesto Traslado1') ?></th>
                            <th><?= __('Impuesto Traslado Base1') ?></th>
                            <th><?= __('Impuesto Traslado Importe1') ?></th>
                            <th><?= __('Impuesto Traslado Tasa Cuota1') ?></th>
                            <th><?= __('Impuesto Traslado Tipo Factor1') ?></th>
                            <th><?= __('Fecha Timbrado') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Status Alien') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($invoiceXml->invoices as $invoice) : ?>
                        <tr>
                            <td><?= h($invoice->id_invoice) ?></td>
                            <td><?= h($invoice->invoice_xml_id) ?></td>
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
                            <td><?= h($invoice->tipo_cambio) ?></td>
                            <td><?= h($invoice->subtotal) ?></td>
                            <td><?= h($invoice->total) ?></td>
                            <td><?= h($invoice->emisor_nombre) ?></td>
                            <td><?= h($invoice->emisor_rfc) ?></td>
                            <td><?= h($invoice->emisor_regimen_fiscal) ?></td>
                            <td><?= h($invoice->receptor_nombre) ?></td>
                            <td><?= h($invoice->receptor_rfc) ?></td>
                            <td><?= h($invoice->receptor_domicilio_fiscal) ?></td>
                            <td><?= h($invoice->receptor_regimen_fiscal) ?></td>
                            <td><?= h($invoice->receptor_uso_cfdi) ?></td>
                            <td><?= h($invoice->impuesto_traslado0) ?></td>
                            <td><?= h($invoice->impuesto_traslado_base0) ?></td>
                            <td><?= h($invoice->impuesto_traslado_importe0) ?></td>
                            <td><?= h($invoice->impuesto_traslado_tasa_cuota0) ?></td>
                            <td><?= h($invoice->impuesto_traslado_tipo_factor0) ?></td>
                            <td><?= h($invoice->impuesto_traslado1) ?></td>
                            <td><?= h($invoice->impuesto_traslado_base1) ?></td>
                            <td><?= h($invoice->impuesto_traslado_importe1) ?></td>
                            <td><?= h($invoice->impuesto_traslado_tasa_cuota1) ?></td>
                            <td><?= h($invoice->impuesto_traslado_tipo_factor1) ?></td>
                            <td><?= h($invoice->fecha_timbrado) ?></td>
                            <td><?= h($invoice->uuid) ?></td>
                            <td><?= h($invoice->status) ?></td>
                            <td><?= h($invoice->status_alien) ?></td>
                            <td><?= h($invoice->created) ?></td>
                            <td><?= h($invoice->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoice->id_invoice]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoice->id_invoice]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Invoices', 'action' => 'delete', $invoice->id_invoice],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $invoice->id_invoice),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>