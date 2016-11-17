<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cidade'), ['action' => 'edit', $cidade->cod_cidade]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cidade'), ['action' => 'delete', $cidade->cod_cidade], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->cod_cidade)]) ?> </li>
        <li><?= $this->Html->link(__('List Cidade'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cidade view large-9 medium-8 columns content">
    <h3><?= h($cidade->cod_cidade) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cidade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($cidade->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Cod Estado') ?></th>
            <td><?= $this->Number->format($cidade->estado_cod_estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Cidade') ?></th>
            <td><?= $this->Number->format($cidade->cod_cidade) ?></td>
        </tr>
    </table>
</div>
