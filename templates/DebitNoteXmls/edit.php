<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DebitNoteXml $debitNoteXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $debitNoteXml->id_debit_note_xml],
                ['confirm' => __('Are you sure you want to delete # {0}?', $debitNoteXml->id_debit_note_xml), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Debit Note Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="debitNoteXmls form content">
            <?= $this->Form->create($debitNoteXml) ?>
            <fieldset>
                <legend><?= __('Edit Debit Note Xml') ?></legend>
                <?php
                    echo $this->Form->control('original_data');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
