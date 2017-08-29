	// if ($_SERVER["REQUEST_METHOD"]  == "POST") {
	// 	echo "Show";
	// 	// return "<ul><li>Lista 1</li><li>Lista 1</li><li>Lista 1</li></ul>";
	// }

	
	$xml=simplexml_load_file("pacientes.xml") or die("Error: Cannot create object");

	$pessoais = [];
	$dados = [][];
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
				
				if (in_array(ucfirst($campos[$j]), $pessoais) || in_array($campos[$j], $pessoais)) break;
				
				array_push($pessoais, ucfirst($campos[$j]));
			}

		} 

		foreach ($xml->children()->children() as $paciente) {
		
			var_dump $paciente;
		
			foreach ($xml->children()->children() as $key => $value) {
				
				if ($value == "" || strlen ($value) <= 1) {
					$value = "Nao preenchido";
				}

				$dados[][ucfirst($key)] = (string) $value;
			}

		}

		foreach ($dados as $key => $value) {
			$info[] = "$key: $value";
		}

		for ($k = 0; $k < 17; $k++) {
			$novo[$k] = $info[$k];
		}
	
		// echo "Logradouro paciente " . ($i + 1) . ": " . $xml->paciente[$i]->logradouro . "<hr/>";
		if (strlen($xml->paciente[$i]->logradouro) > 0) {	
			$array[] = $xml->paciente[$i]->logradouro;
		}	
	}

	print_r($dados);	