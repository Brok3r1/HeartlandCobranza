<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DebitNoteRelation $debitNoteRelation
 * @var string[]|\Cake\Collection\CollectionInterface $invoices
 * @var string[]|\Cake\Collection\CollectionInterface $debitNotes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $debitNoteRelation->id_debit_note_relation],
                ['confirm' => __('Are you sure you want to delete # {0}?', $debitNoteRelation->id_debit_note_relation), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Debit Note Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="debitNoteRelations form content">
            <?= $this->Form->create($debitNoteRelation) ?>
            <fieldset>
                <legend><?= __('Edit Debit Note Relation') ?></legend>
                <?php
                    echo $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true]);
                    echo $this->Form->control('debit_note_id', ['options' => $debitNotes, 'empty' => true]);
                    echo $this->Form->control('tipo_relacion');
                    echo $this->Form->control('uuid');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
