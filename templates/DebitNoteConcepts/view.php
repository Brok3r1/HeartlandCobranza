<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DebitNoteConcept $debitNoteConcept
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Debit Note Concept'), ['action' => 'edit', $debitNoteConcept->id_debit_note_concept], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Debit Note Concept'), ['action' => 'delete', $debitNoteConcept->id_debit_note_concept], ['confirm' => __('Are you sure you want to delete # {0}?', $debitNoteConcept->id_debit_note_concept), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Debit Note Concepts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Debit Note Concept'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="debitNoteConcepts view content">
            <h3><?= h($debitNoteConcept->id_debit_note_concept) ?></h3>
            <table>
                <tr>
                    <th><?= __('Debit Note') ?></th>
                    <td><?= $debitNoteConcept->hasValue('debit_note') ? $this->Html->link($debitNoteConcept->debit_note->id_debit_note, ['controller' => 'DebitNotes', 'action' => 'view', $debitNoteConcept->debit_note->id_debit_note]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave Prod Serv') ?></th>
                    <td><?= h($debitNoteConcept->clave_prod_serv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave Unidad') ?></th>
                    <td><?= h($debitNoteConcept->clave_unidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('No Identificacion') ?></th>
                    <td><?= h($debitNoteConcept->no_identificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidad') ?></th>
                    <td><?= h($debitNoteConcept->unidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($debitNoteConcept->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Objeto Imp') ?></th>
                    <td><?= h($debitNoteConcept->objeto_imp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado') ?></th>
                    <td><?= h($debitNoteConcept->impuesto_traslado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor') ?></th>
                    <td><?= h($debitNoteConcept->impuesto_traslado_tipo_factor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Debit Note Concept') ?></th>
                    <td><?= $this->Number->format($debitNoteConcept->id_debit_note_concept) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Unitario') ?></th>
                    <td><?= $debitNoteConcept->valor_unitario === null ? '' : $this->Number->format($debitNoteConcept->valor_unitario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $debitNoteConcept->cantidad === null ? '' : $this->Number->format($debitNoteConcept->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $debitNoteConcept->importe === null ? '' : $this->Number->format($debitNoteConcept->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base') ?></th>
                    <td><?= $debitNoteConcept->impuesto_traslado_base === null ? '' : $this->Number->format($debitNoteConcept->impuesto_traslado_base) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe') ?></th>
                    <td><?= $debitNoteConcept->impuesto_traslado_importe === null ? '' : $this->Number->format($debitNoteConcept->impuesto_traslado_importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota') ?></th>
                    <td><?= $debitNoteConcept->impuesto_traslado_tasa_cuota === null ? '' : $this->Number->format($debitNoteConcept->impuesto_traslado_tasa_cuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $debitNoteConcept->status === null ? '' : $this->Number->format($debitNoteConcept->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($debitNoteConcept->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($debitNoteConcept->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>