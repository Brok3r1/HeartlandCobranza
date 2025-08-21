<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceConcept $invoiceConcept
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invoice Concept'), ['action' => 'edit', $invoiceConcept->id_invoice_concept], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invoice Concept'), ['action' => 'delete', $invoiceConcept->id_invoice_concept], ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceConcept->id_invoice_concept), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invoice Concepts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invoice Concept'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="invoiceConcepts view content">
            <h3><?= h($invoiceConcept->id_invoice_concept) ?></h3>
            <table>
                <tr>
                    <th><?= __('Invoice') ?></th>
                    <td><?= $invoiceConcept->hasValue('invoice') ? $this->Html->link($invoiceConcept->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $invoiceConcept->invoice->id_invoice]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave Prod Serv') ?></th>
                    <td><?= h($invoiceConcept->clave_prod_serv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave Unidad') ?></th>
                    <td><?= h($invoiceConcept->clave_unidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('No Identificacion') ?></th>
                    <td><?= h($invoiceConcept->no_identificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidad') ?></th>
                    <td><?= h($invoiceConcept->unidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($invoiceConcept->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Objeto Imp') ?></th>
                    <td><?= h($invoiceConcept->objeto_imp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado') ?></th>
                    <td><?= h($invoiceConcept->impuesto_traslado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor') ?></th>
                    <td><?= h($invoiceConcept->impuesto_traslado_tipo_factor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Invoice Concept') ?></th>
                    <td><?= $this->Number->format($invoiceConcept->id_invoice_concept) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Unitario') ?></th>
                    <td><?= $invoiceConcept->valor_unitario === null ? '' : $this->Number->format($invoiceConcept->valor_unitario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $invoiceConcept->cantidad === null ? '' : $this->Number->format($invoiceConcept->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $invoiceConcept->importe === null ? '' : $this->Number->format($invoiceConcept->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base') ?></th>
                    <td><?= $invoiceConcept->impuesto_traslado_base === null ? '' : $this->Number->format($invoiceConcept->impuesto_traslado_base) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe') ?></th>
                    <td><?= $invoiceConcept->impuesto_traslado_importe === null ? '' : $this->Number->format($invoiceConcept->impuesto_traslado_importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota') ?></th>
                    <td><?= $invoiceConcept->impuesto_traslado_tasa_cuota === null ? '' : $this->Number->format($invoiceConcept->impuesto_traslado_tasa_cuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $invoiceConcept->status === null ? '' : $this->Number->format($invoiceConcept->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($invoiceConcept->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($invoiceConcept->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>