<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/header.php') ?>
<!-- Header -->

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/nav.php') ?>
<!-- Menu de navegação -->

<!-- Formulário de registro -->
  <div id="page-wrapper">

    <div class="container-fluid">

      <div class="row">

          <div class="form-group col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">

          <form class="form-signup" action="join.php" method="POST" >

              <h2 class="form-signin-heading">Registrar</h2>

            	<p><input  class="form-control" type="text" name="usuario" placeholder="Nome" required autofocus></p>

              <p><input  class="form-control" type="text" name="email" id="email" placeholder="Endereço de e-mail" required ></p>

          		<p><input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone de contato" required></p>

              <p>
                <select class="form-control">
                  <option value="aluno">Aluno</option>
                  <option value="professor">Professor</option>
                </select>
              </p>
              <p>
                <select class="form-control">
                  <option value="default" selected default>----- Selecione seu curso -----</option>
                  <option value="eletronica">Eng. Eletrônica e de Computação</option>
                  <option value="eletrica">Eng. Elétrica</option>
                  <option value="computacao">Eng. de Computação</option>
                  <option value="civil">Eng. Civil</option>
                  <option value="nuclear">Eng. Nuclear</option>
                  <option value="quimica">Eng. Química</option>
                  <option value="bioprocessos">Eng. de Bioprocessos</option>
                  <option value="alimentos">Eng. de Alimentos</option>
                  <option value="petroleo">Eng. Petróleo</option>
                  <option value="mecanica">Eng. Mecânica</option>
                  <option value="automacao">Eng. Controle e Automação</option>
                  <option value="naval">Eng. Naval</option>
                  <option value="producao">Eng. Produção</option>
                  <option value="metalurgica">Eng. Metalúrgica</option>
                  <option value="ambiental">Eng. Ambiental</option>
                  <option value="historia">História</option>
                </select>
              </p>

              <p><input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required></p>
              <p><input type="password" class="form-control" id="confirmacaoSenha" name="confirmacaoSenha" placeholder="Confirmação de senha" required></p>

              <div class="login-help">
        					<a href="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/views/registro.php" class = "btn btn-primary">Registrar</a>
                  <a href="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/views/login.php" class = "btn btn-danger">Voltar</a>
        		  </div>

          </form>

        </div>


      </div>
      <!-- /*row*/ -->

    </div>
    <!-- /*container*/ -->

  </div>
  <!-- page=wrapper -->

<!-- Footer -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/footer.php') ?>
