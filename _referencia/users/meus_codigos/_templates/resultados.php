		<!-- Filtros de pesquisa -->

		<!-- Filtros de pesquisa -->

		<!-- Template dos resultados da pesquisa -->
		<div id="resultados" class="container resultados" data-ng-controller="tabela-resultados-controller">
			
			<table class = "table table-striped" ng-show = "contatos.length > 0">
			
				<thead>
					<tr>
						<th></th>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Operadora</th>
						<th>Data</th>
					</tr>
				</thead>
	
				<tbody>
					
					<tr ng-class = "{selecionado: contato.selecionado}" ng-repeat = "contato in contatos | filter: busca">
						<td><input type="checkbox" ng-model = "contato.selecionado"></td>
						<td>{{contato.nome}}</td>
						<td>{{contato.telefone}}</td>
						<td>{{contato.operadora.nome}}</td>
						<td>{{contato.data | date: ' dd MMM yyyy'}}</td>
					</tr>
				
				</tbody>
			
			</table>
		</div> <!-- Fim dos resultados -->
	</div>
	<!-- Wraper section end -->
     
