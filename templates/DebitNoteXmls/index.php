<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DebitNoteXml> $debitNoteXmls
 */
?>
<div class="debitNoteXmls index content">
    <?= $this->Html->link(__('New Debit Note Xml'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Debit Note Xmls') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_debit_note_xml') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($debitNoteXmls as $debitNoteXml): ?>
                <tr>
                    <td><?= $this->Number->format($debitNoteXml->id_debit_note_xml) ?></td>
                    <td><?= $debitNoteXml->status === null ? '' : $this->Number->format($debitNoteXml->status) ?></td>
                    <td><?= h($debitNoteXml->created) ?></td>
                    <td><?= h($debitNoteXml->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $debitNoteXml->id_debit_note_xml]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $debitNoteXml->id_debit_note_xml]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $debitNoteXml->id_debit_note_xml],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $debitNoteXml->id_debit_note_xml),
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