<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internacoes index large-9 medium-8 columns content">
    <h3><?= __('Internacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_internacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_regulacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_transf_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_transf_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_transf_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_profissional') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_unid_transf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_profissional_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_prof_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crm_prof_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_internacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_internacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cid10_diagnostico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cid10_seg_diagnostico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_internacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cid10_diagnostico_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cid10_seg_diagnostico_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_prontuario_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_leito_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acompanhamento_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_resp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vinculo_resp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco_resp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone_resp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internacoes as $internaco): ?>
            <tr>
                <td><?= $this->Number->format($internaco->cod_internacao) ?></td>
                <td><?= $this->Number->format($internaco->cod_regulacao) ?></td>
                <td><?= $this->Number->format($internaco->cod_transf_1) ?></td>
                <td><?= $this->Number->format($internaco->cod_transf_2) ?></td>
                <td><?= $this->Number->format($internaco->cod_transf_alta) ?></td>
                <td><?= $this->Number->format($internaco->cod_profissional) ?></td>
                <td><?= h($internaco->nome_unid_transf) ?></td>
                <td><?= $this->Number->format($internaco->cod_profissional_alta) ?></td>
                <td><?= h($internaco->nome_prof_alta) ?></td>
                <td><?= h($internaco->crm_prof_alta) ?></td>
                <td><?= h($internaco->status_internacao) ?></td>
                <td><?= h($internaco->data_internacao) ?></td>
                <td><?= h($internaco->data_alta) ?></td>
                <td><?= h($internaco->cid10_diagnostico) ?></td>
                <td><?= h($internaco->cid10_seg_diagnostico) ?></td>
                <td><?= h($internaco->tipo_alta) ?></td>
                <td><?= h($internaco->tipo_internacao) ?></td>
                <td><?= h($internaco->cid10_diagnostico_alta) ?></td>
                <td><?= h($internaco->cid10_seg_diagnostico_alta) ?></td>
                <td><?= h($internaco->nro_prontuario_alta) ?></td>
                <td><?= h($internaco->nro_leito_alta) ?></td>
                <td><?= h($internaco->acompanhamento_alta) ?></td>
                <td><?= h($internaco->nome_resp) ?></td>
                <td><?= h($internaco->vinculo_resp) ?></td>
                <td><?= h($internaco->endereco_resp) ?></td>
                <td><?= h($internaco->telefone_resp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internaco->cod_internacao]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internaco->cod_internacao]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internaco->cod_internacao], ['confirm' => __('Are you sure you want to delete # {0}?', $internaco->cod_internacao)]) ?>
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
