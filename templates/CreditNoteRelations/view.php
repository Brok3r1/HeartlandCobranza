<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreditNoteRelation $creditNoteRelation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Credit Note Relation'), ['action' => 'edit', $creditNoteRelation->id_credit_note_relation], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Credit Note Relation'), ['action' => 'delete', $creditNoteRelation->id_credit_note_relation], ['confirm' => __('Are you sure you want to delete # {0}?', $creditNoteRelation->id_credit_note_relation), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Credit Note Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Credit Note Relation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="creditNoteRelations view content">
            <h3><?= h($creditNoteRelation->id_credit_note_relation) ?></h3>
            <table>
                <tr>
                    <th><?= __('Invoice') ?></th>
                    <td><?= $creditNoteRelation->hasValue('invoice') ? $this->Html->link($creditNoteRelation->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $creditNoteRelation->invoice->id_invoice]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Credit Note') ?></th>
                    <td><?= $creditNoteRelation->hasValue('credit_note') ? $this->Html->link($creditNoteRelation->credit_note->id_credit_note, ['controller' => 'CreditNotes', 'action' => 'view', $creditNoteRelation->credit_note->id_credit_note]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Relacion') ?></th>
                    <td><?= h($creditNoteRelation->tipo_relacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($creditNoteRelation->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Credit Note Relation') ?></th>
                    <td><?= $this->Number->format($creditNoteRelation->id_credit_note_relation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $creditNoteRelation->status === null ? '' : $this->Number->format($creditNoteRelation->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($creditNoteRelation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($creditNoteRelation->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>