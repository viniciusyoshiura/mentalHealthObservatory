<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoas index large-9 medium-8 columns content">
    <h3><?= __('Pessoas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_pessoa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_pessoa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf_rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profissao_ocupacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoas as $pessoa): ?>
            <tr>
                <td><?= $this->Number->format($pessoa->cod_pessoa) ?></td>
                <td><?= h($pessoa->tipo_pessoa) ?></td>
                <td><?= h($pessoa->data_cadastro) ?></td>
                <td><?= h($pessoa->nome) ?></td>
                <td><?= h($pessoa->sexo) ?></td>
                <td><?= h($pessoa->cpf) ?></td>
                <td><?= h($pessoa->nro_rg) ?></td>
                <td><?= h($pessoa->uf_rg) ?></td>
                <td><?= h($pessoa->data_nascimento) ?></td>
                <td><?= h($pessoa->profissao_ocupacao) ?></td>
                <td><?= h($pessoa->logradouro) ?></td>
                <td><?= h($pessoa->numero) ?></td>
                <td><?= h($pessoa->complemento) ?></td>
                <td><?= h($pessoa->bairro) ?></td>
                <td><?= h($pessoa->uf) ?></td>
                <td><?= h($pessoa->municipio) ?></td>
                <td><?= h($pessoa->cep) ?></td>
                <td><?= h($pessoa->telefone) ?></td>
                <td><?= h($pessoa->tipo_telefone) ?></td>
                <td><?= h($pessoa->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->cod_pessoa]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->cod_pessoa]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->cod_pessoa], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->cod_pessoa)]) ?>
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
