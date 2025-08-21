<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CreditNoteXml> $creditNoteXmls
 */
?>
<div class="creditNoteXmls index content">
    <?= $this->Html->link(__('New Credit Note Xml'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Credit Note Xmls') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_credit_note_xml') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($creditNoteXmls as $creditNoteXml): ?>
                <tr>
                    <td><?= $this->Number->format($creditNoteXml->id_credit_note_xml) ?></td>
                    <td><?= $creditNoteXml->status === null ? '' : $this->Number->format($creditNoteXml->status) ?></td>
                    <td><?= h($creditNoteXml->created) ?></td>
                    <td><?= h($creditNoteXml->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $creditNoteXml->id_credit_note_xml]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creditNoteXml->id_credit_note_xml]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $creditNoteXml->id_credit_note_xml],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $creditNoteXml->id_credit_note_xml),
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