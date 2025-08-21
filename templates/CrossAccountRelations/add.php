<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrossAccountRelation $crossAccountRelation
 * @var \Cake\Collection\CollectionInterface|string[] $invoices
 * @var \Cake\Collection\CollectionInterface|string[] $crossAccounts
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cross Account Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="crossAccountRelations form content">
            <?= $this->Form->create($crossAccountRelation) ?>
            <fieldset>
                <legend><?= __('Add Cross Account Relation') ?></legend>
                <?php
                    echo $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true]);
                    echo $this->Form->control('cross_account_id', ['options' => $crossAccounts, 'empty' => true]);
                    echo $this->Form->control('serie');
                    echo $this->Form->control('folio');
                    echo $this->Form->control('uuid');
                    echo $this->Form->control('moneda');
                    echo $this->Form->control('equivalencia');
                    echo $this->Form->control('num_parcialidad');
                    echo $this->Form->control('imp_pagado');
                    echo $this->Form->control('imp_saldo_ant');
                    echo $this->Form->control('imp_saldo_insoluto');
                    echo $this->Form->control('objeto_imp');
                    echo $this->Form->control('impuesto_traslado0');
                    echo $this->Form->control('impuesto_traslado_base0');
                    echo $this->Form->control('impuesto_traslado_importe0');
                    echo $this->Form->control('impuesto_traslado_tasa_cuota0');
                    echo $this->Form->control('impuesto_traslado_tipo_factor0');
                    echo $this->Form->control('impuesto_traslado1');
                    echo $this->Form->control('impuesto_traslado_base1');
                    echo $this->Form->control('impuesto_traslado_importe1');
                    echo $this->Form->control('impuesto_traslado_tasa_cuota1');
                    echo $this->Form->control('impuesto_traslado_tipo_factor1');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
