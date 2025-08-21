<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CreditNoteConcept> $creditNoteConcepts
 */
?>
<div class="creditNoteConcepts index content">
    <?= $this->Html->link(__('New Credit Note Concept'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Credit Note Concepts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_credit_note_concept') ?></th>
                    <th><?= $this->Paginator->sort('credit_note_id') ?></th>
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
                <?php foreach ($creditNoteConcepts as $creditNoteConcept): ?>
                <tr>
                    <td><?= $this->Number->format($creditNoteConcept->id_credit_note_concept) ?></td>
                    <td><?= $creditNoteConcept->hasValue('credit_note') ? $this->Html->link($creditNoteConcept->credit_note->id_credit_note, ['controller' => 'CreditNotes', 'action' => 'view', $creditNoteConcept->credit_note->id_credit_note]) : '' ?></td>
                    <td><?= h($creditNoteConcept->clave_prod_serv) ?></td>
                    <td><?= h($creditNoteConcept->clave_unidad) ?></td>
                    <td><?= h($creditNoteConcept->no_identificacion) ?></td>
                    <td><?= h($creditNoteConcept->unidad) ?></td>
                    <td><?= h($creditNoteConcept->descripcion) ?></td>
                    <td><?= $creditNoteConcept->valor_unitario === null ? '' : $this->Number->format($creditNoteConcept->valor_unitario) ?></td>
                    <td><?= $creditNoteConcept->cantidad === null ? '' : $this->Number->format($creditNoteConcept->cantidad) ?></td>
                    <td><?= $creditNoteConcept->importe === null ? '' : $this->Number->format($creditNoteConcept->importe) ?></td>
                    <td><?= h($creditNoteConcept->objeto_imp) ?></td>
                    <td><?= h($creditNoteConcept->impuesto_traslado) ?></td>
                    <td><?= $creditNoteConcept->impuesto_traslado_base === null ? '' : $this->Number->format($creditNoteConcept->impuesto_traslado_base) ?></td>
                    <td><?= $creditNoteConcept->impuesto_traslado_importe === null ? '' : $this->Number->format($creditNoteConcept->impuesto_traslado_importe) ?></td>
                    <td><?= $creditNoteConcept->impuesto_traslado_tasa_cuota === null ? '' : $this->Number->format($creditNoteConcept->impuesto_traslado_tasa_cuota) ?></td>
                    <td><?= h($creditNoteConcept->impuesto_traslado_tipo_factor) ?></td>
                    <td><?= $creditNoteConcept->status === null ? '' : $this->Number->format($creditNoteConcept->status) ?></td>
                    <td><?= h($creditNoteConcept->created) ?></td>
                    <td><?= h($creditNoteConcept->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $creditNoteConcept->id_credit_note_concept]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creditNoteConcept->id_credit_note_concept]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $creditNoteConcept->id_credit_note_concept],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $creditNoteConcept->id_credit_note_concept),
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