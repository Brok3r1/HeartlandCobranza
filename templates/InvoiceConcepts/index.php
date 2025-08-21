<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InvoiceConcept> $invoiceConcepts
 */
?>
<div class="invoiceConcepts index content">
    <?= $this->Html->link(__('New Invoice Concept'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invoice Concepts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_invoice_concept') ?></th>
                    <th><?= $this->Paginator->sort('invoice_id') ?></th>
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
                <?php foreach ($invoiceConcepts as $invoiceConcept): ?>
                <tr>
                    <td><?= $this->Number->format($invoiceConcept->id_invoice_concept) ?></td>
                    <td><?= $invoiceConcept->hasValue('invoice') ? $this->Html->link($invoiceConcept->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $invoiceConcept->invoice->id_invoice]) : '' ?></td>
                    <td><?= h($invoiceConcept->clave_prod_serv) ?></td>
                    <td><?= h($invoiceConcept->clave_unidad) ?></td>
                    <td><?= h($invoiceConcept->no_identificacion) ?></td>
                    <td><?= h($invoiceConcept->unidad) ?></td>
                    <td><?= h($invoiceConcept->descripcion) ?></td>
                    <td><?= $invoiceConcept->valor_unitario === null ? '' : $this->Number->format($invoiceConcept->valor_unitario) ?></td>
                    <td><?= $invoiceConcept->cantidad === null ? '' : $this->Number->format($invoiceConcept->cantidad) ?></td>
                    <td><?= $invoiceConcept->importe === null ? '' : $this->Number->format($invoiceConcept->importe) ?></td>
                    <td><?= h($invoiceConcept->objeto_imp) ?></td>
                    <td><?= h($invoiceConcept->impuesto_traslado) ?></td>
                    <td><?= $invoiceConcept->impuesto_traslado_base === null ? '' : $this->Number->format($invoiceConcept->impuesto_traslado_base) ?></td>
                    <td><?= $invoiceConcept->impuesto_traslado_importe === null ? '' : $this->Number->format($invoiceConcept->impuesto_traslado_importe) ?></td>
                    <td><?= $invoiceConcept->impuesto_traslado_tasa_cuota === null ? '' : $this->Number->format($invoiceConcept->impuesto_traslado_tasa_cuota) ?></td>
                    <td><?= h($invoiceConcept->impuesto_traslado_tipo_factor) ?></td>
                    <td><?= $invoiceConcept->status === null ? '' : $this->Number->format($invoiceConcept->status) ?></td>
                    <td><?= h($invoiceConcept->created) ?></td>
                    <td><?= h($invoiceConcept->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $invoiceConcept->id_invoice_concept]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoiceConcept->id_invoice_concept]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $invoiceConcept->id_invoice_concept],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $invoiceConcept->id_invoice_concept),
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