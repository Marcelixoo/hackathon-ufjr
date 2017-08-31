<!-- Navigation -->
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
    <!-- Grupo de funções drop -->
    <div class="navbar-header ">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-top-menu-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse navbar-top-menu-collapse navbar-right menuzinho">
      <ul class="nav navbar-nav center-text">
          <li><a href="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/views/timeline.php"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/views/login.php" class=""><i class="fa fa-sign-in"></i> Login</a></li>
          <li><a href="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/views/register.php" class=""><i class="fa fa-plus-square"></i> Registrar</a></li>
          <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-life-ring"></i> Ajuda <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/views/recuperar_senha.php"><i class="fa fa-wrench"></i> Recuperar Senha</a></li>
              <li><a href="<?=$_SERVER['ROOT']?>/cursos/user_spice_framework/users/verify_resend.php"><i class="fa fa-exclamation-triangle"></i> Reenviar validação de e-mail</a></li>
            </ul>
          </li>
      </ul> <!-- End of UL for navigation link list -->
    </div> <!-- End of Div for right side navigation list -->

    <ul class="nav navbar-nav logo">
      <img src="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/imagens/logo.png" alt="Logo">
    </ul>

    <!-- Ícone lado esquerdo -->
    <!-- <ul class="nav navbar-nav ">
      <li><a href="/hackathon_ufrj/hackathon_ufjr/front-end/views/timeline.php"><i class="fa fa-home"></i> Home</a></li>
    </ul> -->
</div>
<!-- End left navigation items -->

</div> <!-- End of Div for navigation bar -->
</div> <!-- End of Div for navigation bar styling -->
