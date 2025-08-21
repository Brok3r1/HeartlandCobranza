<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrator $administrator
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Administrator'), ['action' => 'edit', $administrator->id_administrator], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Administrator'), ['action' => 'delete', $administrator->id_administrator], ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->id_administrator), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Administrators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Administrator'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="administrators view content">
            <h3><?= h($administrator->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $administrator->hasValue('user') ? $this->Html->link($administrator->user->id_user, ['controller' => 'Users', 'action' => 'view', $administrator->user->id_user]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($administrator->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($administrator->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($administrator->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Administrator') ?></th>
                    <td><?= $this->Number->format($administrator->id_administrator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $administrator->status === null ? '' : $this->Number->format($administrator->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($administrator->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($administrator->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>