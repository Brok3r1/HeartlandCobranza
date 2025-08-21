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
            <?= $this->Html->link(__('Edit Credential'), ['action' => 'edit', $credential->id_credential], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Credential'), ['action' => 'delete', $credential->id_credential], ['confirm' => __('Are you sure you want to delete # {0}?', $credential->id_credential), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Credentials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Credential'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="credentials view content">
            <h3><?= h($credential->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($credential->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Home') ?></th>
                    <td><?= h($credential->home) ?></td>
                </tr>
                <tr>
                    <th><?= __('Menu') ?></th>
                    <td><?= h($credential->menu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Credential') ?></th>
                    <td><?= $this->Number->format($credential->id_credential) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $credential->status === null ? '' : $this->Number->format($credential->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($credential->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($credential->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($credential->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id User') ?></th>
                            <th><?= __('Credential Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Status Recover') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($credential->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id_user) ?></td>
                            <td><?= h($user->credential_id) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->status) ?></td>
                            <td><?= h($user->status_recover) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id_user]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id_user]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Users', 'action' => 'delete', $user->id_user],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $user->id_user),
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