<?php if(!class_exists('Rain\Tpl')){exit;}?>		<!-- Barra de pesquisa do usuario -->
		<div class="pesquisa" >
			<form  id="formulario" action="" method="post" onsubmit="AtualizarFormulario()">
				<input id="pesquisa" type="text" name="pesquisa" placeholder="Digite sua pesquisa aqui" onkeyup="Resposta(this.value)">
				<button id="botao" type="submit">Pesquisar</button>
			</form>	
		</div>
		<!-- Final da barra de pesquisa -->

		<!-- Menu de navegacao pelas opcoes -->
		<div class="opcoes">	
			<nav class="menu">
				<ul id="lista">
					<li><a href="#"><?php echo htmlspecialchars( $titulo1, ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
						<ul>
							<?php $counter1=-1;  if( isset($atributos) && ( is_array($atributos) || $atributos instanceof Traversable ) && sizeof($atributos) ) foreach( $atributos as $key1 => $value1 ){ $counter1++; ?>

							<li><a href="#"><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
							<?php } ?>

						</ul>
					</li>	
					<li><a href="#"><?php echo htmlspecialchars( $titulo2, ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
						<ul>
							<?php $counter1=-1;  if( isset($atributos) && ( is_array($atributos) || $atributos instanceof Traversable ) && sizeof($atributos) ) foreach( $atributos as $key1 => $value1 ){ $counter1++; ?>

							<li><a href="#"><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
							<?php } ?>

						</ul>
					</li>	
					<li><a href="#">Recursos</a>	
						<ul>
							<?php $counter1=-1;  if( isset($atributos) && ( is_array($atributos) || $atributos instanceof Traversable ) && sizeof($atributos) ) foreach( $atributos as $key1 => $value1 ){ $counter1++; ?>

							<li><a href="#"><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
							<?php } ?>

							<li><a href="#">Workshops</a></li>
							<li><a href="#">Video-Aulas</a></li>
							<li><a href="#">Consultoria</a></li>
							<li><a href="#">Desenvolvimento de sistemas</a></li>	
						</ul>
					</li>	
					<li><a href="#">Contato</a>
						<ul>
							<?php $counter1=-1;  if( isset($atributos) && ( is_array($atributos) || $atributos instanceof Traversable ) && sizeof($atributos) ) foreach( $atributos as $key1 => $value1 ){ $counter1++; ?>

							<li><a href="#"><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
							<?php } ?>

						</ul>	
					</li>
				</ul>
			</nav>
		</div>	
		<!-- Final do menu de navegacao -->
		
