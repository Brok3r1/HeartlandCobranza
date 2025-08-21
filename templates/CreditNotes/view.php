<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreditNote $creditNote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Credit Note'), ['action' => 'edit', $creditNote->id_credit_note], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Credit Note'), ['action' => 'delete', $creditNote->id_credit_note], ['confirm' => __('Are you sure you want to delete # {0}?', $creditNote->id_credit_note), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Credit Notes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Credit Note'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="creditNotes view content">
            <h3><?= h($creditNote->id_credit_note) ?></h3>
            <table>
                <tr>
                    <th><?= __('Credit Note Xml') ?></th>
                    <td><?= $creditNote->hasValue('credit_note_xml') ? $this->Html->link($creditNote->credit_note_xml->id_credit_note_xml, ['controller' => 'CreditNoteXmls', 'action' => 'view', $creditNote->credit_note_xml->id_credit_note_xml]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($creditNote->serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($creditNote->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Comprobante') ?></th>
                    <td><?= h($creditNote->tipo_comprobante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($creditNote->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Forma Pago') ?></th>
                    <td><?= h($creditNote->forma_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metodo Pago') ?></th>
                    <td><?= h($creditNote->metodo_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condiciones Pago') ?></th>
                    <td><?= h($creditNote->condiciones_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exportacion') ?></th>
                    <td><?= h($creditNote->exportacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lugar Expedicion') ?></th>
                    <td><?= h($creditNote->lugar_expedicion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda') ?></th>
                    <td><?= h($creditNote->moneda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Nombre') ?></th>
                    <td><?= h($creditNote->emisor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Rfc') ?></th>
                    <td><?= h($creditNote->emisor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Regimen Fiscal') ?></th>
                    <td><?= h($creditNote->emisor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Nombre') ?></th>
                    <td><?= h($creditNote->receptor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Rfc') ?></th>
                    <td><?= h($creditNote->receptor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Domicilio Fiscal') ?></th>
                    <td><?= h($creditNote->receptor_domicilio_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Regimen Fiscal') ?></th>
                    <td><?= h($creditNote->receptor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Uso Cfdi') ?></th>
                    <td><?= h($creditNote->receptor_uso_cfdi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado0') ?></th>
                    <td><?= h($creditNote->impuesto_traslado0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor0') ?></th>
                    <td><?= h($creditNote->impuesto_traslado_tipo_factor0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado1') ?></th>
                    <td><?= h($creditNote->impuesto_traslado1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor1') ?></th>
                    <td><?= h($creditNote->impuesto_traslado_tipo_factor1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Timbrado') ?></th>
                    <td><?= h($creditNote->fecha_timbrado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($creditNote->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Credit Note') ?></th>
                    <td><?= $this->Number->format($creditNote->id_credit_note) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Cambio') ?></th>
                    <td><?= $creditNote->tipo_cambio === null ? '' : $this->Number->format($creditNote->tipo_cambio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $creditNote->subtotal === null ? '' : $this->Number->format($creditNote->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $creditNote->total === null ? '' : $this->Number->format($creditNote->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base0') ?></th>
                    <td><?= $creditNote->impuesto_traslado_base0 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_base0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe0') ?></th>
                    <td><?= $creditNote->impuesto_traslado_importe0 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_importe0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota0') ?></th>
                    <td><?= $creditNote->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_tasa_cuota0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base1') ?></th>
                    <td><?= $creditNote->impuesto_traslado_base1 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_base1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe1') ?></th>
                    <td><?= $creditNote->impuesto_traslado_importe1 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_importe1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota1') ?></th>
                    <td><?= $creditNote->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_tasa_cuota1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $creditNote->status === null ? '' : $this->Number->format($creditNote->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Alien') ?></th>
                    <td><?= $creditNote->status_alien === null ? '' : $this->Number->format($creditNote->status_alien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($creditNote->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($creditNote->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Credit Note Concepts') ?></h4>
                <?php if (!empty($creditNote->credit_note_concepts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Credit Note Concept') ?></th>
                            <th><?= __('Credit Note Id') ?></th>
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
                        <?php foreach ($creditNote->credit_note_concepts as $creditNoteConcept) : ?>
                        <tr>
                            <td><?= h($creditNoteConcept->id_credit_note_concept) ?></td>
                            <td><?= h($creditNoteConcept->credit_note_id) ?></td>
                            <td><?= h($creditNoteConcept->clave_prod_serv) ?></td>
                            <td><?= h($creditNoteConcept->clave_unidad) ?></td>
                            <td><?= h($creditNoteConcept->no_identificacion) ?></td>
                            <td><?= h($creditNoteConcept->unidad) ?></td>
                            <td><?= h($creditNoteConcept->descripcion) ?></td>
                            <td><?= h($creditNoteConcept->valor_unitario) ?></td>
                            <td><?= h($creditNoteConcept->cantidad) ?></td>
                            <td><?= h($creditNoteConcept->importe) ?></td>
                            <td><?= h($creditNoteConcept->objeto_imp) ?></td>
                            <td><?= h($creditNoteConcept->impuesto_traslado) ?></td>
                            <td><?= h($creditNoteConcept->impuesto_traslado_base) ?></td>
                            <td><?= h($creditNoteConcept->impuesto_traslado_importe) ?></td>
                            <td><?= h($creditNoteConcept->impuesto_traslado_tasa_cuota) ?></td>
                            <td><?= h($creditNoteConcept->impuesto_traslado_tipo_factor) ?></td>
                            <td><?= h($creditNoteConcept->status) ?></td>
                            <td><?= h($creditNoteConcept->created) ?></td>
                            <td><?= h($creditNoteConcept->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CreditNoteConcepts', 'action' => 'view', $creditNoteConcept->id_credit_note_concept]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CreditNoteConcepts', 'action' => 'edit', $creditNoteConcept->id_credit_note_concept]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'CreditNoteConcepts', 'action' => 'delete', $creditNoteConcept->id_credit_note_concept],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $creditNoteConcept->id_credit_note_concept),
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
                <h4><?= __('Related Credit Note Relations') ?></h4>
                <?php if (!empty($creditNote->credit_note_relations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Credit Note Relation') ?></th>
                            <th><?= __('Invoice Id') ?></th>
                            <th><?= __('Credit Note Id') ?></th>
                            <th><?= __('Tipo Relacion') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($creditNote->credit_note_relations as $creditNoteRelation) : ?>
                        <tr>
                            <td><?= h($creditNoteRelation->id_credit_note_relation) ?></td>
                            <td><?= h($creditNoteRelation->invoice_id) ?></td>
                            <td><?= h($creditNoteRelation->credit_note_id) ?></td>
                            <td><?= h($creditNoteRelation->tipo_relacion) ?></td>
                            <td><?= h($creditNoteRelation->uuid) ?></td>
                            <td><?= h($creditNoteRelation->status) ?></td>
                            <td><?= h($creditNoteRelation->created) ?></td>
                            <td><?= h($creditNoteRelation->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CreditNoteRelations', 'action' => 'view', $creditNoteRelation->id_credit_note_relation]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CreditNoteRelations', 'action' => 'edit', $creditNoteRelation->id_credit_note_relation]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'CreditNoteRelations', 'action' => 'delete', $creditNoteRelation->id_credit_note_relation],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $creditNoteRelation->id_credit_note_relation),
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