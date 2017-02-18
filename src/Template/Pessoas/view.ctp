<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->cod_pessoa]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->cod_pessoa], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->cod_pessoa)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoas view large-9 medium-8 columns content">
    <h3><?= h($pessoa->cod_pessoa) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Pessoa') ?></th>
            <td><?= h($pessoa->tipo_pessoa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($pessoa->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($pessoa->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Rg') ?></th>
            <td><?= h($pessoa->nro_rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf Rg') ?></th>
            <td><?= h($pessoa->uf_rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profissao Ocupacao') ?></th>
            <td><?= h($pessoa->profissao_ocupacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($pessoa->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($pessoa->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($pessoa->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($pessoa->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($pessoa->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipio') ?></th>
            <td><?= h($pessoa->municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($pessoa->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($pessoa->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Telefone') ?></th>
            <td><?= h($pessoa->tipo_telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($pessoa->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Pessoa') ?></th>
            <td><?= $this->Number->format($pessoa->cod_pessoa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cadastro') ?></th>
            <td><?= h($pessoa->data_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nascimento') ?></th>
            <td><?= h($pessoa->data_nascimento) ?></td>
        </tr>
    </table>
</div>
