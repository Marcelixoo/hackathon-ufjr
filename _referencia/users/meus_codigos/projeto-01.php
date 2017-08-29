<?php  

$xml = new SimpleXMLElement("pacientes.xml", 0, TRUE);

var_dump($xml->attributes();
// echo $xml->asXML() . "<br/>";

// foreach ($xml as $key => $value) {
	
// 	echo $key . "=>" . $value;	
// }
