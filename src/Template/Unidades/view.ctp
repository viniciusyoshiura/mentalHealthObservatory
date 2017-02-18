<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Unidade'), ['action' => 'edit', $unidade->cod_unidade]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Unidade'), ['action' => 'delete', $unidade->cod_unidade], ['confirm' => __('Are you sure you want to delete # {0}?', $unidade->cod_unidade)]) ?> </li>
        <li><?= $this->Html->link(__('List Unidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="unidades view large-9 medium-8 columns content">
    <h3><?= h($unidade->cod_unidade) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($unidade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipio') ?></th>
            <td><?= h($unidade->municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($unidade->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Regional') ?></th>
            <td><?= h($unidade->regional) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Atencao') ?></th>
            <td><?= h($unidade->tipo_atencao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Leito') ?></th>
            <td><?= h($unidade->tipo_leito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($unidade->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($unidade->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($unidade->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($unidade->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($unidade->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($unidade->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Unidade') ?></th>
            <td><?= $this->Number->format($unidade->cod_unidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hospital Vinculado') ?></th>
            <td><?= $this->Number->format($unidade->hospital_vinculado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Leitos') ?></th>
            <td><?= $this->Number->format($unidade->total_leitos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Leitos Disponiveis') ?></th>
            <td><?= $this->Number->format($unidade->leitos_disponiveis) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Telefone Fax') ?></h4>
        <?= $this->Text->autoParagraph(h($unidade->telefone_fax)); ?>
    </div>
</div>
