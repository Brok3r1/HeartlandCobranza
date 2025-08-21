<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ComplementRelation> $complementRelations
 */
?>
<div class="complementRelations index content">
    <?= $this->Html->link(__('New Complement Relation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Complement Relations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_complement_relation') ?></th>
                    <th><?= $this->Paginator->sort('invoice_id') ?></th>
                    <th><?= $this->Paginator->sort('complement_id') ?></th>
                    <th><?= $this->Paginator->sort('serie') ?></th>
                    <th><?= $this->Paginator->sort('folio') ?></th>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('moneda') ?></th>
                    <th><?= $this->Paginator->sort('equivalencia') ?></th>
                    <th><?= $this->Paginator->sort('num_parcialidad') ?></th>
                    <th><?= $this->Paginator->sort('imp_pagado') ?></th>
                    <th><?= $this->Paginator->sort('imp_saldo_ant') ?></th>
                    <th><?= $this->Paginator->sort('imp_saldo_insoluto') ?></th>
                    <th><?= $this->Paginator->sort('objeto_imp') ?></th>
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
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($complementRelations as $complementRelation): ?>
                <tr>
                    <td><?= $this->Number->format($complementRelation->id_complement_relation) ?></td>
                    <td><?= $complementRelation->hasValue('invoice') ? $this->Html->link($complementRelation->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $complementRelation->invoice->id_invoice]) : '' ?></td>
                    <td><?= $complementRelation->hasValue('complement') ? $this->Html->link($complementRelation->complement->id_complement, ['controller' => 'Complements', 'action' => 'view', $complementRelation->complement->id_complement]) : '' ?></td>
                    <td><?= h($complementRelation->serie) ?></td>
                    <td><?= h($complementRelation->folio) ?></td>
                    <td><?= h($complementRelation->uuid) ?></td>
                    <td><?= h($complementRelation->moneda) ?></td>
                    <td><?= h($complementRelation->equivalencia) ?></td>
                    <td><?= $complementRelation->num_parcialidad === null ? '' : $this->Number->format($complementRelation->num_parcialidad) ?></td>
                    <td><?= $complementRelation->imp_pagado === null ? '' : $this->Number->format($complementRelation->imp_pagado) ?></td>
                    <td><?= $complementRelation->imp_saldo_ant === null ? '' : $this->Number->format($complementRelation->imp_saldo_ant) ?></td>
                    <td><?= $complementRelation->imp_saldo_insoluto === null ? '' : $this->Number->format($complementRelation->imp_saldo_insoluto) ?></td>
                    <td><?= h($complementRelation->objeto_imp) ?></td>
                    <td><?= h($complementRelation->impuesto_traslado0) ?></td>
                    <td><?= $complementRelation->impuesto_traslado_base0 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_base0) ?></td>
                    <td><?= $complementRelation->impuesto_traslado_importe0 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_importe0) ?></td>
                    <td><?= $complementRelation->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_tasa_cuota0) ?></td>
                    <td><?= h($complementRelation->impuesto_traslado_tipo_factor0) ?></td>
                    <td><?= h($complementRelation->impuesto_traslado1) ?></td>
                    <td><?= $complementRelation->impuesto_traslado_base1 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_base1) ?></td>
                    <td><?= $complementRelation->impuesto_traslado_importe1 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_importe1) ?></td>
                    <td><?= $complementRelation->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_tasa_cuota1) ?></td>
                    <td><?= h($complementRelation->impuesto_traslado_tipo_factor1) ?></td>
                    <td><?= $complementRelation->status === null ? '' : $this->Number->format($complementRelation->status) ?></td>
                    <td><?= h($complementRelation->created) ?></td>
                    <td><?= h($complementRelation->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $complementRelation->id_complement_relation]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $complementRelation->id_complement_relation]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $complementRelation->id_complement_relation],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $complementRelation->id_complement_relation),
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