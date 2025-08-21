<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreditNoteConcept $creditNoteConcept
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Credit Note Concept'), ['action' => 'edit', $creditNoteConcept->id_credit_note_concept], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Credit Note Concept'), ['action' => 'delete', $creditNoteConcept->id_credit_note_concept], ['confirm' => __('Are you sure you want to delete # {0}?', $creditNoteConcept->id_credit_note_concept), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Credit Note Concepts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Credit Note Concept'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="creditNoteConcepts view content">
            <h3><?= h($creditNoteConcept->id_credit_note_concept) ?></h3>
            <table>
                <tr>
                    <th><?= __('Credit Note') ?></th>
                    <td><?= $creditNoteConcept->hasValue('credit_note') ? $this->Html->link($creditNoteConcept->credit_note->id_credit_note, ['controller' => 'CreditNotes', 'action' => 'view', $creditNoteConcept->credit_note->id_credit_note]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave Prod Serv') ?></th>
                    <td><?= h($creditNoteConcept->clave_prod_serv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave Unidad') ?></th>
                    <td><?= h($creditNoteConcept->clave_unidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('No Identificacion') ?></th>
                    <td><?= h($creditNoteConcept->no_identificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidad') ?></th>
                    <td><?= h($creditNoteConcept->unidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($creditNoteConcept->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Objeto Imp') ?></th>
                    <td><?= h($creditNoteConcept->objeto_imp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado') ?></th>
                    <td><?= h($creditNoteConcept->impuesto_traslado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tipo Factor') ?></th>
                    <td><?= h($creditNoteConcept->impuesto_traslado_tipo_factor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Credit Note Concept') ?></th>
                    <td><?= $this->Number->format($creditNoteConcept->id_credit_note_concept) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Unitario') ?></th>
                    <td><?= $creditNoteConcept->valor_unitario === null ? '' : $this->Number->format($creditNoteConcept->valor_unitario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $creditNoteConcept->cantidad === null ? '' : $this->Number->format($creditNoteConcept->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $creditNoteConcept->importe === null ? '' : $this->Number->format($creditNoteConcept->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Base') ?></th>
                    <td><?= $creditNoteConcept->impuesto_traslado_base === null ? '' : $this->Number->format($creditNoteConcept->impuesto_traslado_base) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Importe') ?></th>
                    <td><?= $creditNoteConcept->impuesto_traslado_importe === null ? '' : $this->Number->format($creditNoteConcept->impuesto_traslado_importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impuesto Traslado Tasa Cuota') ?></th>
                    <td><?= $creditNoteConcept->impuesto_traslado_tasa_cuota === null ? '' : $this->Number->format($creditNoteConcept->impuesto_traslado_tasa_cuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $creditNoteConcept->status === null ? '' : $this->Number->format($creditNoteConcept->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($creditNoteConcept->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($creditNoteConcept->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>