<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperAdministrator $superAdministrator
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $superAdministrator->id_super_administrator],
                ['confirm' => __('Are you sure you want to delete # {0}?', $superAdministrator->id_super_administrator), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Super Administrators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="superAdministrators form content">
            <?= $this->Form->create($superAdministrator) ?>
            <fieldset>
                <legend><?= __('Edit Super Administrator') ?></legend>
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
