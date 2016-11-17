<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pessoa->cod_pessoa],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->cod_pessoa)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pessoas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Edit Pessoa') ?></legend>
        <?php
            echo $this->Form->input('tipo_pessoa');
            echo $this->Form->input('data_cadastro');
            echo $this->Form->input('nome');
            echo $this->Form->input('sexo');
            echo $this->Form->input('cpf');
            echo $this->Form->input('nro_rg');
            echo $this->Form->input('uf_rg');
            echo $this->Form->input('data_nascimento', ['empty' => true]);
            echo $this->Form->input('profissao_ocupacao');
            echo $this->Form->input('logradouro');
            echo $this->Form->input('numero');
            echo $this->Form->input('complemento');
            echo $this->Form->input('bairro');
            echo $this->Form->input('uf');
            echo $this->Form->input('municipio');
            echo $this->Form->input('cep');
            echo $this->Form->input('telefone');
            echo $this->Form->input('tipo_telefone');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
