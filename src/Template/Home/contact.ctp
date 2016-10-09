<section class="content-header">
      <h1>Formulário de Contato</h1>
      <ol class="breadcrumb">
        <li><a href="/mentalHealthObservatory/home"></i> OSM</a></li>
        <li class="active">Contato</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <label for="email">E-mail</label>	
                  <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                </div>
                <div class="form-group">
                  <label for="name">Nome</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                  <label for="subject">Assunto</label>
                  <input type="text" class="form-control" id="subject" placeholder="Assunto">
                </div>
                <div>
                  <label for="message">Mensagem</label>	
                  <textarea class="textarea" id="message" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <?php
              		echo $this->Html->link(
    					'Voltar',
    					array('controller' => 'home', 'action' => 'index'),
    					array('confirm' => 'Tem certeza que deseja voltar?', 'class' => 'btn btn-warning pull-left'));
               	?>	
              <button type="button" class="pull-right btn btn-primary" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>


    </section>