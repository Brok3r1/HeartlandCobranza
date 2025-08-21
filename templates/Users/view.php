<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id_user], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id_user), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->id_user) ?></h3>
            <table>
                <tr>
                    <th><?= __('Credential') ?></th>
                    <td><?= $user->hasValue('credential') ? $this->Html->link($user->credential->name, ['controller' => 'Credentials', 'action' => 'view', $user->credential->id_credential]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($user->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $user->status === null ? '' : $this->Number->format($user->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Recover') ?></th>
                    <td><?= $user->status_recover === null ? '' : $this->Number->format($user->status_recover) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Administrators') ?></h4>
                <?php if (!empty($user->administrators)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Administrator') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->administrators as $administrator) : ?>
                        <tr>
                            <td><?= h($administrator->id_administrator) ?></td>
                            <td><?= h($administrator->user_id) ?></td>
                            <td><?= h($administrator->name) ?></td>
                            <td><?= h($administrator->lastname) ?></td>
                            <td><?= h($administrator->email) ?></td>
                            <td><?= h($administrator->status) ?></td>
                            <td><?= h($administrator->created) ?></td>
                            <td><?= h($administrator->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Administrators', 'action' => 'view', $administrator->id_administrator]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Administrators', 'action' => 'edit', $administrator->id_administrator]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Administrators', 'action' => 'delete', $administrator->id_administrator],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $administrator->id_administrator),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Super Administrators') ?></h4>
                <?php if (!empty($user->super_administrators)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Super Administrator') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->super_administrators as $superAdministrator) : ?>
                        <tr>
                            <td><?= h($superAdministrator->id_super_administrator) ?></td>
                            <td><?= h($superAdministrator->user_id) ?></td>
                            <td><?= h($superAdministrator->name) ?></td>
                            <td><?= h($superAdministrator->lastname) ?></td>
                            <td><?= h($superAdministrator->email) ?></td>
                            <td><?= h($superAdministrator->status) ?></td>
                            <td><?= h($superAdministrator->created) ?></td>
                            <td><?= h($superAdministrator->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SuperAdministrators', 'action' => 'view', $superAdministrator->id_super_administrator]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SuperAdministrators', 'action' => 'edit', $superAdministrator->id_super_administrator]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'SuperAdministrators', 'action' => 'delete', $superAdministrator->id_super_administrator],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $superAdministrator->id_super_administrator),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>