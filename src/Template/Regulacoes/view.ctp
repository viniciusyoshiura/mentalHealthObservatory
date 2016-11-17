<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Regulaco'), ['action' => 'edit', $regulaco->cod_regulacao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Regulaco'), ['action' => 'delete', $regulaco->cod_regulacao], ['confirm' => __('Are you sure you want to delete # {0}?', $regulaco->cod_regulacao)]) ?> </li>
        <li><?= $this->Html->link(__('List Regulacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regulaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regulacoes view large-9 medium-8 columns content">
    <h3><?= h($regulaco->cod_regulacao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Solicitador') ?></th>
            <td><?= h($regulaco->nome_solicitador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crm Solicitador') ?></th>
            <td><?= h($regulaco->crm_solicitador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Regulacao') ?></th>
            <td><?= h($regulaco->tipo_regulacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cid10 Diagnostico') ?></th>
            <td><?= h($regulaco->cid10_diagnostico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cid10 Seg Diagnostico') ?></th>
            <td><?= h($regulaco->cid10_seg_diagnostico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Traumatismo') ?></th>
            <td><?= h($regulaco->traumatismo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prob Respiratorios') ?></th>
            <td><?= h($regulaco->prob_respiratorios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avc') ?></th>
            <td><?= h($regulaco->avc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Convulsao') ?></th>
            <td><?= h($regulaco->convulsao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Has') ?></th>
            <td><?= h($regulaco->has) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gravidez') ?></th>
            <td><?= h($regulaco->gravidez) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diabetes') ?></th>
            <td><?= h($regulaco->diabetes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doenca Infecto') ?></th>
            <td><?= h($regulaco->doenca_infecto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Destinatario') ?></th>
            <td><?= h($regulaco->tipo_destinatario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Regulacao') ?></th>
            <td><?= $this->Number->format($regulaco->cod_regulacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Paciente') ?></th>
            <td><?= $this->Number->format($regulaco->cod_paciente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Solicitador') ?></th>
            <td><?= $this->Number->format($regulaco->cod_solicitador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Avaliador') ?></th>
            <td><?= $this->Number->format($regulaco->cod_avaliador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Prestador') ?></th>
            <td><?= $this->Number->format($regulaco->cod_prestador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Usuario Alteracao') ?></th>
            <td><?= $this->Number->format($regulaco->cod_usuario_alteracao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Usuario Cancelamento') ?></th>
            <td><?= $this->Number->format($regulaco->cod_usuario_cancelamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Unidade Origem') ?></th>
            <td><?= $this->Number->format($regulaco->cod_unidade_origem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Unidade Regulacao') ?></th>
            <td><?= $this->Number->format($regulaco->cod_unidade_regulacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Unidade Destino') ?></th>
            <td><?= $this->Number->format($regulaco->cod_unidade_destino) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Reg') ?></th>
            <td><?= $this->Number->format($regulaco->status_reg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Reg Compl') ?></th>
            <td><?= $this->Number->format($regulaco->status_reg_compl) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Msg Solicitador') ?></th>
            <td><?= $this->Number->format($regulaco->msg_solicitador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Msg Avaliador') ?></th>
            <td><?= $this->Number->format($regulaco->msg_avaliador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Msg Prestador') ?></th>
            <td><?= $this->Number->format($regulaco->msg_prestador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Cidade Residencia') ?></th>
            <td><?= $this->Number->format($regulaco->cod_cidade_residencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Estado Residencia') ?></th>
            <td><?= $this->Number->format($regulaco->cod_estado_residencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Solicitacao') ?></th>
            <td><?= h($regulaco->data_solicitacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Lista Reg') ?></th>
            <td><?= h($regulaco->data_lista_reg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Vaga Reg') ?></th>
            <td><?= h($regulaco->data_vaga_reg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Admissao Reg') ?></th>
            <td><?= h($regulaco->data_admissao_reg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Lista Hospital') ?></th>
            <td><?= h($regulaco->data_lista_hospital) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Vaga Hospital') ?></th>
            <td><?= h($regulaco->data_vaga_hospital) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Internacao') ?></th>
            <td><?= h($regulaco->data_internacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cancel Solicitacao') ?></th>
            <td><?= h($regulaco->data_cancel_solicitacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Transferencia') ?></th>
            <td><?= h($regulaco->data_transferencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Expiracao') ?></th>
            <td><?= h($regulaco->data_expiracao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Troca Posicao') ?></th>
            <td><?= h($regulaco->data_troca_posicao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Via Direta') ?></th>
            <td><?= $regulaco->via_direta ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Transferencia') ?></th>
            <td><?= $regulaco->tipo_transferencia ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Em Permuta') ?></th>
            <td><?= $regulaco->em_permuta ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liberacao Extendida') ?></th>
            <td><?= $regulaco->liberacao_extendida ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivo Solicitacao') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->motivo_solicitacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Motivo Cancelamento') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->motivo_cancelamento)); ?>
    </div>
    <div class="row">
        <h4><?= __('Motivo Cronologico') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->motivo_cronologico)); ?>
    </div>
    <div class="row">
        <h4><?= __('Motivo Prorrogacao') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->motivo_prorrogacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Medicacoes Utilizadas') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->medicacoes_utilizadas)); ?>
    </div>
    <div class="row">
        <h4><?= __('Exames Complementares') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->exames_complementares)); ?>
    </div>
    <div class="row">
        <h4><?= __('Observacoes') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->observacoes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Outras Comorbidades') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->outras_comorbidades)); ?>
    </div>
    <div class="row">
        <h4><?= __('Contato Local') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->contato_local)); ?>
    </div>
    <div class="row">
        <h4><?= __('Clinica Origem') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->clinica_origem)); ?>
    </div>
    <div class="row">
        <h4><?= __('Especialidade Medica') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->especialidade_medica)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tipo Internacao De') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->tipo_internacao_de)); ?>
    </div>
    <div class="row">
        <h4><?= __('Motivo Expiracao') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->motivo_expiracao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Motivo Troca Posicao') ?></h4>
        <?= $this->Text->autoParagraph(h($regulaco->motivo_troca_posicao)); ?>
    </div>
</div>
