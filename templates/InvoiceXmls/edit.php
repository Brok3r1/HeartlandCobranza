<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceXml $invoiceXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $invoiceXml->id_invoice_xml],
                ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceXml->id_invoice_xml), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Invoice Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="invoiceXmls form content">
            <?= $this->Form->create($invoiceXml) ?>
            <fieldset>
                <legend><?= __('Edit Invoice Xml') ?></legend>
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
