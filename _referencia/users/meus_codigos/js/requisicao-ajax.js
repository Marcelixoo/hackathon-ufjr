/*Variaveis globais das funcoes*/
var botao = document.getElementById('botao');
var formulario = document.getElementById('formulario');
var resultados = document.getElementById("resultados");
var campoPesquisa = document.getElementById('pesquisa');

function showOptions (pesquisa) {
	
	  if (pesquisa.length == 0) { 
        
        resultados.appendChild(document.createTextNode(""));
        
        return;
        
	  } else {
		
		var ajax = new XMLHttpRequest();

		ajax.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				// resultados.appendChild(document.createTextNode(ajax.responseTXT));
				// var xml = ajax.responseXML;
				// var log = xml.getElementsByTagName("logradouro")[0].firstChild.nodeValue;
				// resultados.appendChild(document.createTextNode("Logradouro: " + log));
				 resultados.innerHTML = this.responseTXT;	
				alert(this.responseTXT);

			} 
		}

		ajax.open("GET", "pesquisa.php?=" + pesquisa, true);
		ajax.send();
	}
}

