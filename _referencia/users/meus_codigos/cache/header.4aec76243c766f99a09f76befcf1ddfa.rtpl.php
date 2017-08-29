<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="_css/table.css">
	<link rel="stylesheet" type="text/css" href="_css/template.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/configuracoes-tabela.js"></script>
	<script type="text/javascript" src="js/funcoes-auxiliares.js"></script>
	<script type="text/javascript" src="js/requisicao-ajax.js"></script>
	<script type="text/javascript">
	/*Variaveis globais das funcoes*/
	var botao = document.getElementById('botao');
	var formulario = document.getElementById('formulario');
	var resultados = document.getElementById("resultados");
	var campoPesquisa = document.getElementById("pesquisa");  
	var resposta;	

  	function Resposta (pesquisa) {

      if (pesquisa.length < 3) { 
        return;
        
      } else {
        
        var ajax = new XMLHttpRequest();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // resultados.appendChild(document.createTextNode(ajax.responseTXT));
                // var xml = ajax.responseXML;
                // var log = xml.getElementsByTagName("logradouro")[0].firstChild.nodeValue;
                // resultados.
                resposta = this.responseText;
                return false;

            } 
        }

            ajax.open("POST", "pesquisa.php", true);
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");;
            ajax.send("p=" + pesquisa);         
        }
    }

    var formulario = document.getElementById('formulario');
    
    AtualizarFormulario = function () {
    	document.getElementById('resultados').innerHTML = resposta;
    }
	
	</script>
</head>
<body>
	<div id="wraper">
		<!-- Inicio do Header principal da pagina -->
		<header>
			<img id="logo-minerva" src="_images/minerva_pequena.png">
			<h1>Pesquisa!</h1>
		</header>
		<!-- Final do Header -->
					