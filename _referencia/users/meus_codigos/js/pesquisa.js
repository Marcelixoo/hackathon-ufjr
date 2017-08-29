function exibirOpcoes()
{
	var ajax =  new XMLHttpRequest();
	ajax.onreadystatechange = function() 
	{
		if (ajax.readyState == 4)
		{
			var conteudo = JSON.parse(ajax.responseText); //cria o objeto conteudo vindo do php
			var keys = Object.keys(conteudo.opcoes); //retorna um array com as keys do objeto conteudo
			var div = document.getElementById("checkboxes");
			if(keys.length != 0)
			{
				div.innerHTML="";
				document.getElementById("botao").style.display = "block";
				var inputAll = document.createElement('input');
				var inputDesmarcar = document.createElement('input');
				var pulaLinhaAll = document.createElement('br');
				inputAll.onclick = function (){ 
					var check = document.getElementsByTagName("input");
					for (var i = 0 ; i < check.length;i++)
					{
						check[i].checked = true;
					}
				};
				inputAll.id="all";
				inputAll.type='button';
				inputAll.value="Marcar Tudo";
				div.appendChild(inputAll);
				inputDesmarcar.onclick = function (){ 
					var check = document.getElementsByTagName("input");
					for (var i = 0 ; i < check.length;i++)
					{
						check[i].checked = false;
					}
				};
				inputDesmarcar.id="dall";
				inputDesmarcar.type='button';
				inputDesmarcar.value="Desmarcar Tudo";
				div.appendChild(inputDesmarcar);
				div.appendChild(pulaLinhaAll);

				for(var i = 0; i < (keys.length); i++)
				{
					var input = document.createElement('input');
					var label = document.createElement('label');
					var pulaLinha = document.createElement('br');
					(!(conteudo.valores[i][0]))?(input.value="vazio") : (input.value = conteudo.valores[i][0]);
					input.id = conteudo.opcoes[i];
					input.class = "allchecks";
					input.name = conteudo.opcoes[i];
					input.type='checkbox';
					label.for= conteudo.opcoes[i];
					label.innerHTML = conteudo.opcoes[i];
					div.appendChild(input);
					div.appendChild(label);
					div.appendChild(pulaLinha);
				}
			}else {
				div.innerHTML = "Valor não encontrado";
				document.getElementById("botao").style.display = "none";
			}
		}
	}
	var tag = document.getElementById("cPesquisa").value;
	var valor = document.getElementById("cPesquisar").value;
	ajax.open("GET","opcoes.php?tag="+tag+"&valor="+valor);
	ajax.send(null);
}

function campoDeBusca()
{
	var texto = "<br/><label for = 'cPesquisar'>"+document.getElementById("cPesquisa").value+": </label><input id='cPesquisar' name='tPesquisar' type='text' /><button type='button' onclick='exibirOpcoes()'> OK </button>";
	if(document.getElementById("cPesquisa").value != "")
	{
		document.getElementById("dado").innerHTML = texto;			
	}else
	{
		document.getElementById("dado").innerHTML = "";			
	}
	document.getElementById("checkboxes").innerHTML = "";
	document.getElementById("botao").style.display = "none";
}

function exibirMenu()
{
 	document.getElementById("div").style.display = "block";
}
function ocultarMenu()
{
	 document.getElementById("div").style.display = "none";
}

window.onload = function ()
{
	var ajax =  new XMLHttpRequest();
	ajax.onreadystatechange = function() 
	{
		if (ajax.readyState == 4)
		{
			document.getElementById("cPesquisa").innerHTML = ajax.responseText;
		}
	}
	ajax.open("POST","buscar.php");
	ajax.send(null);	

}


		