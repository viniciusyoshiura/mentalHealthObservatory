<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internaco'), ['action' => 'edit', $internaco->cod_internacao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internaco'), ['action' => 'delete', $internaco->cod_internacao], ['confirm' => __('Are you sure you want to delete # {0}?', $internaco->cod_internacao)]) ?> </li>
        <li><?= $this->Html->link(__('List Internacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internacoes view large-9 medium-8 columns content">
    <h3><?= h($internaco->cod_internacao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Unid Transf') ?></th>
            <td><?= h($internaco->nome_unid_transf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Prof Alta') ?></th>
            <td><?= h($internaco->nome_prof_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crm Prof Alta') ?></th>
            <td><?= h($internaco->crm_prof_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cid10 Diagnostico') ?></th>
            <td><?= h($internaco->cid10_diagnostico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cid10 Seg Diagnostico') ?></th>
            <td><?= h($internaco->cid10_seg_diagnostico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Alta') ?></th>
            <td><?= h($internaco->tipo_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Internacao') ?></th>
            <td><?= h($internaco->tipo_internacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cid10 Diagnostico Alta') ?></th>
            <td><?= h($internaco->cid10_diagnostico_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cid10 Seg Diagnostico Alta') ?></th>
            <td><?= h($internaco->cid10_seg_diagnostico_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Prontuario Alta') ?></th>
            <td><?= h($internaco->nro_prontuario_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Leito Alta') ?></th>
            <td><?= h($internaco->nro_leito_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acompanhamento Alta') ?></th>
            <td><?= h($internaco->acompanhamento_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Resp') ?></th>
            <td><?= h($internaco->nome_resp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vinculo Resp') ?></th>
            <td><?= h($internaco->vinculo_resp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco Resp') ?></th>
            <td><?= h($internaco->endereco_resp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone Resp') ?></th>
            <td><?= h($internaco->telefone_resp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Internacao') ?></th>
            <td><?= $this->Number->format($internaco->cod_internacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Regulacao') ?></th>
            <td><?= $this->Number->format($internaco->cod_regulacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Transf 1') ?></th>
            <td><?= $this->Number->format($internaco->cod_transf_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Transf 2') ?></th>
            <td><?= $this->Number->format($internaco->cod_transf_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Transf Alta') ?></th>
            <td><?= $this->Number->format($internaco->cod_transf_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Profissional') ?></th>
            <td><?= $this->Number->format($internaco->cod_profissional) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Profissional Alta') ?></th>
            <td><?= $this->Number->format($internaco->cod_profissional_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Internacao') ?></th>
            <td><?= h($internaco->data_internacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Alta') ?></th>
            <td><?= h($internaco->data_alta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Internacao') ?></th>
            <td><?= $internaco->status_internacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivo Internacao') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->motivo_internacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comorbidade') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->comorbidade)); ?>
    </div>
    <div class="row">
        <h4><?= __('Motivo Transferencia') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->motivo_transferencia)); ?>
    </div>
    <div class="row">
        <h4><?= __('Medicacao Inicial') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->medicacao_inicial)); ?>
    </div>
    <div class="row">
        <h4><?= __('Observacoes') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->observacoes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tratamento Internacao') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->tratamento_internacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Exames Internacao') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->exames_internacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Historia Clinica Internacao') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->historia_clinica_internacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Medicacao Alta') ?></h4>
        <?= $this->Text->autoParagraph(h($internaco->medicacao_alta)); ?>
    </div>
</div>
