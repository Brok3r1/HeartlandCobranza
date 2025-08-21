<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DebitNote> $debitNotes
 */
?>
<div class="debitNotes index content">
    <?= $this->Html->link(__('New Debit Note'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Debit Notes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_debit_note') ?></th>
                    <th><?= $this->Paginator->sort('debit_note_xml_id') ?></th>
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
                <?php foreach ($debitNotes as $debitNote): ?>
                <tr>
                    <td><?= $this->Number->format($debitNote->id_debit_note) ?></td>
                    <td><?= $debitNote->hasValue('debit_note_xml') ? $this->Html->link($debitNote->debit_note_xml->id_debit_note_xml, ['controller' => 'DebitNoteXmls', 'action' => 'view', $debitNote->debit_note_xml->id_debit_note_xml]) : '' ?></td>
                    <td><?= h($debitNote->serie) ?></td>
                    <td><?= h($debitNote->folio) ?></td>
                    <td><?= h($debitNote->tipo_comprobante) ?></td>
                    <td><?= h($debitNote->fecha) ?></td>
                    <td><?= h($debitNote->forma_pago) ?></td>
                    <td><?= h($debitNote->metodo_pago) ?></td>
                    <td><?= h($debitNote->condiciones_pago) ?></td>
                    <td><?= h($debitNote->exportacion) ?></td>
                    <td><?= h($debitNote->lugar_expedicion) ?></td>
                    <td><?= h($debitNote->moneda) ?></td>
                    <td><?= $debitNote->tipo_cambio === null ? '' : $this->Number->format($debitNote->tipo_cambio) ?></td>
                    <td><?= $debitNote->subtotal === null ? '' : $this->Number->format($debitNote->subtotal) ?></td>
                    <td><?= $debitNote->total === null ? '' : $this->Number->format($debitNote->total) ?></td>
                    <td><?= h($debitNote->emisor_nombre) ?></td>
                    <td><?= h($debitNote->emisor_rfc) ?></td>
                    <td><?= h($debitNote->emisor_regimen_fiscal) ?></td>
                    <td><?= h($debitNote->receptor_nombre) ?></td>
                    <td><?= h($debitNote->receptor_rfc) ?></td>
                    <td><?= h($debitNote->receptor_domicilio_fiscal) ?></td>
                    <td><?= h($debitNote->receptor_regimen_fiscal) ?></td>
                    <td><?= h($debitNote->receptor_uso_cfdi) ?></td>
                    <td><?= h($debitNote->impuesto_traslado0) ?></td>
                    <td><?= $debitNote->impuesto_traslado_base0 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_base0) ?></td>
                    <td><?= $debitNote->impuesto_traslado_importe0 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_importe0) ?></td>
                    <td><?= $debitNote->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_tasa_cuota0) ?></td>
                    <td><?= h($debitNote->impuesto_traslado_tipo_factor0) ?></td>
                    <td><?= h($debitNote->impuesto_traslado1) ?></td>
                    <td><?= $debitNote->impuesto_traslado_base1 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_base1) ?></td>
                    <td><?= $debitNote->impuesto_traslado_importe1 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_importe1) ?></td>
                    <td><?= $debitNote->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($debitNote->impuesto_traslado_tasa_cuota1) ?></td>
                    <td><?= h($debitNote->impuesto_traslado_tipo_factor1) ?></td>
                    <td><?= h($debitNote->fecha_timbrado) ?></td>
                    <td><?= h($debitNote->uuid) ?></td>
                    <td><?= $debitNote->status === null ? '' : $this->Number->format($debitNote->status) ?></td>
                    <td><?= $debitNote->status_alien === null ? '' : $this->Number->format($debitNote->status_alien) ?></td>
                    <td><?= h($debitNote->created) ?></td>
                    <td><?= h($debitNote->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $debitNote->id_debit_note]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $debitNote->id_debit_note]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $debitNote->id_debit_note],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $debitNote->id_debit_note),
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