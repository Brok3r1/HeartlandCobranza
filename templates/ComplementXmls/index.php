<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ComplementXml> $complementXmls
 */
?>
<div class="complementXmls index content">
    <?= $this->Html->link(__('New Complement Xml'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Complement Xmls') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_complement_xml') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($complementXmls as $complementXml): ?>
                <tr>
                    <td><?= $this->Number->format($complementXml->id_complement_xml) ?></td>
                    <td><?= $complementXml->status === null ? '' : $this->Number->format($complementXml->status) ?></td>
                    <td><?= h($complementXml->created) ?></td>
                    <td><?= h($complementXml->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $complementXml->id_complement_xml]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $complementXml->id_complement_xml]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $complementXml->id_complement_xml],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $complementXml->id_complement_xml),
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