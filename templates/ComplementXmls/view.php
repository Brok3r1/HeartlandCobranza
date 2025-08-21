<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ComplementXml $complementXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Complement Xml'), ['action' => 'edit', $complementXml->id_complement_xml], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Complement Xml'), ['action' => 'delete', $complementXml->id_complement_xml], ['confirm' => __('Are you sure you want to delete # {0}?', $complementXml->id_complement_xml), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Complement Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Complement Xml'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="complementXmls view content">
            <h3><?= h($complementXml->id_complement_xml) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Complement Xml') ?></th>
                    <td><?= $this->Number->format($complementXml->id_complement_xml) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $complementXml->status === null ? '' : $this->Number->format($complementXml->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($complementXml->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($complementXml->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Original Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($complementXml->original_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Complements') ?></h4>
                <?php if (!empty($complementXml->complements)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Complement') ?></th>
                            <th><?= __('Complement Xml Id') ?></th>
                            <th><?= __('Serie') ?></th>
                            <th><?= __('Folio') ?></th>
                            <th><?= __('Tipo Comprobante') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Exportacion') ?></th>
                            <th><?= __('Lugar Expedicion') ?></th>
                            <th><?= __('Moneda') ?></th>
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
                            <th><?= __('Cta Beneficiario') ?></th>
                            <th><?= __('Cta Ordenante') ?></th>
                            <th><?= __('Rfc Emisor Cta Ben') ?></th>
                            <th><?= __('Fecha Pago') ?></th>
                            <th><?= __('Num Operacion') ?></th>
                            <th><?= __('Forma Pago') ?></th>
                            <th><?= __('Moneda P') ?></th>
                            <th><?= __('Tipo Cambio') ?></th>
                            <th><?= __('Monto') ?></th>
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
                        <?php foreach ($complementXml->complements as $complement) : ?>
                        <tr>
                            <td><?= h($complement->id_complement) ?></td>
                            <td><?= h($complement->complement_xml_id) ?></td>
                            <td><?= h($complement->serie) ?></td>
                            <td><?= h($complement->folio) ?></td>
                            <td><?= h($complement->tipo_comprobante) ?></td>
                            <td><?= h($complement->fecha) ?></td>
                            <td><?= h($complement->exportacion) ?></td>
                            <td><?= h($complement->lugar_expedicion) ?></td>
                            <td><?= h($complement->moneda) ?></td>
                            <td><?= h($complement->subtotal) ?></td>
                            <td><?= h($complement->total) ?></td>
                            <td><?= h($complement->emisor_nombre) ?></td>
                            <td><?= h($complement->emisor_rfc) ?></td>
                            <td><?= h($complement->emisor_regimen_fiscal) ?></td>
                            <td><?= h($complement->receptor_nombre) ?></td>
                            <td><?= h($complement->receptor_rfc) ?></td>
                            <td><?= h($complement->receptor_domicilio_fiscal) ?></td>
                            <td><?= h($complement->receptor_regimen_fiscal) ?></td>
                            <td><?= h($complement->receptor_uso_cfdi) ?></td>
                            <td><?= h($complement->cta_beneficiario) ?></td>
                            <td><?= h($complement->cta_ordenante) ?></td>
                            <td><?= h($complement->rfc_emisor_cta_Ben) ?></td>
                            <td><?= h($complement->fecha_pago) ?></td>
                            <td><?= h($complement->num_operacion) ?></td>
                            <td><?= h($complement->forma_pago) ?></td>
                            <td><?= h($complement->moneda_p) ?></td>
                            <td><?= h($complement->tipo_cambio) ?></td>
                            <td><?= h($complement->monto) ?></td>
                            <td><?= h($complement->impuesto_traslado0) ?></td>
                            <td><?= h($complement->impuesto_traslado_base0) ?></td>
                            <td><?= h($complement->impuesto_traslado_importe0) ?></td>
                            <td><?= h($complement->impuesto_traslado_tasa_cuota0) ?></td>
                            <td><?= h($complement->impuesto_traslado_tipo_factor0) ?></td>
                            <td><?= h($complement->impuesto_traslado1) ?></td>
                            <td><?= h($complement->impuesto_traslado_base1) ?></td>
                            <td><?= h($complement->impuesto_traslado_importe1) ?></td>
                            <td><?= h($complement->impuesto_traslado_tasa_cuota1) ?></td>
                            <td><?= h($complement->impuesto_traslado_tipo_factor1) ?></td>
                            <td><?= h($complement->fecha_timbrado) ?></td>
                            <td><?= h($complement->uuid) ?></td>
                            <td><?= h($complement->status) ?></td>
                            <td><?= h($complement->status_alien) ?></td>
                            <td><?= h($complement->created) ?></td>
                            <td><?= h($complement->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Complements', 'action' => 'view', $complement->id_complement]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Complements', 'action' => 'edit', $complement->id_complement]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Complements', 'action' => 'delete', $complement->id_complement],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $complement->id_complement),
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