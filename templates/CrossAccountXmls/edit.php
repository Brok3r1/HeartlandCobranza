<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrossAccountXml $crossAccountXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $crossAccountXml->id_cross_account_xml],
                ['confirm' => __('Are you sure you want to delete # {0}?', $crossAccountXml->id_cross_account_xml), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cross Account Xmls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="crossAccountXmls form content">
            <?= $this->Form->create($crossAccountXml) ?>
            <fieldset>
                <legend><?= __('Edit Cross Account Xml') ?></legend>
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
