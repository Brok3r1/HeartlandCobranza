<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Credential $credential
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Credentials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="credentials form content">
            <?= $this->Form->create($credential) ?>
            <fieldset>
                <legend><?= __('Add Credential') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('home');
                    echo $this->Form->control('menu');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
