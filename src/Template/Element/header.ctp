<!-- Main Header -->
  <style>
   span{
    font-size: 10pt;

   } 
  </style>
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>OSM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Observatório de Saúde Mental</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

        
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
          
                <li>
                    <a href="/mentalHealthObservatory/home">Início</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quem Somos<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/mentalHealthObservatory/home/team">Equipe OSM</a></li>
                        <li class="divider"></li>
                        <li><a href="/mentalHealthObservatory/home/contact">Contato</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Histórico<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/mentalHealthObservatory/home/historyosm">OSM</a></li>
                        <li class="divider"></li>
                        <li><a href="/mentalHealthObservatory/home/historyorah">ORAH</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Notícias</a>
                </li>
                <li>
                    <a href="#">Publicações</a>
                </li>
            </ul>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
      <!--<div class="collapse navbar-collapse" id="navbar-collapse">-->
            

          <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <?php echo $this->Html->image('domingosAlves.gif', array('alt' => 'User Image', 'class' => 'user-image')); ?>
         
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Domingos Alves</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <?php echo $this->Html->image('domingosAlves.gif', array('alt' => 'User Image', 'class' => 'img-circle')); ?>

                <p>
                  Domingos Alves - Docente
                 <small>Departamento de Medicina Social FMRP - USP</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row pull-right">
                  <div class="col-xs-4 text-center">
                    <a href="#">Seguidores</a>
                    <span class="label label-success">232</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Amigos</a>
                    <span class="label label-warning">399</span>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>