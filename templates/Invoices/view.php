<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id_invoice], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id_invoice], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id_invoice), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invoices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="invoices view content">
            <h3><?= h($invoice->id_invoice) ?></h3>
            <table>
                <tr>
                    <th><?= __('Invoice Xml') ?></th>
                    <td><?= $invoice->hasValue('invoice_xml') ? $this->Html->link($invoice->invoice_xml->id_invoice_xml, ['controller' => 'InvoiceXmls', 'action' => 'view', $invoice->invoice_xml->id_invoice_xml]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($invoice->serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($invoice->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Comprobante') ?></th>
                    <td><?= h($invoice->tipo_comprobante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($invoice->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Forma Pago') ?></th>
                    <td><?= h($invoice->forma_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metodo Pago') ?></th>
                    <td><?= h($invoice->metodo_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condiciones Pago') ?></th>
                    <td><?= h($invoice->condiciones_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exportacion') ?></th>
                    <td><?= h($invoice->exportacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lugar Expedicion') ?></th>
                    <td><?= h($invoice->lugar_expedicion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda') ?></th>
                    <td><?= h($invoice->moneda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Nombre') ?></th>
                    <td><?= h($invoice->emisor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Rfc') ?></th>
                    <td><?= h($invoice->emisor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Regimen Fiscal') ?></th>
                    <td><?= h($invoice->emisor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Nombre') ?></th>
                    <td><?= h($invoice->receptor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Rfc') ?></th>
                    <td><?= h($invoice->receptor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Domicilio Fiscal') ?></th>
                    <td><?= h($invoice->receptor_domicilio_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Regimen Fiscal') ?></th>
                    <td><?= h($invoice->receptor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Uso Cfdi') ?></th>
                    <td><?= h($invoice->receptor_uso_cfdi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado0') ?></th>
                    <td><?= h($invoice->impuesto_traslado0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor0') ?></th>
                    <td><?= h($invoice->impuesto_traslado_tipo_factor0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado1') ?></th>
                    <td><?= h($invoice->impuesto_traslado1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor1') ?></th>
                    <td><?= h($invoice->impuesto_traslado_tipo_factor1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Timbrado') ?></th>
                    <td><?= h($invoice->fecha_timbrado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($invoice->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Invoice') ?></th>
                    <td><?= $this->Number->format($invoice->id_invoice) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Cambio') ?></th>
                    <td><?= $invoice->tipo_cambio === null ? '' : $this->Number->format($invoice->tipo_cambio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $invoice->subtotal === null ? '' : $this->Number->format($invoice->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $invoice->total === null ? '' : $this->Number->format($invoice->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base0') ?></th>
                    <td><?= $invoice->impuesto_traslado_base0 === null ? '' : $this->Number->format($invoice->impuesto_traslado_base0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe0') ?></th>
                    <td><?= $invoice->impuesto_traslado_importe0 === null ? '' : $this->Number->format($invoice->impuesto_traslado_importe0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota0') ?></th>
                    <td><?= $invoice->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($invoice->impuesto_traslado_tasa_cuota0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base1') ?></th>
                    <td><?= $invoice->impuesto_traslado_base1 === null ? '' : $this->Number->format($invoice->impuesto_traslado_base1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe1') ?></th>
                    <td><?= $invoice->impuesto_traslado_importe1 === null ? '' : $this->Number->format($invoice->impuesto_traslado_importe1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota1') ?></th>
                    <td><?= $invoice->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($invoice->impuesto_traslado_tasa_cuota1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $invoice->status === null ? '' : $this->Number->format($invoice->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Alien') ?></th>
                    <td><?= $invoice->status_alien === null ? '' : $this->Number->format($invoice->status_alien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($invoice->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($invoice->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Complement Relations') ?></h4>
                <?php if (!empty($invoice->complement_relations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Complement Relation') ?></th>
                            <th><?= __('Invoice Id') ?></th>
                            <th><?= __('Complement Id') ?></th>
                            <th><?= __('Serie') ?></th>
                            <th><?= __('Folio') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Moneda') ?></th>
                            <th><?= __('Equivalencia') ?></th>
                            <th><?= __('Num Parcialidad') ?></th>
                            <th><?= __('Imp Pagado') ?></th>
                            <th><?= __('Imp Saldo Ant') ?></th>
                            <th><?= __('Imp Saldo Insoluto') ?></th>
                            <th><?= __('Objeto Imp') ?></th>
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
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($invoice->complement_relations as $complementRelation) : ?>
                        <tr>
                            <td><?= h($complementRelation->id_complement_relation) ?></td>
                            <td><?= h($complementRelation->invoice_id) ?></td>
                            <td><?= h($complementRelation->complement_id) ?></td>
                            <td><?= h($complementRelation->serie) ?></td>
                            <td><?= h($complementRelation->folio) ?></td>
                            <td><?= h($complementRelation->uuid) ?></td>
                            <td><?= h($complementRelation->moneda) ?></td>
                            <td><?= h($complementRelation->equivalencia) ?></td>
                            <td><?= h($complementRelation->num_parcialidad) ?></td>
                            <td><?= h($complementRelation->imp_pagado) ?></td>
                            <td><?= h($complementRelation->imp_saldo_ant) ?></td>
                            <td><?= h($complementRelation->imp_saldo_insoluto) ?></td>
                            <td><?= h($complementRelation->objeto_imp) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado0) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado_base0) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado_importe0) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado_tasa_cuota0) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado_tipo_factor0) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado1) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado_base1) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado_importe1) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado_tasa_cuota1) ?></td>
                            <td><?= h($complementRelation->impuesto_traslado_tipo_factor1) ?></td>
                            <td><?= h($complementRelation->status) ?></td>
                            <td><?= h($complementRelation->created) ?></td>
                            <td><?= h($complementRelation->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ComplementRelations', 'action' => 'view', $complementRelation->id_complement_relation]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ComplementRelations', 'action' => 'edit', $complementRelation->id_complement_relation]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'ComplementRelations', 'action' => 'delete', $complementRelation->id_complement_relation],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $complementRelation->id_complement_relation),
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
                <?php if (!empty($invoice->credit_note_relations)) : ?>
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
                        <?php foreach ($invoice->credit_note_relations as $creditNoteRelation) : ?>
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
            <div class="related">
                <h4><?= __('Related Cross Account Relations') ?></h4>
                <?php if (!empty($invoice->cross_account_relations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Cross Account Relation') ?></th>
                            <th><?= __('Invoice Id') ?></th>
                            <th><?= __('Cross Account Id') ?></th>
                            <th><?= __('Serie') ?></th>
                            <th><?= __('Folio') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Moneda') ?></th>
                            <th><?= __('Equivalencia') ?></th>
                            <th><?= __('Num Parcialidad') ?></th>
                            <th><?= __('Imp Pagado') ?></th>
                            <th><?= __('Imp Saldo Ant') ?></th>
                            <th><?= __('Imp Saldo Insoluto') ?></th>
                            <th><?= __('Objeto Imp') ?></th>
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
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($invoice->cross_account_relations as $crossAccountRelation) : ?>
                        <tr>
                            <td><?= h($crossAccountRelation->id_cross_account_relation) ?></td>
                            <td><?= h($crossAccountRelation->invoice_id) ?></td>
                            <td><?= h($crossAccountRelation->cross_account_id) ?></td>
                            <td><?= h($crossAccountRelation->serie) ?></td>
                            <td><?= h($crossAccountRelation->folio) ?></td>
                            <td><?= h($crossAccountRelation->uuid) ?></td>
                            <td><?= h($crossAccountRelation->moneda) ?></td>
                            <td><?= h($crossAccountRelation->equivalencia) ?></td>
                            <td><?= h($crossAccountRelation->num_parcialidad) ?></td>
                            <td><?= h($crossAccountRelation->imp_pagado) ?></td>
                            <td><?= h($crossAccountRelation->imp_saldo_ant) ?></td>
                            <td><?= h($crossAccountRelation->imp_saldo_insoluto) ?></td>
                            <td><?= h($crossAccountRelation->objeto_imp) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado0) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado_base0) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado_importe0) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado_tasa_cuota0) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado_tipo_factor0) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado1) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado_base1) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado_importe1) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado_tasa_cuota1) ?></td>
                            <td><?= h($crossAccountRelation->impuesto_traslado_tipo_factor1) ?></td>
                            <td><?= h($crossAccountRelation->status) ?></td>
                            <td><?= h($crossAccountRelation->created) ?></td>
                            <td><?= h($crossAccountRelation->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CrossAccountRelations', 'action' => 'view', $crossAccountRelation->id_cross_account_relation]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CrossAccountRelations', 'action' => 'edit', $crossAccountRelation->id_cross_account_relation]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'CrossAccountRelations', 'action' => 'delete', $crossAccountRelation->id_cross_account_relation],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $crossAccountRelation->id_cross_account_relation),
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
                <?php if (!empty($invoice->debit_note_relations)) : ?>
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
                        <?php foreach ($invoice->debit_note_relations as $debitNoteRelation) : ?>
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
            <div class="related">
                <h4><?= __('Related Invoice Concepts') ?></h4>
                <?php if (!empty($invoice->invoice_concepts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Invoice Concept') ?></th>
                            <th><?= __('Invoice Id') ?></th>
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
                        <?php foreach ($invoice->invoice_concepts as $invoiceConcept) : ?>
                        <tr>
                            <td><?= h($invoiceConcept->id_invoice_concept) ?></td>
                            <td><?= h($invoiceConcept->invoice_id) ?></td>
                            <td><?= h($invoiceConcept->clave_prod_serv) ?></td>
                            <td><?= h($invoiceConcept->clave_unidad) ?></td>
                            <td><?= h($invoiceConcept->no_identificacion) ?></td>
                            <td><?= h($invoiceConcept->unidad) ?></td>
                            <td><?= h($invoiceConcept->descripcion) ?></td>
                            <td><?= h($invoiceConcept->valor_unitario) ?></td>
                            <td><?= h($invoiceConcept->cantidad) ?></td>
                            <td><?= h($invoiceConcept->importe) ?></td>
                            <td><?= h($invoiceConcept->objeto_imp) ?></td>
                            <td><?= h($invoiceConcept->impuesto_traslado) ?></td>
                            <td><?= h($invoiceConcept->impuesto_traslado_base) ?></td>
                            <td><?= h($invoiceConcept->impuesto_traslado_importe) ?></td>
                            <td><?= h($invoiceConcept->impuesto_traslado_tasa_cuota) ?></td>
                            <td><?= h($invoiceConcept->impuesto_traslado_tipo_factor) ?></td>
                            <td><?= h($invoiceConcept->status) ?></td>
                            <td><?= h($invoiceConcept->created) ?></td>
                            <td><?= h($invoiceConcept->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'InvoiceConcepts', 'action' => 'view', $invoiceConcept->id_invoice_concept]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'InvoiceConcepts', 'action' => 'edit', $invoiceConcept->id_invoice_concept]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'InvoiceConcepts', 'action' => 'delete', $invoiceConcept->id_invoice_concept],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $invoiceConcept->id_invoice_concept),
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