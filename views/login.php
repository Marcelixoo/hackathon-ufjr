?>
<!-- Header -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/header.php') ?>


<div class="container-fluid">

  <div class="row">

      <div class="form-group col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">

        <form class="login" action="timeline.php" method="post">
          <h2>Entre com sua conta</h2><hr/>
          <p><input type="text" name = "usuario" class = "" placeholder="Nome" required></p>
          <p><input type="password" name = "senha" class = "" placeholder="Senha" required></p>
          <p><button class = "btn btn-info">Entrar</button></p>
          <div class="login-help">
    					<p><a href="<?=$_SERVER['ROOT'] . "/hackathon_ufrj/hackathon_ufjr/front-end/views/"?>registro.php" class = "btn btn-danger">Registrar</a></p>
              <p><a href="<?=$_SERVER['ROOT'] . "/hackathon_ufrj/hackathon_ufjr/front-end/views/"?>recuperar_senha.php" class = "btn btn-danger">Recuperar Senha</a></p>
    		  </div>
        </form>
    </div>
  </div>
</div>

<!-- Footer -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/footer.php') ?>
