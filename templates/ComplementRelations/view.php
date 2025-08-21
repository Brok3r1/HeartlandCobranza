<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ComplementRelation $complementRelation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Complement Relation'), ['action' => 'edit', $complementRelation->id_complement_relation], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Complement Relation'), ['action' => 'delete', $complementRelation->id_complement_relation], ['confirm' => __('Are you sure you want to delete # {0}?', $complementRelation->id_complement_relation), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Complement Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Complement Relation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="complementRelations view content">
            <h3><?= h($complementRelation->id_complement_relation) ?></h3>
            <table>
                <tr>
                    <th><?= __('Invoice') ?></th>
                    <td><?= $complementRelation->hasValue('invoice') ? $this->Html->link($complementRelation->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $complementRelation->invoice->id_invoice]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Complement') ?></th>
                    <td><?= $complementRelation->hasValue('complement') ? $this->Html->link($complementRelation->complement->id_complement, ['controller' => 'Complements', 'action' => 'view', $complementRelation->complement->id_complement]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($complementRelation->serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($complementRelation->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($complementRelation->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moneda') ?></th>
                    <td><?= h($complementRelation->moneda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Equivalencia') ?></th>
                    <td><?= h($complementRelation->equivalencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Objeto Imp') ?></th>
                    <td><?= h($complementRelation->objeto_imp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado0') ?></th>
                    <td><?= h($complementRelation->impuesto_traslado0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor0') ?></th>
                    <td><?= h($complementRelation->impuesto_traslado_tipo_factor0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado1') ?></th>
                    <td><?= h($complementRelation->impuesto_traslado1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor1') ?></th>
                    <td><?= h($complementRelation->impuesto_traslado_tipo_factor1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Complement Relation') ?></th>
                    <td><?= $this->Number->format($complementRelation->id_complement_relation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Parcialidad') ?></th>
                    <td><?= $complementRelation->num_parcialidad === null ? '' : $this->Number->format($complementRelation->num_parcialidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Pagado') ?></th>
                    <td><?= $complementRelation->imp_pagado === null ? '' : $this->Number->format($complementRelation->imp_pagado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Saldo Ant') ?></th>
                    <td><?= $complementRelation->imp_saldo_ant === null ? '' : $this->Number->format($complementRelation->imp_saldo_ant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Saldo Insoluto') ?></th>
                    <td><?= $complementRelation->imp_saldo_insoluto === null ? '' : $this->Number->format($complementRelation->imp_saldo_insoluto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base0') ?></th>
                    <td><?= $complementRelation->impuesto_traslado_base0 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_base0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe0') ?></th>
                    <td><?= $complementRelation->impuesto_traslado_importe0 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_importe0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota0') ?></th>
                    <td><?= $complementRelation->impuesto_traslado_tasa_cuota0 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_tasa_cuota0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base1') ?></th>
                    <td><?= $complementRelation->impuesto_traslado_base1 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_base1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe1') ?></th>
                    <td><?= $complementRelation->impuesto_traslado_importe1 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_importe1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota1') ?></th>
                    <td><?= $complementRelation->impuesto_traslado_tasa_cuota1 === null ? '' : $this->Number->format($complementRelation->impuesto_traslado_tasa_cuota1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $complementRelation->status === null ? '' : $this->Number->format($complementRelation->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($complementRelation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($complementRelation->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>