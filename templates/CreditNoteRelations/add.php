<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreditNoteRelation $creditNoteRelation
 * @var \Cake\Collection\CollectionInterface|string[] $invoices
 * @var \Cake\Collection\CollectionInterface|string[] $creditNotes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Credit Note Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="creditNoteRelations form content">
            <?= $this->Form->create($creditNoteRelation) ?>
            <fieldset>
                <legend><?= __('Add Credit Note Relation') ?></legend>
                <?php
                    echo $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true]);
                    echo $this->Form->control('credit_note_id', ['options' => $creditNotes, 'empty' => true]);
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
