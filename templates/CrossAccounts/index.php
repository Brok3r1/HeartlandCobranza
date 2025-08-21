<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CrossAccount> $crossAccounts
 */
?>
<div class="crossAccounts index content">
    <?= $this->Html->link(__('New Cross Account'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cross Accounts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_cross_account') ?></th>
                    <th><?= $this->Paginator->sort('cross_account_xml_id') ?></th>
                    <th><?= $this->Paginator->sort('serie') ?></th>
                    <th><?= $this->Paginator->sort('folio') ?></th>
                    <th><?= $this->Paginator->sort('tipo_comprobante') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('exportacion') ?></th>
                    <th><?= $this->Paginator->sort('lugar_expedicion') ?></th>
                    <th><?= $this->Paginator->sort('moneda') ?></th>
                    <th><?= $this->Paginator->sort('subtotal') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('emisor_nombre') ?></th>
                    <th><?= $this->Paginator->sort('emisor_rfc') ?></th>
                    <th><?= $this->Paginator->sort('emisor_regimen_fiscal') ?></th>
                    <th><?= $this->Paginator->sort('receptor_nombre') ?></th>
                    <th><?= $this->Paginator->sort('receptor_rfc') ?></th>
                    <th><?= $this->Paginator->sort('receptor_domicilio_fiscal') ?></th>
                    <th><?= $this->Paginator->sort('receptor_regimen_fiscal') ?></th>
                    <th><?= $this->Paginator->sort('receptor_uso_cfdi') ?></th>
                    <th><?= $this->Paginator->sort('cta_beneficiario') ?></th>
                    <th><?= $this->Paginator->sort('cta_ordenante') ?></th>
                    <th><?= $this->Paginator->sort('rfc_emisor_cta_Ben') ?></th>
                    <th><?= $this->Paginator->sort('fecha_pago') ?></th>
                    <th><?= $this->Paginator->sort('num_operacion') ?></th>
                    <th><?= $this->Paginator->sort('forma_pago') ?></th>
                    <th><?= $this->Paginator->sort('moneda_p') ?></th>
                    <th><?= $this->Paginator->sort('tipo_cambio') ?></th>
                    <th><?= $this->Paginator->sort('monto') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_base0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_importe0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tasa_cuota0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tipo_factor0') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado1') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_base1') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_importe1') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tasa_cuota1') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tipo_factor1') ?></th>
                    <th><?= $this->Paginator->sort('fecha_timbrado') ?></th>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('status_alien') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crossAccounts as $crossAccount): ?>
                <tr>
                    <td><?= $this->Number->format($crossAccount->id_cross_account) ?></td>
                    <td><?= $crossAccount->hasValue('cross_account_xml') ? $this->Html->link($crossAccount->cross_account_xml->id_cross_account_xml, ['controller' => 'CrossAccountXmls', 'action' => 'view', $crossAccount->cross_account_xml->id_cross_account_xml]) : '' ?></td>
                    <td><?= h($crossAccount->serie) ?></td>
                    <td><?= h($crossAccount->folio) ?></td>
                    <td><?= h($crossAccount->tipo_comprobante) ?></td>
                    <td><?= h($crossAccount->fecha) ?></td>
                    <td><?= h($crossAccount->exportacion) ?></td>
                    <td><?= h($crossAccount->lugar_expedicion) ?></td>
                    <td><?= h($crossAccount->moneda) ?></td>
                    <td><?= $crossAccount->subtotal === null ? '' : $this->Number->format($crossAccount->subtotal) ?></td>
                    <td><?= $crossAccount->total === null ? '' : $this->Number->format($crossAccount->total) ?></td>
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
                    <td><?= $crossAccount->tipo_cambio === null ? '' : $this->Number->format($crossAccount->tipo_cambio) ?></td>
                    <td><?= $crossAccount->monto === null ? '' : $this->Number->format($crossAccount->monto) ?></td>
                    <td><?= h($crossAccount->impuesto_traslado0) ?></td>
                    <td><?= $crossAccount->impuesto_traslado_base0 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_base0) ?></td>
                    <td><?= $crossAccount->impuesto_traslado_importe0 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_importe0) ?></td>
                    <td><?= $crossAccount->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_tasa_cuota0) ?></td>
                    <td><?= h($crossAccount->impuesto_traslado_tipo_factor0) ?></td>
                    <td><?= h($crossAccount->impuesto_traslado1) ?></td>
                    <td><?= $crossAccount->impuesto_traslado_base1 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_base1) ?></td>
                    <td><?= $crossAccount->impuesto_traslado_importe1 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_importe1) ?></td>
                    <td><?= $crossAccount->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($crossAccount->impuesto_traslado_tasa_cuota1) ?></td>
                    <td><?= h($crossAccount->impuesto_traslado_tipo_factor1) ?></td>
                    <td><?= h($crossAccount->fecha_timbrado) ?></td>
                    <td><?= h($crossAccount->uuid) ?></td>
                    <td><?= $crossAccount->status === null ? '' : $this->Number->format($crossAccount->status) ?></td>
                    <td><?= $crossAccount->status_alien === null ? '' : $this->Number->format($crossAccount->status_alien) ?></td>
                    <td><?= h($crossAccount->created) ?></td>
                    <td><?= h($crossAccount->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crossAccount->id_cross_account]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crossAccount->id_cross_account]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $crossAccount->id_cross_account],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $crossAccount->id_cross_account),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>