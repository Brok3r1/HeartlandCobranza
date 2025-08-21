<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Complement> $complements
 */
?>
<div class="complements index content">
    <?= $this->Html->link(__('New Complement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Complements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_complement') ?></th>
                    <th><?= $this->Paginator->sort('complement_xml_id') ?></th>
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
                <?php foreach ($complements as $complement): ?>
                <tr>
                    <td><?= $this->Number->format($complement->id_complement) ?></td>
                    <td><?= $complement->hasValue('complement_xml') ? $this->Html->link($complement->complement_xml->id_complement_xml, ['controller' => 'ComplementXmls', 'action' => 'view', $complement->complement_xml->id_complement_xml]) : '' ?></td>
                    <td><?= h($complement->serie) ?></td>
                    <td><?= h($complement->folio) ?></td>
                    <td><?= h($complement->tipo_comprobante) ?></td>
                    <td><?= h($complement->fecha) ?></td>
                    <td><?= h($complement->exportacion) ?></td>
                    <td><?= h($complement->lugar_expedicion) ?></td>
                    <td><?= h($complement->moneda) ?></td>
                    <td><?= $complement->subtotal === null ? '' : $this->Number->format($complement->subtotal) ?></td>
                    <td><?= $complement->total === null ? '' : $this->Number->format($complement->total) ?></td>
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
                    <td><?= $complement->tipo_cambio === null ? '' : $this->Number->format($complement->tipo_cambio) ?></td>
                    <td><?= $complement->monto === null ? '' : $this->Number->format($complement->monto) ?></td>
                    <td><?= h($complement->impuesto_traslado0) ?></td>
                    <td><?= $complement->impuesto_traslado_base0 === null ? '' : $this->Number->format($complement->impuesto_traslado_base0) ?></td>
                    <td><?= $complement->impuesto_traslado_importe0 === null ? '' : $this->Number->format($complement->impuesto_traslado_importe0) ?></td>
                    <td><?= $complement->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($complement->impuesto_traslado_tasa_cuota0) ?></td>
                    <td><?= h($complement->impuesto_traslado_tipo_factor0) ?></td>
                    <td><?= h($complement->impuesto_traslado1) ?></td>
                    <td><?= $complement->impuesto_traslado_base1 === null ? '' : $this->Number->format($complement->impuesto_traslado_base1) ?></td>
                    <td><?= $complement->impuesto_traslado_importe1 === null ? '' : $this->Number->format($complement->impuesto_traslado_importe1) ?></td>
                    <td><?= $complement->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($complement->impuesto_traslado_tasa_cuota1) ?></td>
                    <td><?= h($complement->impuesto_traslado_tipo_factor1) ?></td>
                    <td><?= h($complement->fecha_timbrado) ?></td>
                    <td><?= h($complement->uuid) ?></td>
                    <td><?= $complement->status === null ? '' : $this->Number->format($complement->status) ?></td>
                    <td><?= $complement->status_alien === null ? '' : $this->Number->format($complement->status_alien) ?></td>
                    <td><?= h($complement->created) ?></td>
                    <td><?= h($complement->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $complement->id_complement]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $complement->id_complement]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $complement->id_complement],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $complement->id_complement),
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