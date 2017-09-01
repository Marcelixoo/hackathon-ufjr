<!-- Header -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/header.php') ?>

<!-- Menu de navegação -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/nav.php') ?>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/views/sort.php') ?>

<div id="page-wrapper">

  <div class="container-fluid">

      <div class="row">

      	<div class="col-xs-3 col-md-3" id = "dadosUsuario">
					<!-- <p><img src="https://www.gravatar.com/avatar/b6d1eb97f0791fa78c4541e1637e3749?s=120&d=mm&r=pg" class="img-thumbnail imagem" alt="Generic placeholder thumbnail"></p> -->
					<p><img src="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/imagens/default-user-image.png" class="img-thumbnail imagem" alt="Generic placeholder thumbnail"></p>
					<p><a href="user_settings.php" class="btn btn-primary">Dados Pessoais</a></p>
					<p><a class="btn btn-primary " href="profile.php?id=3" role="button">Perfil Público</a></p>
					<p><a class="btn btn-primary " href="view_all_users.php" role="button">Mostrar todos</a></p>
				</div>
				<div class="col-xs-9 col-md-6 col-lg-offset-3 col-md-offset-3 timelinePosts">
						<button class = "btn btn-danger atualizarFeed">Clique aqui para atualizar o feed</button>
						<hr>
            <?php foreach ($novo as $pub) { $tags = implode(', ', $pub["tags"]);?>
            <!-- Início do post -->
            <a class="post" href="views/_join.php">
  						<div class="row post">
  							<center><h3><?=$pub["titulo"]?></h3></center>
  							<div class="col-xs-4 col-md-3">
                  <div>
                    <p><img src="<?=$_SERVER['ROOT']?>/hackathon_ufrj/hackathon_ufjr/front-end/imagens/hackathon.png" class="img-thumbnail posts imagem" alt="Generic placeholder thumbnail"></p>
                  </div>
                  <p><center><?=$pub["curso"]?></center></p>
  							</div>
  							<div class="col-xs-8 col-md-9">
                  <div class = "descricao">
                    <p><?=$pub["descricao"]?></p>
                  </div>
                  <div class="rodapezinho">
                    <p><?=$tags?></p>
                    <p><small class="pull-left"><b>Local:</b> <?=$pub["local"]?></small>
    								<small class="pull-right"><?=$pub["data"]?></small></p>
                  </div>
                </div>
  							<hr>
  						</div>
            </a>
            <!-- Fim do post -->
            <hr>
          <?php }?>
				</div>

    </div> <!-- Row -->

	</div> <!-- /container -->

</div> <!-- /#page-wrapper -->

<!-- Footer -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/hackathon_ufrj/hackathon_ufjr/front-end/includes/footer.php') ?>
