<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DebitNoteRelation> $debitNoteRelations
 */
?>
<div class="debitNoteRelations index content">
    <?= $this->Html->link(__('New Debit Note Relation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Debit Note Relations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_debit_note_relation') ?></th>
                    <th><?= $this->Paginator->sort('invoice_id') ?></th>
                    <th><?= $this->Paginator->sort('debit_note_id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_relacion') ?></th>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($debitNoteRelations as $debitNoteRelation): ?>
                <tr>
                    <td><?= $this->Number->format($debitNoteRelation->id_debit_note_relation) ?></td>
                    <td><?= $debitNoteRelation->hasValue('invoice') ? $this->Html->link($debitNoteRelation->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $debitNoteRelation->invoice->id_invoice]) : '' ?></td>
                    <td><?= $debitNoteRelation->hasValue('debit_note') ? $this->Html->link($debitNoteRelation->debit_note->id_debit_note, ['controller' => 'DebitNotes', 'action' => 'view', $debitNoteRelation->debit_note->id_debit_note]) : '' ?></td>
                    <td><?= h($debitNoteRelation->tipo_relacion) ?></td>
                    <td><?= h($debitNoteRelation->uuid) ?></td>
                    <td><?= $debitNoteRelation->status === null ? '' : $this->Number->format($debitNoteRelation->status) ?></td>
                    <td><?= h($debitNoteRelation->created) ?></td>
                    <td><?= h($debitNoteRelation->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $debitNoteRelation->id_debit_note_relation]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $debitNoteRelation->id_debit_note_relation]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $debitNoteRelation->id_debit_note_relation],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $debitNoteRelation->id_debit_note_relation),
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