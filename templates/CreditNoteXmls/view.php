<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreditNoteXml $creditNoteXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Credit Note Xml'), ['action' => 'edit', $creditNoteXml->id_credit_note_xml], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Credit Note Xml'), ['action' => 'delete', $creditNoteXml->id_credit_note_xml], ['confirm' => __('Are you sure you want to delete # {0}?', $creditNoteXml->id_credit_note_xml), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Credit Note Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Credit Note Xml'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="creditNoteXmls view content">
            <h3><?= h($creditNoteXml->id_credit_note_xml) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Credit Note Xml') ?></th>
                    <td><?= $this->Number->format($creditNoteXml->id_credit_note_xml) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $creditNoteXml->status === null ? '' : $this->Number->format($creditNoteXml->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($creditNoteXml->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($creditNoteXml->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Original Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($creditNoteXml->original_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Credit Notes') ?></h4>
                <?php if (!empty($creditNoteXml->credit_notes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Credit Note') ?></th>
                            <th><?= __('Credit Note Xml Id') ?></th>
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
                        <?php foreach ($creditNoteXml->credit_notes as $creditNote) : ?>
                        <tr>
                            <td><?= h($creditNote->id_credit_note) ?></td>
                            <td><?= h($creditNote->credit_note_xml_id) ?></td>
                            <td><?= h($creditNote->serie) ?></td>
                            <td><?= h($creditNote->folio) ?></td>
                            <td><?= h($creditNote->tipo_comprobante) ?></td>
                            <td><?= h($creditNote->fecha) ?></td>
                            <td><?= h($creditNote->forma_pago) ?></td>
                            <td><?= h($creditNote->metodo_pago) ?></td>
                            <td><?= h($creditNote->condiciones_pago) ?></td>
                            <td><?= h($creditNote->exportacion) ?></td>
                            <td><?= h($creditNote->lugar_expedicion) ?></td>
                            <td><?= h($creditNote->moneda) ?></td>
                            <td><?= h($creditNote->tipo_cambio) ?></td>
                            <td><?= h($creditNote->subtotal) ?></td>
                            <td><?= h($creditNote->total) ?></td>
                            <td><?= h($creditNote->emisor_nombre) ?></td>
                            <td><?= h($creditNote->emisor_rfc) ?></td>
                            <td><?= h($creditNote->emisor_regimen_fiscal) ?></td>
                            <td><?= h($creditNote->receptor_nombre) ?></td>
                            <td><?= h($creditNote->receptor_rfc) ?></td>
                            <td><?= h($creditNote->receptor_domicilio_fiscal) ?></td>
                            <td><?= h($creditNote->receptor_regimen_fiscal) ?></td>
                            <td><?= h($creditNote->receptor_uso_cfdi) ?></td>
                            <td><?= h($creditNote->impuesto_traslado0) ?></td>
                            <td><?= h($creditNote->impuesto_traslado_base0) ?></td>
                            <td><?= h($creditNote->impuesto_traslado_importe0) ?></td>
                            <td><?= h($creditNote->impuesto_traslado_tasa_cuota0) ?></td>
                            <td><?= h($creditNote->impuesto_traslado_tipo_factor0) ?></td>
                            <td><?= h($creditNote->impuesto_traslado1) ?></td>
                            <td><?= h($creditNote->impuesto_traslado_base1) ?></td>
                            <td><?= h($creditNote->impuesto_traslado_importe1) ?></td>
                            <td><?= h($creditNote->impuesto_traslado_tasa_cuota1) ?></td>
                            <td><?= h($creditNote->impuesto_traslado_tipo_factor1) ?></td>
                            <td><?= h($creditNote->fecha_timbrado) ?></td>
                            <td><?= h($creditNote->uuid) ?></td>
                            <td><?= h($creditNote->status) ?></td>
                            <td><?= h($creditNote->status_alien) ?></td>
                            <td><?= h($creditNote->created) ?></td>
                            <td><?= h($creditNote->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CreditNotes', 'action' => 'view', $creditNote->id_credit_note]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CreditNotes', 'action' => 'edit', $creditNote->id_credit_note]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'CreditNotes', 'action' => 'delete', $creditNote->id_credit_note],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $creditNote->id_credit_note),
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