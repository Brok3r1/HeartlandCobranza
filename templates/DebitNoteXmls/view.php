<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DebitNoteXml $debitNoteXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Debit Note Xml'), ['action' => 'edit', $debitNoteXml->id_debit_note_xml], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Debit Note Xml'), ['action' => 'delete', $debitNoteXml->id_debit_note_xml], ['confirm' => __('Are you sure you want to delete # {0}?', $debitNoteXml->id_debit_note_xml), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Debit Note Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Debit Note Xml'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="debitNoteXmls view content">
            <h3><?= h($debitNoteXml->id_debit_note_xml) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Debit Note Xml') ?></th>
                    <td><?= $this->Number->format($debitNoteXml->id_debit_note_xml) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $debitNoteXml->status === null ? '' : $this->Number->format($debitNoteXml->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($debitNoteXml->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($debitNoteXml->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Original Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($debitNoteXml->original_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Debit Notes') ?></h4>
                <?php if (!empty($debitNoteXml->debit_notes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Debit Note') ?></th>
                            <th><?= __('Debit Note Xml Id') ?></th>
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
                        <?php foreach ($debitNoteXml->debit_notes as $debitNote) : ?>
                        <tr>
                            <td><?= h($debitNote->id_debit_note) ?></td>
                            <td><?= h($debitNote->debit_note_xml_id) ?></td>
                            <td><?= h($debitNote->serie) ?></td>
                            <td><?= h($debitNote->folio) ?></td>
                            <td><?= h($debitNote->tipo_comprobante) ?></td>
                            <td><?= h($debitNote->fecha) ?></td>
                            <td><?= h($debitNote->forma_pago) ?></td>
                            <td><?= h($debitNote->metodo_pago) ?></td>
                            <td><?= h($debitNote->condiciones_pago) ?></td>
                            <td><?= h($debitNote->exportacion) ?></td>
                            <td><?= h($debitNote->lugar_expedicion) ?></td>
                            <td><?= h($debitNote->moneda) ?></td>
                            <td><?= h($debitNote->tipo_cambio) ?></td>
                            <td><?= h($debitNote->subtotal) ?></td>
                            <td><?= h($debitNote->total) ?></td>
                            <td><?= h($debitNote->emisor_nombre) ?></td>
                            <td><?= h($debitNote->emisor_rfc) ?></td>
                            <td><?= h($debitNote->emisor_regimen_fiscal) ?></td>
                            <td><?= h($debitNote->receptor_nombre) ?></td>
                            <td><?= h($debitNote->receptor_rfc) ?></td>
                            <td><?= h($debitNote->receptor_domicilio_fiscal) ?></td>
                            <td><?= h($debitNote->receptor_regimen_fiscal) ?></td>
                            <td><?= h($debitNote->receptor_uso_cfdi) ?></td>
                            <td><?= h($debitNote->impuesto_traslado0) ?></td>
                            <td><?= h($debitNote->impuesto_traslado_base0) ?></td>
                            <td><?= h($debitNote->impuesto_traslado_importe0) ?></td>
                            <td><?= h($debitNote->impuesto_traslado_tasa_cuota0) ?></td>
                            <td><?= h($debitNote->impuesto_traslado_tipo_factor0) ?></td>
                            <td><?= h($debitNote->impuesto_traslado1) ?></td>
                            <td><?= h($debitNote->impuesto_traslado_base1) ?></td>
                            <td><?= h($debitNote->impuesto_traslado_importe1) ?></td>
                            <td><?= h($debitNote->impuesto_traslado_tasa_cuota1) ?></td>
                            <td><?= h($debitNote->impuesto_traslado_tipo_factor1) ?></td>
                            <td><?= h($debitNote->fecha_timbrado) ?></td>
                            <td><?= h($debitNote->uuid) ?></td>
                            <td><?= h($debitNote->status) ?></td>
                            <td><?= h($debitNote->status_alien) ?></td>
                            <td><?= h($debitNote->created) ?></td>
                            <td><?= h($debitNote->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'DebitNotes', 'action' => 'view', $debitNote->id_debit_note]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'DebitNotes', 'action' => 'edit', $debitNote->id_debit_note]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'DebitNotes', 'action' => 'delete', $debitNote->id_debit_note],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $debitNote->id_debit_note),
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