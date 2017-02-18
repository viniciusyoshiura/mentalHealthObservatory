<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cidade index large-9 medium-8 columns content">
    <h3><?= __('Cidade') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('estado_cod_estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cidade as $cidade): ?>
            <tr>
                <td><?= $this->Number->format($cidade->estado_cod_estado) ?></td>
                <td><?= $this->Number->format($cidade->cod_cidade) ?></td>
                <td><?= h($cidade->nome) ?></td>
                <td><?= h($cidade->cep) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cidade->cod_cidade]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cidade->cod_cidade]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cidade->cod_cidade], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->cod_cidade)]) ?>
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
