<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InvoiceXml> $invoiceXmls
 */
?>
<div class="invoiceXmls index content">
    <?= $this->Html->link(__('New Invoice Xml'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invoice Xmls') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_invoice_xml') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invoiceXmls as $invoiceXml): ?>
                <tr>
                    <td><?= $this->Number->format($invoiceXml->id_invoice_xml) ?></td>
                    <td><?= $invoiceXml->status === null ? '' : $this->Number->format($invoiceXml->status) ?></td>
                    <td><?= h($invoiceXml->created) ?></td>
                    <td><?= h($invoiceXml->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $invoiceXml->id_invoice_xml]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoiceXml->id_invoice_xml]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $invoiceXml->id_invoice_xml],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $invoiceXml->id_invoice_xml),
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