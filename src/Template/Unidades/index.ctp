<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Unidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="unidades index large-9 medium-8 columns content">
    <h3><?= __('Unidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_unidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hospital_vinculado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regional') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_atencao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_leitos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('leitos_disponiveis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_leito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($unidades as $unidade): ?>
            <tr>
                <td><?= $this->Number->format($unidade->cod_unidade) ?></td>
                <td><?= $this->Number->format($unidade->hospital_vinculado) ?></td>
                <td><?= h($unidade->nome) ?></td>
                <td><?= h($unidade->municipio) ?></td>
                <td><?= h($unidade->uf) ?></td>
                <td><?= h($unidade->regional) ?></td>
                <td><?= h($unidade->tipo_atencao) ?></td>
                <td><?= $this->Number->format($unidade->total_leitos) ?></td>
                <td><?= $this->Number->format($unidade->leitos_disponiveis) ?></td>
                <td><?= h($unidade->tipo_leito) ?></td>
                <td><?= h($unidade->logradouro) ?></td>
                <td><?= h($unidade->numero) ?></td>
                <td><?= h($unidade->complemento) ?></td>
                <td><?= h($unidade->bairro) ?></td>
                <td><?= h($unidade->cep) ?></td>
                <td><?= h($unidade->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $unidade->cod_unidade]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unidade->cod_unidade]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unidade->cod_unidade], ['confirm' => __('Are you sure you want to delete # {0}?', $unidade->cod_unidade)]) ?>
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
