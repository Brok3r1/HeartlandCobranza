<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrator $administrator
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administrator->id_administrator],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->id_administrator), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Administrators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="administrators form content">
            <?= $this->Form->create($administrator) ?>
            <fieldset>
                <legend><?= __('Edit Administrator') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
