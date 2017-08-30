<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/header.php') ?>
<!-- Header -->

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/nav.php') ?>
<!-- Menu de navegação -->

<!-- Formulário de registro -->
  <div id="page-wrapper">

    <div class="container-fluid">

      <div class="row">

          <div class="form-group col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">

          <form class="form-signup senha" action="join.php" method="POST" >

              <h2 class="form-signin-heading">Recupere sua senha</h2><hr>
              <p><input  class="form-control" type="text" name="email" id="email" placeholder="Endereço de e-mail" required ></p>
              <p><small class = "pull-left">Entre com seu e-mail para recuperar a sua senha</small></p>

              <div class="login-help recuperarSenha">
        					<a href="<?=$_SERVER['ROOT'] . "/hackathon_ufrj/hackathon_ufjr/front-end/"?>validacao_senha.php" class = "btn btn-primary">Enviar</a>
                  <a href="<?=$_SERVER['ROOT'] . "/hackathon_ufrj/hackathon_ufjr/front-end/"?>views/login.php" class = "btn btn-danger">Voltar</a>
        		  </div>

            </div>

          </form>

        </div>
        <!-- /*final registro*/ -->

      </div>
      <!-- /*row*/ -->

    </div>
    <!-- /*container*/ -->

  </div>
  <!-- page=wrapper -->

<!-- Footer -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/footer.php') ?>
