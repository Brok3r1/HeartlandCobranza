<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreditNoteConcept $creditNoteConcept
 * @var \Cake\Collection\CollectionInterface|string[] $creditNotes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Credit Note Concepts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="creditNoteConcepts form content">
            <?= $this->Form->create($creditNoteConcept) ?>
            <fieldset>
                <legend><?= __('Add Credit Note Concept') ?></legend>
                <?php
                    echo $this->Form->control('credit_note_id', ['options' => $creditNotes, 'empty' => true]);
                    echo $this->Form->control('clave_prod_serv');
                    echo $this->Form->control('clave_unidad');
                    echo $this->Form->control('no_identificacion');
                    echo $this->Form->control('unidad');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('valor_unitario');
                    echo $this->Form->control('cantidad');
                    echo $this->Form->control('importe');
                    echo $this->Form->control('objeto_imp');
                    echo $this->Form->control('impuesto_traslado');
                    echo $this->Form->control('impuesto_traslado_base');
                    echo $this->Form->control('impuesto_traslado_importe');
                    echo $this->Form->control('impuesto_traslado_tasa_cuota');
                    echo $this->Form->control('impuesto_traslado_tipo_factor');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
