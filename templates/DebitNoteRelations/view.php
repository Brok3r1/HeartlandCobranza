<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DebitNoteRelation $debitNoteRelation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Debit Note Relation'), ['action' => 'edit', $debitNoteRelation->id_debit_note_relation], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Debit Note Relation'), ['action' => 'delete', $debitNoteRelation->id_debit_note_relation], ['confirm' => __('Are you sure you want to delete # {0}?', $debitNoteRelation->id_debit_note_relation), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Debit Note Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Debit Note Relation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="debitNoteRelations view content">
            <h3><?= h($debitNoteRelation->id_debit_note_relation) ?></h3>
            <table>
                <tr>
                    <th><?= __('Invoice') ?></th>
                    <td><?= $debitNoteRelation->hasValue('invoice') ? $this->Html->link($debitNoteRelation->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $debitNoteRelation->invoice->id_invoice]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Debit Note') ?></th>
                    <td><?= $debitNoteRelation->hasValue('debit_note') ? $this->Html->link($debitNoteRelation->debit_note->id_debit_note, ['controller' => 'DebitNotes', 'action' => 'view', $debitNoteRelation->debit_note->id_debit_note]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Relacion') ?></th>
                    <td><?= h($debitNoteRelation->tipo_relacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($debitNoteRelation->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Debit Note Relation') ?></th>
                    <td><?= $this->Number->format($debitNoteRelation->id_debit_note_relation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $debitNoteRelation->status === null ? '' : $this->Number->format($debitNoteRelation->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($debitNoteRelation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($debitNoteRelation->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>