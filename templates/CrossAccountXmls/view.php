<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrossAccountXml $crossAccountXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cross Account Xml'), ['action' => 'edit', $crossAccountXml->id_cross_account_xml], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cross Account Xml'), ['action' => 'delete', $crossAccountXml->id_cross_account_xml], ['confirm' => __('Are you sure you want to delete # {0}?', $crossAccountXml->id_cross_account_xml), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cross Account Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cross Account Xml'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="crossAccountXmls view content">
            <h3><?= h($crossAccountXml->id_cross_account_xml) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Cross Account Xml') ?></th>
                    <td><?= $this->Number->format($crossAccountXml->id_cross_account_xml) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $crossAccountXml->status === null ? '' : $this->Number->format($crossAccountXml->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($crossAccountXml->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($crossAccountXml->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Original Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($crossAccountXml->original_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Cross Accounts') ?></h4>
                <?php if (!empty($crossAccountXml->cross_accounts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Cross Account') ?></th>
                            <th><?= __('Cross Account Xml Id') ?></th>
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
                        <?php foreach ($crossAccountXml->cross_accounts as $crossAccount) : ?>
                        <tr>
                            <td><?= h($crossAccount->id_cross_account) ?></td>
                            <td><?= h($crossAccount->cross_account_xml_id) ?></td>
                            <td><?= h($crossAccount->serie) ?></td>
                            <td><?= h($crossAccount->folio) ?></td>
                            <td><?= h($crossAccount->tipo_comprobante) ?></td>
                            <td><?= h($crossAccount->fecha) ?></td>
                            <td><?= h($crossAccount->exportacion) ?></td>
                            <td><?= h($crossAccount->lugar_expedicion) ?></td>
                            <td><?= h($crossAccount->moneda) ?></td>
                            <td><?= h($crossAccount->subtotal) ?></td>
                            <td><?= h($crossAccount->total) ?></td>
                            <td><?= h($crossAccount->emisor_nombre) ?></td>
                            <td><?= h($crossAccount->emisor_rfc) ?></td>
                            <td><?= h($crossAccount->emisor_regimen_fiscal) ?></td>
                            <td><?= h($crossAccount->receptor_nombre) ?></td>
                            <td><?= h($crossAccount->receptor_rfc) ?></td>
                            <td><?= h($crossAccount->receptor_domicilio_fiscal) ?></td>
                            <td><?= h($crossAccount->receptor_regimen_fiscal) ?></td>
                            <td><?= h($crossAccount->receptor_uso_cfdi) ?></td>
                            <td><?= h($crossAccount->cta_beneficiario) ?></td>
                            <td><?= h($crossAccount->cta_ordenante) ?></td>
                            <td><?= h($crossAccount->rfc_emisor_cta_Ben) ?></td>
                            <td><?= h($crossAccount->fecha_pago) ?></td>
                            <td><?= h($crossAccount->num_operacion) ?></td>
                            <td><?= h($crossAccount->forma_pago) ?></td>
                            <td><?= h($crossAccount->moneda_p) ?></td>
                            <td><?= h($crossAccount->tipo_cambio) ?></td>
                            <td><?= h($crossAccount->monto) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado0) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado_base0) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado_importe0) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado_tasa_cuota0) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado_tipo_factor0) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado1) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado_base1) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado_importe1) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado_tasa_cuota1) ?></td>
                            <td><?= h($crossAccount->impuesto_traslado_tipo_factor1) ?></td>
                            <td><?= h($crossAccount->fecha_timbrado) ?></td>
                            <td><?= h($crossAccount->uuid) ?></td>
                            <td><?= h($crossAccount->status) ?></td>
                            <td><?= h($crossAccount->status_alien) ?></td>
                            <td><?= h($crossAccount->created) ?></td>
                            <td><?= h($crossAccount->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CrossAccounts', 'action' => 'view', $crossAccount->id_cross_account]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CrossAccounts', 'action' => 'edit', $crossAccount->id_cross_account]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'CrossAccounts', 'action' => 'delete', $crossAccount->id_cross_account],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $crossAccount->id_cross_account),
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