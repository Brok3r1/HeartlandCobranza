<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrossAccount $crossAccount
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cross Account'), ['action' => 'edit', $crossAccount->id_cross_account], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cross Account'), ['action' => 'delete', $crossAccount->id_cross_account], ['confirm' => __('Are you sure you want to delete # {0}?', $crossAccount->id_cross_account), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cross Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cross Account'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="crossAccounts view content">
            <h3><?= h($crossAccount->id_cross_account) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cross Account Xml') ?></th>
                    <td><?= $crossAccount->hasValue('cross_account_xml') ? $this->Html->link($crossAccount->cross_account_xml->id_cross_account_xml, ['controller' => 'CrossAccountXmls', 'action' => 'view', $crossAccount->cross_account_xml->id_cross_account_xml]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($crossAccount->serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($crossAccount->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Comprobante') ?></th>
                    <td><?= h($crossAccount->tipo_comprobante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($crossAccount->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exportacion') ?></th>
                    <td><?= h($crossAccount->exportacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lugar Expedicion') ?></th>
                    <td><?= h($crossAccount->lugar_expedicion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda') ?></th>
                    <td><?= h($crossAccount->moneda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Nombre') ?></th>
                    <td><?= h($crossAccount->emisor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Rfc') ?></th>
                    <td><?= h($crossAccount->emisor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Regimen Fiscal') ?></th>
                    <td><?= h($crossAccount->emisor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Nombre') ?></th>
                    <td><?= h($crossAccount->receptor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Rfc') ?></th>
                    <td><?= h($crossAccount->receptor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Domicilio Fiscal') ?></th>
                    <td><?= h($crossAccount->receptor_domicilio_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Regimen Fiscal') ?></th>
                    <td><?= h($crossAccount->receptor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Uso Cfdi') ?></th>
                    <td><?= h($crossAccount->receptor_uso_cfdi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cta Beneficiario') ?></th>
                    <td><?= h($crossAccount->cta_beneficiario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cta Ordenante') ?></th>
                    <td><?= h($crossAccount->cta_ordenante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc Emisor Cta Ben') ?></th>
                    <td><?= h($crossAccount->rfc_emisor_cta_Ben) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Pago') ?></th>
                    <td><?= h($crossAccount->fecha_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Operacion') ?></th>
                    <td><?= h($crossAccount->num_operacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Forma Pago') ?></th>
                    <td><?= h($crossAccount->forma_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda P') ?></th>
                    <td><?= h($crossAccount->moneda_p) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado0') ?></th>
                    <td><?= h($crossAccount->impuesto_traslado0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor0') ?></th>
                    <td><?= h($crossAccount->impuesto_traslado_tipo_factor0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado1') ?></th>
                    <td><?= h($crossAccount->impuesto_traslado1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor1') ?></th>
                    <td><?= h($crossAccount->impuesto_traslado_tipo_factor1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Timbrado') ?></th>
                    <td><?= h($crossAccount->fecha_timbrado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($crossAccount->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Cross Account') ?></th>
                    <td><?= $this->Number->format($crossAccount->id_cross_account) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $crossAccount->subtotal === null ? '' : $this->Number->format($crossAccount->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $crossAccount->total === null ? '' : $this->Number->format($crossAccount->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Cambio') ?></th>
                    <td><?= $crossAccount->tipo_cambio === null ? '' : $this->Number->format($crossAccount->tipo_cambio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto') ?></th>
                    <td><?= $crossAccount->monto === null ? '' : $this->Number->format($crossAccount->monto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base0') ?></th>
                    <td><?= $crossAccount->impuesto_traslado_base0 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_base0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe0') ?></th>
                    <td><?= $crossAccount->impuesto_traslado_importe0 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_importe0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota0') ?></th>
                    <td><?= $crossAccount->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_tasa_cuota0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base1') ?></th>
                    <td><?= $crossAccount->impuesto_traslado_base1 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_base1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe1') ?></th>
                    <td><?= $crossAccount->impuesto_traslado_importe1 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_importe1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota1') ?></th>
                    <td><?= $crossAccount->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_tasa_cuota1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $crossAccount->status === null ? '' : $this->Number->format($crossAccount->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Alien') ?></th>
                    <td><?= $crossAccount->status_alien === null ? '' : $this->Number->format($crossAccount->status_alien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($crossAccount->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($crossAccount->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cross Account Relations') ?></h4>
                <?php if (!empty($crossAccount->cross_account_relations)) : ?>
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
                        <?php foreach ($crossAccount->cross_account_relations as $crossAccountRelation) : ?>
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
        </div>
    </div>
</div>