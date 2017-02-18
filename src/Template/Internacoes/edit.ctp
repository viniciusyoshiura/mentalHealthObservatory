<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $internaco->cod_internacao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $internaco->cod_internacao)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Internacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="internacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($internaco) ?>
    <fieldset>
        <legend><?= __('Edit Internaco') ?></legend>
        <?php
            echo $this->Form->input('cod_regulacao');
            echo $this->Form->input('cod_transf_1');
            echo $this->Form->input('cod_transf_2');
            echo $this->Form->input('cod_transf_alta');
            echo $this->Form->input('cod_profissional');
            echo $this->Form->input('nome_unid_transf');
            echo $this->Form->input('cod_profissional_alta');
            echo $this->Form->input('nome_prof_alta');
            echo $this->Form->input('crm_prof_alta');
            echo $this->Form->input('status_internacao');
            echo $this->Form->input('data_internacao', ['empty' => true]);
            echo $this->Form->input('motivo_internacao');
            echo $this->Form->input('data_alta', ['empty' => true]);
            echo $this->Form->input('cid10_diagnostico');
            echo $this->Form->input('cid10_seg_diagnostico');
            echo $this->Form->input('comorbidade');
            echo $this->Form->input('tipo_alta');
            echo $this->Form->input('tipo_internacao');
            echo $this->Form->input('motivo_transferencia');
            echo $this->Form->input('medicacao_inicial');
            echo $this->Form->input('observacoes');
            echo $this->Form->input('tratamento_internacao');
            echo $this->Form->input('exames_internacao');
            echo $this->Form->input('historia_clinica_internacao');
            echo $this->Form->input('medicacao_alta');
            echo $this->Form->input('cid10_diagnostico_alta');
            echo $this->Form->input('cid10_seg_diagnostico_alta');
            echo $this->Form->input('nro_prontuario_alta');
            echo $this->Form->input('nro_leito_alta');
            echo $this->Form->input('acompanhamento_alta');
            echo $this->Form->input('nome_resp');
            echo $this->Form->input('vinculo_resp');
            echo $this->Form->input('endereco_resp');
            echo $this->Form->input('telefone_resp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
