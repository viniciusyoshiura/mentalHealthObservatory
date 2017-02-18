<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Unidades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="unidades form large-9 medium-8 columns content">
    <?= $this->Form->create($unidade) ?>
    <fieldset>
        <legend><?= __('Add Unidade') ?></legend>
        <?php
            echo $this->Form->input('hospital_vinculado');
            echo $this->Form->input('nome');
            echo $this->Form->input('municipio');
            echo $this->Form->input('uf');
            echo $this->Form->input('regional');
            echo $this->Form->input('tipo_atencao');
            echo $this->Form->input('total_leitos');
            echo $this->Form->input('leitos_disponiveis');
            echo $this->Form->input('tipo_leito');
            echo $this->Form->input('logradouro');
            echo $this->Form->input('numero');
            echo $this->Form->input('complemento');
            echo $this->Form->input('bairro');
            echo $this->Form->input('cep');
            echo $this->Form->input('telefone_fax');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
