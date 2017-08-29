/*Variaveis globais das funcoes*/
var botao = document.getElementById('botao');
var formulario = document.getElementById('formulario');
var resultados = document.getElementById("resultados");
var campoPesquisa = document.getElementById("pesquisa");  
var response = "";

function responseAjax (pesquisa) {
  
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
             resultados.innerHTML = this.responseText;   

        } 
    }

        ajax.open("POST", "respostaPHP.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send("p=" + pesquisa); 

    }
}


function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "respostaPHP.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("q=" + str);   
}