<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ComplementRelation $complementRelation
 * @var string[]|\Cake\Collection\CollectionInterface $invoices
 * @var string[]|\Cake\Collection\CollectionInterface $complements
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $complementRelation->id_complement_relation],
                ['confirm' => __('Are you sure you want to delete # {0}?', $complementRelation->id_complement_relation), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Complement Relations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="complementRelations form content">
            <?= $this->Form->create($complementRelation) ?>
            <fieldset>
                <legend><?= __('Edit Complement Relation') ?></legend>
                <?php
                    echo $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true]);
                    echo $this->Form->control('complement_id', ['options' => $complements, 'empty' => true]);
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
