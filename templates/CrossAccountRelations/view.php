<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrossAccountRelation $crossAccountRelation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cross Account Relation'), ['action' => 'edit', $crossAccountRelation->id_cross_account_relation], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cross Account Relation'), ['action' => 'delete', $crossAccountRelation->id_cross_account_relation], ['confirm' => __('Are you sure you want to delete # {0}?', $crossAccountRelation->id_cross_account_relation), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cross Account Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cross Account Relation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="crossAccountRelations view content">
            <h3><?= h($crossAccountRelation->id_cross_account_relation) ?></h3>
            <table>
                <tr>
                    <th><?= __('Invoice') ?></th>
                    <td><?= $crossAccountRelation->hasValue('invoice') ? $this->Html->link($crossAccountRelation->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $crossAccountRelation->invoice->id_invoice]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cross Account') ?></th>
                    <td><?= $crossAccountRelation->hasValue('cross_account') ? $this->Html->link($crossAccountRelation->cross_account->id_cross_account, ['controller' => 'CrossAccounts', 'action' => 'view', $crossAccountRelation->cross_account->id_cross_account]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($crossAccountRelation->serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($crossAccountRelation->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($crossAccountRelation->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda') ?></th>
                    <td><?= h($crossAccountRelation->moneda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Equivalencia') ?></th>
                    <td><?= h($crossAccountRelation->equivalencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Objeto Imp') ?></th>
                    <td><?= h($crossAccountRelation->objeto_imp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado0') ?></th>
                    <td><?= h($crossAccountRelation->impuesto_traslado0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor0') ?></th>
                    <td><?= h($crossAccountRelation->impuesto_traslado_tipo_factor0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado1') ?></th>
                    <td><?= h($crossAccountRelation->impuesto_traslado1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor1') ?></th>
                    <td><?= h($crossAccountRelation->impuesto_traslado_tipo_factor1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Cross Account Relation') ?></th>
                    <td><?= $this->Number->format($crossAccountRelation->id_cross_account_relation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Parcialidad') ?></th>
                    <td><?= $crossAccountRelation->num_parcialidad === null ? '' : $this->Number->format($crossAccountRelation->num_parcialidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Pagado') ?></th>
                    <td><?= $crossAccountRelation->imp_pagado === null ? '' : $this->Number->format($crossAccountRelation->imp_pagado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Saldo Ant') ?></th>
                    <td><?= $crossAccountRelation->imp_saldo_ant === null ? '' : $this->Number->format($crossAccountRelation->imp_saldo_ant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Saldo Insoluto') ?></th>
                    <td><?= $crossAccountRelation->imp_saldo_insoluto === null ? '' : $this->Number->format($crossAccountRelation->imp_saldo_insoluto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base0') ?></th>
                    <td><?= $crossAccountRelation->impuesto_traslado_base0 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_base0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe0') ?></th>
                    <td><?= $crossAccountRelation->impuesto_traslado_importe0 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_importe0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota0') ?></th>
                    <td><?= $crossAccountRelation->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_tasa_cuota0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base1') ?></th>
                    <td><?= $crossAccountRelation->impuesto_traslado_base1 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_base1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe1') ?></th>
                    <td><?= $crossAccountRelation->impuesto_traslado_importe1 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_importe1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota1') ?></th>
                    <td><?= $crossAccountRelation->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($crossAccountRelation->impuesto_traslado_tasa_cuota1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $crossAccountRelation->status === null ? '' : $this->Number->format($crossAccountRelation->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($crossAccountRelation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($crossAccountRelation->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>