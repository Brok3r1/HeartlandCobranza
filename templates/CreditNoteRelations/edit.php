<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreditNoteRelation $creditNoteRelation
 * @var string[]|\Cake\Collection\CollectionInterface $invoices
 * @var string[]|\Cake\Collection\CollectionInterface $creditNotes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $creditNoteRelation->id_credit_note_relation],
                ['confirm' => __('Are you sure you want to delete # {0}?', $creditNoteRelation->id_credit_note_relation), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Credit Note Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="creditNoteRelations form content">
            <?= $this->Form->create($creditNoteRelation) ?>
            <fieldset>
                <legend><?= __('Edit Credit Note Relation') ?></legend>
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
