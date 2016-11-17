<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $regulaco->cod_regulacao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $regulaco->cod_regulacao)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Regulacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="regulacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($regulaco) ?>
    <fieldset>
        <legend><?= __('Edit Regulaco') ?></legend>
        <?php
            echo $this->Form->input('cod_paciente');
            echo $this->Form->input('cod_solicitador');
            echo $this->Form->input('nome_solicitador');
            echo $this->Form->input('crm_solicitador');
            echo $this->Form->input('cod_avaliador');
            echo $this->Form->input('cod_prestador');
            echo $this->Form->input('cod_usuario_alteracao');
            echo $this->Form->input('cod_usuario_cancelamento');
            echo $this->Form->input('cod_unidade_origem');
            echo $this->Form->input('cod_unidade_regulacao');
            echo $this->Form->input('cod_unidade_destino');
            echo $this->Form->input('tipo_regulacao');
            echo $this->Form->input('status_reg');
            echo $this->Form->input('status_reg_compl');
            echo $this->Form->input('via_direta');
            echo $this->Form->input('tipo_transferencia');
            echo $this->Form->input('motivo_solicitacao');
            echo $this->Form->input('motivo_cancelamento');
            echo $this->Form->input('motivo_cronologico');
            echo $this->Form->input('motivo_prorrogacao');
            echo $this->Form->input('medicacoes_utilizadas');
            echo $this->Form->input('exames_complementares');
            echo $this->Form->input('cid10_diagnostico');
            echo $this->Form->input('cid10_seg_diagnostico');
            echo $this->Form->input('data_solicitacao', ['empty' => true]);
            echo $this->Form->input('data_lista_reg', ['empty' => true]);
            echo $this->Form->input('data_vaga_reg', ['empty' => true]);
            echo $this->Form->input('data_admissao_reg', ['empty' => true]);
            echo $this->Form->input('data_lista_hospital', ['empty' => true]);
            echo $this->Form->input('data_vaga_hospital', ['empty' => true]);
            echo $this->Form->input('data_internacao', ['empty' => true]);
            echo $this->Form->input('data_cancel_solicitacao', ['empty' => true]);
            echo $this->Form->input('data_transferencia', ['empty' => true]);
            echo $this->Form->input('observacoes');
            echo $this->Form->input('traumatismo');
            echo $this->Form->input('prob_respiratorios');
            echo $this->Form->input('avc');
            echo $this->Form->input('convulsao');
            echo $this->Form->input('has');
            echo $this->Form->input('gravidez');
            echo $this->Form->input('diabetes');
            echo $this->Form->input('doenca_infecto');
            echo $this->Form->input('outras_comorbidades');
            echo $this->Form->input('contato_local');
            echo $this->Form->input('msg_solicitador');
            echo $this->Form->input('msg_avaliador');
            echo $this->Form->input('msg_prestador');
            echo $this->Form->input('tipo_destinatario');
            echo $this->Form->input('em_permuta');
            echo $this->Form->input('clinica_origem');
            echo $this->Form->input('especialidade_medica');
            echo $this->Form->input('tipo_internacao_de');
            echo $this->Form->input('data_expiracao', ['empty' => true]);
            echo $this->Form->input('liberacao_extendida');
            echo $this->Form->input('motivo_expiracao');
            echo $this->Form->input('cod_cidade_residencia');
            echo $this->Form->input('cod_estado_residencia');
            echo $this->Form->input('data_troca_posicao', ['empty' => true]);
            echo $this->Form->input('motivo_troca_posicao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
