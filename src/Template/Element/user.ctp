<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
       aria-expanded="false">
        <i class="glyphicon glyphicon-user"></i>
        <?= $this->request->session()->read('Auth.User.username'); ?>
         <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><?= $this->Html->link('<i class="fa fa-sign-out"></i> '.__('Sair'),['controller'=>'users','action'=>'logout'],['escape'=>false]) ?></li>
    </ul>
</li>