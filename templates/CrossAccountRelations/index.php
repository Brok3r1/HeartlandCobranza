<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CrossAccountRelation> $crossAccountRelations
 */
?>
<div class="crossAccountRelations index content">
    <?= $this->Html->link(__('New Cross Account Relation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cross Account Relations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_cross_account_relation') ?></th>
                    <th><?= $this->Paginator->sort('invoice_id') ?></th>
                    <th><?= $this->Paginator->sort('cross_account_id') ?></th>
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
                <?php foreach ($crossAccountRelations as $crossAccountRelation): ?>
                <tr>
                    <td><?= $this->Number->format($crossAccountRelation->id_cross_account_relation) ?></td>
                    <td><?= $crossAccountRelation->hasValue('invoice') ? $this->Html->link($crossAccountRelation->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $crossAccountRelation->invoice->id_invoice]) : '' ?></td>
                    <td><?= $crossAccountRelation->hasValue('cross_account') ? $this->Html->link($crossAccountRelation->cross_account->id_cross_account, ['controller' => 'CrossAccounts', 'action' => 'view', $crossAccountRelation->cross_account->id_cross_account]) : '' ?></td>
                    <td><?= h($crossAccountRelation->serie) ?></td>
                    <td><?= h($crossAccountRelation->folio) ?></td>
                    <td><?= h($crossAccountRelation->uuid) ?></td>
                    <td><?= h($crossAccountRelation->moneda) ?></td>
                    <td><?= h($crossAccountRelation->equivalencia) ?></td>
                    <td><?= $crossAccountRelation->num_parcialidad === null ? '' : $this->Number->format($crossAccountRelation->num_parcialidad) ?></td>
                    <td><?= $crossAccountRelation->imp_pagado === null ? '' : $this->Number->format($crossAccountRelation->imp_pagado) ?></td>
                    <td><?= $crossAccountRelation->imp_saldo_ant === null ? '' : $this->Number->format($crossAccountRelation->imp_saldo_ant) ?></td>
                    <td><?= $crossAccountRelation->imp_saldo_insoluto === null ? '' : $this->Number->format($crossAccountRelation->imp_saldo_insoluto) ?></td>
                    <td><?= h($crossAccountRelation->objeto_imp) ?></td>
                    <td><?= h($crossAccountRelation->impuesto_traslado0) ?></td>
                    <td><?= $crossAccountRelation->impuesto_traslado_base0 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_base0) ?></td>
                    <td><?= $crossAccountRelation->impuesto_traslado_importe0 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_importe0) ?></td>
                    <td><?= $crossAccountRelation->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_tasa_cuota0) ?></td>
                    <td><?= h($crossAccountRelation->impuesto_traslado_tipo_factor0) ?></td>
                    <td><?= h($crossAccountRelation->impuesto_traslado1) ?></td>
                    <td><?= $crossAccountRelation->impuesto_traslado_base1 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_base1) ?></td>
                    <td><?= $crossAccountRelation->impuesto_traslado_importe1 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_importe1) ?></td>
                    <td><?= $crossAccountRelation->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_tasa_cuota1) ?></td>
                    <td><?= h($crossAccountRelation->impuesto_traslado_tipo_factor1) ?></td>
                    <td><?= $crossAccountRelation->status === null ? '' : $this->Number->format($crossAccountRelation->status) ?></td>
                    <td><?= h($crossAccountRelation->created) ?></td>
                    <td><?= h($crossAccountRelation->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crossAccountRelation->id_cross_account_relation]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crossAccountRelation->id_cross_account_relation]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $crossAccountRelation->id_cross_account_relation],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $crossAccountRelation->id_cross_account_relation),
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