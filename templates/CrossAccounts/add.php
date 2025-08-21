<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrossAccount $crossAccount
 * @var \Cake\Collection\CollectionInterface|string[] $crossAccountXmls
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cross Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="crossAccounts form content">
            <?= $this->Form->create($crossAccount) ?>
            <fieldset>
                <legend><?= __('Add Cross Account') ?></legend>
                <?php
                    echo $this->Form->control('cross_account_xml_id', ['options' => $crossAccountXmls, 'empty' => true]);
                    echo $this->Form->control('serie');
                    echo $this->Form->control('folio');
                    echo $this->Form->control('tipo_comprobante');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('exportacion');
                    echo $this->Form->control('lugar_expedicion');
                    echo $this->Form->control('moneda');
                    echo $this->Form->control('subtotal');
                    echo $this->Form->control('total');
                    echo $this->Form->control('emisor_nombre');
                    echo $this->Form->control('emisor_rfc');
                    echo $this->Form->control('emisor_regimen_fiscal');
                    echo $this->Form->control('receptor_nombre');
                    echo $this->Form->control('receptor_rfc');
                    echo $this->Form->control('receptor_domicilio_fiscal');
                    echo $this->Form->control('receptor_regimen_fiscal');
                    echo $this->Form->control('receptor_uso_cfdi');
                    echo $this->Form->control('cta_beneficiario');
                    echo $this->Form->control('cta_ordenante');
                    echo $this->Form->control('rfc_emisor_cta_Ben');
                    echo $this->Form->control('fecha_pago');
                    echo $this->Form->control('num_operacion');
                    echo $this->Form->control('forma_pago');
                    echo $this->Form->control('moneda_p');
                    echo $this->Form->control('tipo_cambio');
                    echo $this->Form->control('monto');
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
                    echo $this->Form->control('fecha_timbrado');
                    echo $this->Form->control('uuid');
                    echo $this->Form->control('status');
                    echo $this->Form->control('status_alien');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
