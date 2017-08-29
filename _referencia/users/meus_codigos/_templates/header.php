<!DOCTYPE html>
<html ng-app = "ProjetoCern">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/drag-and-drop.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
	<script type="text/javascript">

	angular.module("ProjetoCern", []);
	angular.module("ProjetoCern").controller("tabela-resultados-controller", function ($scope, $http) {

		$scope.contatos = [
			{nome: "Marcelo", telefone: "981102391", data: new Date()},
			{nome: "Alessandro", telefone: "981106667", data: new Date()},
			{nome: "Carmen", telefone: "982345699", data: new Date()},
			{nome: "Paulinha", telefone: "982355647", data: new Date()}
		];

		$scope.operadoras = [
			{nome: "Vivo", codigo: 15},
			{nome: "Tim", codigo: 41},
			{nome: "Claro", codigo: 21},
			{nome: "Oi", codigo: 14}
		];

		$scope.atributosMenu = [];

		$http({
		  method: 'GET',
		  url: 'pesquisa.php'
		}).then(function successCallback(response) {
		    $scope.atributosMenu = response.data;
		  }, function errorCallback(response) {
		    $scope.message = response;
	  	});	

		$scope.AdicionarContato = function (contato) {
			$scope.contatos.push(angular.copy(contato));
			delete $scope.contato;
		}

		$scope.RemoverContato = function (contatos) {
			$scope.contatos = contatos.filter(function (contato) {
				if (!contato.selecionado) return contato;
			});
		}

		$scope.isContatoSelecionado = function (contatos) {
		 	return contatos.some(function (contato) {
				return contato.selecionado; /*Retorna verdadeiro se algum contato estiver selecionado*/
			});
		}


	});
		
	</script>
</head>
<link rel="stylesheet" type="text/css" href="../_css/template.css">
<body ng-controller = "tabela-resultados-controller">
	<div id="wraper">
			<!-- Inicio do Header principal da pagina -->
			<header>
				
				<div class="col-md-6">
					<img id="logo-minerva" src="../_images/minerva_pequena.png" draggable="true" ondragstart="drag(event)">
					<h1>Pesquisa!</h1>
				</div>

				<div class="col-md-6 lugar" style="{background-color: red; height: 50px;" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div ></div>
				</div>
			</header>
					