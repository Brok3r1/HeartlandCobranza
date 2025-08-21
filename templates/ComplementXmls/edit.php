<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ComplementXml $complementXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $complementXml->id_complement_xml],
                ['confirm' => __('Are you sure you want to delete # {0}?', $complementXml->id_complement_xml), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Complement Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="complementXmls form content">
            <?= $this->Form->create($complementXml) ?>
            <fieldset>
                <legend><?= __('Edit Complement Xml') ?></legend>
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
