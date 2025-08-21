<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Complement $complement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Complement'), ['action' => 'edit', $complement->id_complement], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Complement'), ['action' => 'delete', $complement->id_complement], ['confirm' => __('Are you sure you want to delete # {0}?', $complement->id_complement), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Complements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Complement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="complements view content">
            <h3><?= h($complement->id_complement) ?></h3>
            <table>
                <tr>
                    <th><?= __('Complement Xml') ?></th>
                    <td><?= $complement->hasValue('complement_xml') ? $this->Html->link($complement->complement_xml->id_complement_xml, ['controller' => 'ComplementXmls', 'action' => 'view', $complement->complement_xml->id_complement_xml]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($complement->serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($complement->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Comprobante') ?></th>
                    <td><?= h($complement->tipo_comprobante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($complement->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exportacion') ?></th>
                    <td><?= h($complement->exportacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lugar Expedicion') ?></th>
                    <td><?= h($complement->lugar_expedicion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda') ?></th>
                    <td><?= h($complement->moneda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Nombre') ?></th>
                    <td><?= h($complement->emisor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Rfc') ?></th>
                    <td><?= h($complement->emisor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emisor Regimen Fiscal') ?></th>
                    <td><?= h($complement->emisor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Nombre') ?></th>
                    <td><?= h($complement->receptor_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Rfc') ?></th>
                    <td><?= h($complement->receptor_rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Domicilio Fiscal') ?></th>
                    <td><?= h($complement->receptor_domicilio_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Regimen Fiscal') ?></th>
                    <td><?= h($complement->receptor_regimen_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor Uso Cfdi') ?></th>
                    <td><?= h($complement->receptor_uso_cfdi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cta Beneficiario') ?></th>
                    <td><?= h($complement->cta_beneficiario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cta Ordenante') ?></th>
                    <td><?= h($complement->cta_ordenante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc Emisor Cta Ben') ?></th>
                    <td><?= h($complement->rfc_emisor_cta_Ben) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Pago') ?></th>
                    <td><?= h($complement->fecha_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Operacion') ?></th>
                    <td><?= h($complement->num_operacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Forma Pago') ?></th>
                    <td><?= h($complement->forma_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda P') ?></th>
                    <td><?= h($complement->moneda_p) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado0') ?></th>
                    <td><?= h($complement->impuesto_traslado0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor0') ?></th>
                    <td><?= h($complement->impuesto_traslado_tipo_factor0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado1') ?></th>
                    <td><?= h($complement->impuesto_traslado1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor1') ?></th>
                    <td><?= h($complement->impuesto_traslado_tipo_factor1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Timbrado') ?></th>
                    <td><?= h($complement->fecha_timbrado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($complement->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Complement') ?></th>
                    <td><?= $this->Number->format($complement->id_complement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $complement->subtotal === null ? '' : $this->Number->format($complement->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $complement->total === null ? '' : $this->Number->format($complement->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Cambio') ?></th>
                    <td><?= $complement->tipo_cambio === null ? '' : $this->Number->format($complement->tipo_cambio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto') ?></th>
                    <td><?= $complement->monto === null ? '' : $this->Number->format($complement->monto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base0') ?></th>
                    <td><?= $complement->impuesto_traslado_base0 === null ? '' : $this->Number->format($complement->impuesto_traslado_base0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe0') ?></th>
                    <td><?= $complement->impuesto_traslado_importe0 === null ? '' : $this->Number->format($complement->impuesto_traslado_importe0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota0') ?></th>
                    <td><?= $complement->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($complement->impuesto_traslado_tasa_cuota0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base1') ?></th>
                    <td><?= $complement->impuesto_traslado_base1 === null ? '' : $this->Number->format($complement->impuesto_traslado_base1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe1') ?></th>
                    <td><?= $complement->impuesto_traslado_importe1 === null ? '' : $this->Number->format($complement->impuesto_traslado_importe1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota1') ?></th>
                    <td><?= $complement->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($complement->impuesto_traslado_tasa_cuota1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $complement->status === null ? '' : $this->Number->format($complement->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Alien') ?></th>
                    <td><?= $complement->status_alien === null ? '' : $this->Number->format($complement->status_alien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($complement->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($complement->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Complement Relations') ?></h4>
                <?php if (!empty($complement->complement_relations)) : ?>
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
                        <?php foreach ($complement->complement_relations as $complementRelation) : ?>
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
        </div>
    </div>
</div>