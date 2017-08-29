<?php  
 
$xml=simplexml_load_file("../pacientes.xml") or die("Error: Cannot create object");

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

