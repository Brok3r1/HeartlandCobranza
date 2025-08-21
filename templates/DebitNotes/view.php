<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DebitNote $debitNote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Debit Note'), ['action' => 'edit', $debitNote->id_debit_note], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Debit Note'), ['action' => 'delete', $debitNote->id_debit_note], ['confirm' => __('Are you sure you want to delete # {0}?', $debitNote->id_debit_note), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Debit Notes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Debit Note'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="debitNotes view content">
            <h3><?= h($debitNote->id_debit_note) ?></h3>
            <table>
                <tr>
                    <th><?= __('Debit Note Xml') ?></th>
                    <td><?= $debitNote->hasValue('debit_note_xml') ? $this->Html->link($debitNote->debit_note_xml->id_debit_note_xml, ['controller' => 'DebitNoteXmls', 'action' => 'view', $debitNote->debit_note_xml->id_debit_note_xml]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($debitNote->serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($debitNote->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Comprobante') ?></th>
                    <td><?= h($debitNote->tipo_comprobante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($debitNote->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Forma Pago') ?></th>
                    <td><?= h($debitNote->forma_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metodo Pago') ?></th>
                    <td><?= h($debitNote->metodo_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condiciones Pago') ?></th>
                    <td><?= h($debitNote->condiciones_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exportacion') ?></th>
                    <td><?= h($debitNote->exportacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lugar Expedicion') ?></th>
                    <td><?= h($debitNote->lugar_expedicion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda') ?></th>
                    <td><?= h($debitNote->moneda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Nombre') ?></th>
                    <td><?= h($debitNote->emisor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Rfc') ?></th>
                    <td><?= h($debitNote->emisor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Regimen Fiscal') ?></th>
                    <td><?= h($debitNote->emisor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Nombre') ?></th>
                    <td><?= h($debitNote->receptor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Rfc') ?></th>
                    <td><?= h($debitNote->receptor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Domicilio Fiscal') ?></th>
                    <td><?= h($debitNote->receptor_domicilio_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Regimen Fiscal') ?></th>
                    <td><?= h($debitNote->receptor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Uso Cfdi') ?></th>
                    <td><?= h($debitNote->receptor_uso_cfdi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado0') ?></th>
                    <td><?= h($debitNote->impuesto_traslado0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor0') ?></th>
                    <td><?= h($debitNote->impuesto_traslado_tipo_factor0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado1') ?></th>
                    <td><?= h($debitNote->impuesto_traslado1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor1') ?></th>
                    <td><?= h($debitNote->impuesto_traslado_tipo_factor1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Timbrado') ?></th>
                    <td><?= h($debitNote->fecha_timbrado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($debitNote->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Debit Note') ?></th>
                    <td><?= $this->Number->format($debitNote->id_debit_note) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Cambio') ?></th>
                    <td><?= $debitNote->tipo_cambio === null ? '' : $this->Number->format($debitNote->tipo_cambio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $debitNote->subtotal === null ? '' : $this->Number->format($debitNote->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $debitNote->total === null ? '' : $this->Number->format($debitNote->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base0') ?></th>
                    <td><?= $debitNote->impuesto_traslado_base0 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_base0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe0') ?></th>
                    <td><?= $debitNote->impuesto_traslado_importe0 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_importe0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota0') ?></th>
                    <td><?= $debitNote->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_tasa_cuota0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base1') ?></th>
                    <td><?= $debitNote->impuesto_traslado_base1 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_base1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe1') ?></th>
                    <td><?= $debitNote->impuesto_traslado_importe1 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_importe1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota1') ?></th>
                    <td><?= $debitNote->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_tasa_cuota1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $debitNote->status === null ? '' : $this->Number->format($debitNote->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Alien') ?></th>
                    <td><?= $debitNote->status_alien === null ? '' : $this->Number->format($debitNote->status_alien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($debitNote->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($debitNote->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Debit Note Concepts') ?></h4>
                <?php if (!empty($debitNote->debit_note_concepts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Debit Note Concept') ?></th>
                            <th><?= __('Debit Note Id') ?></th>
                            <th><?= __('Clave Prod Serv') ?></th>
                            <th><?= __('Clave Unidad') ?></th>
                            <th><?= __('No Identificacion') ?></th>
                            <th><?= __('Unidad') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Valor Unitario') ?></th>
                            <th><?= __('Cantidad') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Objeto Imp') ?></th>
                            <th><?= __('Impuesto Traslado') ?></th>
                            <th><?= __('Impuesto Traslado Base') ?></th>
                            <th><?= __('Impuesto Traslado Importe') ?></th>
                            <th><?= __('Impuesto Traslado Tasa Cuota') ?></th>
                            <th><?= __('Impuesto Traslado Tipo Factor') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($debitNote->debit_note_concepts as $debitNoteConcept) : ?>
                        <tr>
                            <td><?= h($debitNoteConcept->id_debit_note_concept) ?></td>
                            <td><?= h($debitNoteConcept->debit_note_id) ?></td>
                            <td><?= h($debitNoteConcept->clave_prod_serv) ?></td>
                            <td><?= h($debitNoteConcept->clave_unidad) ?></td>
                            <td><?= h($debitNoteConcept->no_identificacion) ?></td>
                            <td><?= h($debitNoteConcept->unidad) ?></td>
                            <td><?= h($debitNoteConcept->descripcion) ?></td>
                            <td><?= h($debitNoteConcept->valor_unitario) ?></td>
                            <td><?= h($debitNoteConcept->cantidad) ?></td>
                            <td><?= h($debitNoteConcept->importe) ?></td>
                            <td><?= h($debitNoteConcept->objeto_imp) ?></td>
                            <td><?= h($debitNoteConcept->impuesto_traslado) ?></td>
                            <td><?= h($debitNoteConcept->impuesto_traslado_base) ?></td>
                            <td><?= h($debitNoteConcept->impuesto_traslado_importe) ?></td>
                            <td><?= h($debitNoteConcept->impuesto_traslado_tasa_cuota) ?></td>
                            <td><?= h($debitNoteConcept->impuesto_traslado_tipo_factor) ?></td>
                            <td><?= h($debitNoteConcept->status) ?></td>
                            <td><?= h($debitNoteConcept->created) ?></td>
                            <td><?= h($debitNoteConcept->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'DebitNoteConcepts', 'action' => 'view', $debitNoteConcept->id_debit_note_concept]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'DebitNoteConcepts', 'action' => 'edit', $debitNoteConcept->id_debit_note_concept]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'DebitNoteConcepts', 'action' => 'delete', $debitNoteConcept->id_debit_note_concept],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $debitNoteConcept->id_debit_note_concept),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Debit Note Relations') ?></h4>
                <?php if (!empty($debitNote->debit_note_relations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Debit Note Relation') ?></th>
                            <th><?= __('Invoice Id') ?></th>
                            <th><?= __('Debit Note Id') ?></th>
                            <th><?= __('Tipo Relacion') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($debitNote->debit_note_relations as $debitNoteRelation) : ?>
                        <tr>
                            <td><?= h($debitNoteRelation->id_debit_note_relation) ?></td>
                            <td><?= h($debitNoteRelation->invoice_id) ?></td>
                            <td><?= h($debitNoteRelation->debit_note_id) ?></td>
                            <td><?= h($debitNoteRelation->tipo_relacion) ?></td>
                            <td><?= h($debitNoteRelation->uuid) ?></td>
                            <td><?= h($debitNoteRelation->status) ?></td>
                            <td><?= h($debitNoteRelation->created) ?></td>
                            <td><?= h($debitNoteRelation->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'DebitNoteRelations', 'action' => 'view', $debitNoteRelation->id_debit_note_relation]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'DebitNoteRelations', 'action' => 'edit', $debitNoteRelation->id_debit_note_relation]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'DebitNoteRelations', 'action' => 'delete', $debitNoteRelation->id_debit_note_relation],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $debitNoteRelation->id_debit_note_relation),
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