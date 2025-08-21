<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperAdministrator $superAdministrator
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Super Administrator'), ['action' => 'edit', $superAdministrator->id_super_administrator], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Super Administrator'), ['action' => 'delete', $superAdministrator->id_super_administrator], ['confirm' => __('Are you sure you want to delete # {0}?', $superAdministrator->id_super_administrator), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Super Administrators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Super Administrator'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="superAdministrators view content">
            <h3><?= h($superAdministrator->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $superAdministrator->hasValue('user') ? $this->Html->link($superAdministrator->user->id_user, ['controller' => 'Users', 'action' => 'view', $superAdministrator->user->id_user]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($superAdministrator->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($superAdministrator->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($superAdministrator->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Super Administrator') ?></th>
                    <td><?= $this->Number->format($superAdministrator->id_super_administrator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $superAdministrator->status === null ? '' : $this->Number->format($superAdministrator->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($superAdministrator->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($superAdministrator->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>