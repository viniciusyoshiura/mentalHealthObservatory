<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Regulaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regulacoes index large-9 medium-8 columns content">
    <h3><?= __('Regulacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_regulacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_paciente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_solicitador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_solicitador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crm_solicitador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_avaliador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_prestador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_usuario_alteracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_usuario_cancelamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_unidade_origem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_unidade_regulacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_unidade_destino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_regulacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_reg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_reg_compl') ?></th>
                <th scope="col"><?= $this->Paginator->sort('via_direta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_transferencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cid10_diagnostico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cid10_seg_diagnostico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_solicitacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_lista_reg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_vaga_reg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_admissao_reg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_lista_hospital') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_vaga_hospital') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_internacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_cancel_solicitacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_transferencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('traumatismo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prob_respiratorios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('convulsao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('has') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gravidez') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diabetes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doenca_infecto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('msg_solicitador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('msg_avaliador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('msg_prestador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_destinatario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('em_permuta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_expiracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('liberacao_extendida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_cidade_residencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_estado_residencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_troca_posicao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regulacoes as $regulaco): ?>
            <tr>
                <td><?= $this->Number->format($regulaco->cod_regulacao) ?></td>
                <td><?= $this->Number->format($regulaco->cod_paciente) ?></td>
                <td><?= $this->Number->format($regulaco->cod_solicitador) ?></td>
                <td><?= h($regulaco->nome_solicitador) ?></td>
                <td><?= h($regulaco->crm_solicitador) ?></td>
                <td><?= $this->Number->format($regulaco->cod_avaliador) ?></td>
                <td><?= $this->Number->format($regulaco->cod_prestador) ?></td>
                <td><?= $this->Number->format($regulaco->cod_usuario_alteracao) ?></td>
                <td><?= $this->Number->format($regulaco->cod_usuario_cancelamento) ?></td>
                <td><?= $this->Number->format($regulaco->cod_unidade_origem) ?></td>
                <td><?= $this->Number->format($regulaco->cod_unidade_regulacao) ?></td>
                <td><?= $this->Number->format($regulaco->cod_unidade_destino) ?></td>
                <td><?= h($regulaco->tipo_regulacao) ?></td>
                <td><?= $this->Number->format($regulaco->status_reg) ?></td>
                <td><?= $this->Number->format($regulaco->status_reg_compl) ?></td>
                <td><?= h($regulaco->via_direta) ?></td>
                <td><?= h($regulaco->tipo_transferencia) ?></td>
                <td><?= h($regulaco->cid10_diagnostico) ?></td>
                <td><?= h($regulaco->cid10_seg_diagnostico) ?></td>
                <td><?= h($regulaco->data_solicitacao) ?></td>
                <td><?= h($regulaco->data_lista_reg) ?></td>
                <td><?= h($regulaco->data_vaga_reg) ?></td>
                <td><?= h($regulaco->data_admissao_reg) ?></td>
                <td><?= h($regulaco->data_lista_hospital) ?></td>
                <td><?= h($regulaco->data_vaga_hospital) ?></td>
                <td><?= h($regulaco->data_internacao) ?></td>
                <td><?= h($regulaco->data_cancel_solicitacao) ?></td>
                <td><?= h($regulaco->data_transferencia) ?></td>
                <td><?= h($regulaco->traumatismo) ?></td>
                <td><?= h($regulaco->prob_respiratorios) ?></td>
                <td><?= h($regulaco->avc) ?></td>
                <td><?= h($regulaco->convulsao) ?></td>
                <td><?= h($regulaco->has) ?></td>
                <td><?= h($regulaco->gravidez) ?></td>
                <td><?= h($regulaco->diabetes) ?></td>
                <td><?= h($regulaco->doenca_infecto) ?></td>
                <td><?= $this->Number->format($regulaco->msg_solicitador) ?></td>
                <td><?= $this->Number->format($regulaco->msg_avaliador) ?></td>
                <td><?= $this->Number->format($regulaco->msg_prestador) ?></td>
                <td><?= h($regulaco->tipo_destinatario) ?></td>
                <td><?= h($regulaco->em_permuta) ?></td>
                <td><?= h($regulaco->data_expiracao) ?></td>
                <td><?= h($regulaco->liberacao_extendida) ?></td>
                <td><?= $this->Number->format($regulaco->cod_cidade_residencia) ?></td>
                <td><?= $this->Number->format($regulaco->cod_estado_residencia) ?></td>
                <td><?= h($regulaco->data_troca_posicao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $regulaco->cod_regulacao]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $regulaco->cod_regulacao]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $regulaco->cod_regulacao], ['confirm' => __('Are you sure you want to delete # {0}?', $regulaco->cod_regulacao)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
