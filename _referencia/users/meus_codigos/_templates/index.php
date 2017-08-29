<?php require_once '../../includes/header.php';		?>

		<!-- Barra de pesquisa do usuario -->
		<div class="pesquisa" >
			<form  id="formulario" action="" method="post" onsubmit="AtualizarFormulario()">
				<input id="pesquisa" type="text" name="pesquisa" placeholder="Digite sua pesquisa aqui" onkeyup="Resposta(this.value)">
				<button id="botao" type="submit">Pesquisar</button>
			</form>
		</div>
		<!-- Final da barra de pesquisa -->

		<div class="container">
			<div class="row escolhasPesquisa"></div>
		</div>


		<!-- Menu de navegacao pelas opcoes -->
		<div class="opcoes">
			<nav class="menu">
				<ul id="lista">
					<li><a href="#">Dados Pessoais</a>
						<ul ng-repeat = "atributos in atributosMenu">
							<li><a href="#">{{atributos}}</a></li>
						</ul>
					</li>
					<li><a href="#">Testes Clinicos</a>
						<ul>
							<li><a href="#">{{$atributos}}</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<!-- Final do menu de navegacao -->
		<script type="text/javascript" src="../js/drag-and-drop.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
		<?php

		 require_once 'resultados.php';
		 require_once 'footer.php';

		 ?>
