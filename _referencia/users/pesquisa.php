<?php require_once 'init.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/header.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/navigation.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/search.php'; ?>
<?php
 // 	Recuperar informações do arquivo XML --> fonte de dados
	$xml=simplexml_load_file($abs_us_root.$us_url_root."users/src/pacientes.xml") or die("Error: Cannot create object");

	$atributosPessoais = [];
	$informacoesResultados = [];
	$novo = [];
	$words = [];

	for ($i = 0; $i < sizeof($xml); $i++) {

		foreach ($xml->children()->children() as $value) {
			$campos[] = $value->getName();
		}

		for ($j = 0; $j < sizeof($campos); $j++) {
			$pos = strpos($campos[$j], "selecionou");
			$pos2 = strpos($campos[$j], "selecinou");
			if ($pos === false && $pos2 === false) {

				if (in_array(ucfirst($campos[$j]), $atributosPessoais)) break;

				array_push($atributosPessoais, ucfirst($campos[$j]));
			}
		}


		foreach ($xml->children()->children() as $key => $value) {

			if ($value == "" || strlen ($value) <= 1) {
				$value = "Nao preenchido";
			}

			$dados[ucfirst($key)] = (string) $value;
		}

		foreach ($dados as $key => $value) {
			$novo[] = "$key: $value";
		}

		for ($k = 0; $k < 5; $k++) {
			$informacoesResultados[$k] = $novo[$k];
		}

		// echo "Logradouro paciente " . ($i + 1) . ": " . $xml->paciente[$i]->logradouro . "<hr/>";
		if (strlen($xml->paciente[$i]->logradouro) > 0) {
			$array[] = $xml->paciente[$i]->logradouro;
		}
	}

	$array = ["Contos de fadas", "Contos de fadas", "Livros academicos", "Historias infantis"];

	echo json_encode($atributosPessoais);

?>

	<div class="container container-fluid" id="exibicaoResultados">
		<div class="row">
			 <div class="allutable table-responsive">
				<table class='table table-hover table-list-search'>
					<thead>
						<tr>
					  	<th><div class="alluinfo">&nbsp;</div></th>
					  	<th>Username</th>
					 	</tr>
					</thead>
				 	<tbody>
					<?php
					//Cycle through users
					$count = 0; /*Variável salvadora da pátria!*/
					foreach ($users as $v1) {

						$ususername = ucfirst($v1->username);
						$ususerbio = ucfirst($v1->bio);
						$grav = get_gravatar(strtolower(trim($v1->email)));
						$useravatar = '<img src="'.$grav.'" class="img-responsive img-thumbnail" alt="'.$ususername.'">';
					?>
						<tr>
							<td>
								<a href="profile.php?id=<?=$v1->id?>"><?php echo $useravatar;?></a>
							</td>
						  <td>
								<h4><a href="profile.php?id=<?=$v1->id?>"><?=$ususername?><a class="btn btn-danger botoesMensagem pull-right" href="create_message.php?id=<?=$v1->id?>">Message</a></a></h4>
								<p><?=$ususerbio?></p>
								<p><b>Group(s):</b> <?=$groupName?></p>
							</td>
						</tr>
					<?php $count++; } ?>
				  </tbody>
				</table>

			</div>
			<!-- Final da table -->

		</div>
		<!-- Final da Row -->

	</div>
	<!-- Final da div container -->



	<div class="rodape">
<!-- Fim dos Scripts do angular -->
	<!-- footers -->
	<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

	</div>

	<!-- Place any per-page javascript here -->

	<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
