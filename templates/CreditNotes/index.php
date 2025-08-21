<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CreditNote> $creditNotes
 */
?>
<div class="creditNotes index content">
    <?= $this->Html->link(__('New Credit Note'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Credit Notes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_credit_note') ?></th>
                    <th><?= $this->Paginator->sort('credit_note_xml_id') ?></th>
                    <th><?= $this->Paginator->sort('serie') ?></th>
                    <th><?= $this->Paginator->sort('folio') ?></th>
                    <th><?= $this->Paginator->sort('tipo_comprobante') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('forma_pago') ?></th>
                    <th><?= $this->Paginator->sort('metodo_pago') ?></th>
                    <th><?= $this->Paginator->sort('condiciones_pago') ?></th>
                    <th><?= $this->Paginator->sort('exportacion') ?></th>
                    <th><?= $this->Paginator->sort('lugar_expedicion') ?></th>
                    <th><?= $this->Paginator->sort('moneda') ?></th>
                    <th><?= $this->Paginator->sort('tipo_cambio') ?></th>
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
                <?php foreach ($creditNotes as $creditNote): ?>
                <tr>
                    <td><?= $this->Number->format($creditNote->id_credit_note) ?></td>
                    <td><?= $creditNote->hasValue('credit_note_xml') ? $this->Html->link($creditNote->credit_note_xml->id_credit_note_xml, ['controller' => 'CreditNoteXmls', 'action' => 'view', $creditNote->credit_note_xml->id_credit_note_xml]) : '' ?></td>
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
                    <td><?= $creditNote->tipo_cambio === null ? '' : $this->Number->format($creditNote->tipo_cambio) ?></td>
                    <td><?= $creditNote->subtotal === null ? '' : $this->Number->format($creditNote->subtotal) ?></td>
                    <td><?= $creditNote->total === null ? '' : $this->Number->format($creditNote->total) ?></td>
                    <td><?= h($creditNote->emisor_nombre) ?></td>
                    <td><?= h($creditNote->emisor_rfc) ?></td>
                    <td><?= h($creditNote->emisor_regimen_fiscal) ?></td>
                    <td><?= h($creditNote->receptor_nombre) ?></td>
                    <td><?= h($creditNote->receptor_rfc) ?></td>
                    <td><?= h($creditNote->receptor_domicilio_fiscal) ?></td>
                    <td><?= h($creditNote->receptor_regimen_fiscal) ?></td>
                    <td><?= h($creditNote->receptor_uso_cfdi) ?></td>
                    <td><?= h($creditNote->impuesto_traslado0) ?></td>
                    <td><?= $creditNote->impuesto_traslado_base0 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_base0) ?></td>
                    <td><?= $creditNote->impuesto_traslado_importe0 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_importe0) ?></td>
                    <td><?= $creditNote->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_tasa_cuota0) ?></td>
                    <td><?= h($creditNote->impuesto_traslado_tipo_factor0) ?></td>
                    <td><?= h($creditNote->impuesto_traslado1) ?></td>
                    <td><?= $creditNote->impuesto_traslado_base1 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_base1) ?></td>
                    <td><?= $creditNote->impuesto_traslado_importe1 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_importe1) ?></td>
                    <td><?= $creditNote->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($creditNote->impuesto_traslado_tasa_cuota1) ?></td>
                    <td><?= h($creditNote->impuesto_traslado_tipo_factor1) ?></td>
                    <td><?= h($creditNote->fecha_timbrado) ?></td>
                    <td><?= h($creditNote->uuid) ?></td>
                    <td><?= $creditNote->status === null ? '' : $this->Number->format($creditNote->status) ?></td>
                    <td><?= $creditNote->status_alien === null ? '' : $this->Number->format($creditNote->status_alien) ?></td>
                    <td><?= h($creditNote->created) ?></td>
                    <td><?= h($creditNote->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $creditNote->id_credit_note]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creditNote->id_credit_note]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $creditNote->id_credit_note],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $creditNote->id_credit_note),
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