<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CreditNoteRelation> $creditNoteRelations
 */
?>
<div class="creditNoteRelations index content">
    <?= $this->Html->link(__('New Credit Note Relation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Credit Note Relations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_credit_note_relation') ?></th>
                    <th><?= $this->Paginator->sort('invoice_id') ?></th>
                    <th><?= $this->Paginator->sort('credit_note_id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_relacion') ?></th>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($creditNoteRelations as $creditNoteRelation): ?>
                <tr>
                    <td><?= $this->Number->format($creditNoteRelation->id_credit_note_relation) ?></td>
                    <td><?= $creditNoteRelation->hasValue('invoice') ? $this->Html->link($creditNoteRelation->invoice->id_invoice, ['controller' => 'Invoices', 'action' => 'view', $creditNoteRelation->invoice->id_invoice]) : '' ?></td>
                    <td><?= $creditNoteRelation->hasValue('credit_note') ? $this->Html->link($creditNoteRelation->credit_note->id_credit_note, ['controller' => 'CreditNotes', 'action' => 'view', $creditNoteRelation->credit_note->id_credit_note]) : '' ?></td>
                    <td><?= h($creditNoteRelation->tipo_relacion) ?></td>
                    <td><?= h($creditNoteRelation->uuid) ?></td>
                    <td><?= $creditNoteRelation->status === null ? '' : $this->Number->format($creditNoteRelation->status) ?></td>
                    <td><?= h($creditNoteRelation->created) ?></td>
                    <td><?= h($creditNoteRelation->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $creditNoteRelation->id_credit_note_relation]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creditNoteRelation->id_credit_note_relation]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $creditNoteRelation->id_credit_note_relation],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $creditNoteRelation->id_credit_note_relation),
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