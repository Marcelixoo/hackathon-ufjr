<?php  

require_once 'vendor/autoload.php';
// Usar o namespace padrao solicitado
 use Rain\Tpl;

// config
$config = array(
 "tpl_dir" => "./",
 "cache_dir" => "cache/"
);

$tpl = new Tpl;

Tpl::configure($config); // Configuracao feita dentro da variavel acima

// create the Tpl object

// assign a variable -> nome e valor das variaveis (Uma de cada vez)
// $tpl->assign("name", "Marcelo T. dos Santos");


// assign an array
// $tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template --> .html e a extensao padrao (sempre a ultima linha do codigo)
//  
$xml=simplexml_load_file("pacientes.xml") or die("Error: Cannot create object");

$pessoais = [];
$info = [];
$novo = [];

for ($i = 0; $i < sizeof($xml); $i++) {

	foreach ($xml->children()->children() as $value) {
		$campos[] = $value->getName();
	}

	for ($j = 0; $j < sizeof($campos); $j++) {
		$pos = strpos($campos[$j], "selecionou");
		$pos2 = strpos($campos[$j], "selecinou");
		if ($pos === false && $pos2 === false) {
			if (in_array(ucfirst($campos[$j]), $pessoais)) break;
			array_push($pessoais, ucfirst($campos[$j]));
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
		$info[$k] = $novo[$k];
	}

	// echo "Logradouro paciente " . ($i + 1) . ": " . $xml->paciente[$i]->logradouro . "<hr/>";
	if (strlen($xml->paciente[$i]->logradouro) > 0) {	
		$array[] = $xml->paciente[$i]->logradouro;
	}	
}

$array = ["Contos de fadas", "Contos de fadas", "Livros academicos", "Historias infantis"];

$arrayNovo = array_unique($array);

$tpl->draw("header");
$tpl->assign("titulo1", "Dados Pessoais");
$tpl->assign("titulo2", "Testes Cl&iacute;nicos");
$tpl->assign("atributos", $arrayNovo);
$tpl->assign("info", $info);
$tpl->draw("menu");
$tpl->draw("resultados");
$tpl->draw("footer");
