<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DebitNoteConcept> $debitNoteConcepts
 */
?>
<div class="debitNoteConcepts index content">
    <?= $this->Html->link(__('New Debit Note Concept'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Debit Note Concepts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_debit_note_concept') ?></th>
                    <th><?= $this->Paginator->sort('debit_note_id') ?></th>
                    <th><?= $this->Paginator->sort('clave_prod_serv') ?></th>
                    <th><?= $this->Paginator->sort('clave_unidad') ?></th>
                    <th><?= $this->Paginator->sort('no_identificacion') ?></th>
                    <th><?= $this->Paginator->sort('unidad') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('valor_unitario') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('objeto_imp') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_base') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_importe') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tasa_cuota') ?></th>
                    <th><?= $this->Paginator->sort('impuesto_traslado_tipo_factor') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($debitNoteConcepts as $debitNoteConcept): ?>
                <tr>
                    <td><?= $this->Number->format($debitNoteConcept->id_debit_note_concept) ?></td>
                    <td><?= $debitNoteConcept->hasValue('debit_note') ? $this->Html->link($debitNoteConcept->debit_note->id_debit_note, ['controller' => 'DebitNotes', 'action' => 'view', $debitNoteConcept->debit_note->id_debit_note]) : '' ?></td>
                    <td><?= h($debitNoteConcept->clave_prod_serv) ?></td>
                    <td><?= h($debitNoteConcept->clave_unidad) ?></td>
                    <td><?= h($debitNoteConcept->no_identificacion) ?></td>
                    <td><?= h($debitNoteConcept->unidad) ?></td>
                    <td><?= h($debitNoteConcept->descripcion) ?></td>
                    <td><?= $debitNoteConcept->valor_unitario === null ? '' : $this->Number->format($debitNoteConcept->valor_unitario) ?></td>
                    <td><?= $debitNoteConcept->cantidad === null ? '' : $this->Number->format($debitNoteConcept->cantidad) ?></td>
                    <td><?= $debitNoteConcept->importe === null ? '' : $this->Number->format($debitNoteConcept->importe) ?></td>
                    <td><?= h($debitNoteConcept->objeto_imp) ?></td>
                    <td><?= h($debitNoteConcept->impuesto_traslado) ?></td>
                    <td><?= $debitNoteConcept->impuesto_traslado_base === null ? '' : $this->Number->format($debitNoteConcept->impuesto_traslado_base) ?></td>
                    <td><?= $debitNoteConcept->impuesto_traslado_importe === null ? '' : $this->Number->format($debitNoteConcept->impuesto_traslado_importe) ?></td>
                    <td><?= $debitNoteConcept->impuesto_traslado_tasa_cuota === null ? '' : $this->Number->format($debitNoteConcept->impuesto_traslado_tasa_cuota) ?></td>
                    <td><?= h($debitNoteConcept->impuesto_traslado_tipo_factor) ?></td>
                    <td><?= $debitNoteConcept->status === null ? '' : $this->Number->format($debitNoteConcept->status) ?></td>
                    <td><?= h($debitNoteConcept->created) ?></td>
                    <td><?= h($debitNoteConcept->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $debitNoteConcept->id_debit_note_concept]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $debitNoteConcept->id_debit_note_concept]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $debitNoteConcept->id_debit_note_concept],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $debitNoteConcept->id_debit_note_concept),
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