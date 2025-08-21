<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CrossAccountXml> $crossAccountXmls
 */
?>
<div class="crossAccountXmls index content">
    <?= $this->Html->link(__('New Cross Account Xml'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cross Account Xmls') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_cross_account_xml') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crossAccountXmls as $crossAccountXml): ?>
                <tr>
                    <td><?= $this->Number->format($crossAccountXml->id_cross_account_xml) ?></td>
                    <td><?= $crossAccountXml->status === null ? '' : $this->Number->format($crossAccountXml->status) ?></td>
                    <td><?= h($crossAccountXml->created) ?></td>
                    <td><?= h($crossAccountXml->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crossAccountXml->id_cross_account_xml]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crossAccountXml->id_cross_account_xml]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $crossAccountXml->id_cross_account_xml],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $crossAccountXml->id_cross_account_xml),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>