<div class="jumbotron container">
  <!-- Barra de pesquisa do usuario -->
      <div class="container pesquisa" >
        <form  id="formulario" action="" method="post" onsubmit="AtualizarFormulario()">
          <input id="pesquisa" type="text" name="pesquisa" placeholder="Digite sua pesquisa aqui" onkeyup="Resposta(this.value)">
          <button id="botao" type="submit">Pesquisar</button>
        </form>
      </div>
      <!-- Final da barra de pesquisa -->

        <div class="row escolhasPesquisa"></div>

      <!-- Menu de navegacao pelas opcoes -->
      <div class="container opcoes">

          <nav class="menu">
            <ul id="lista">
              <li><a href="#">Dados Pessoais</a>
                <ul ng-repeat = "atributos in atributosMenu">
                  <li><a href="#">{{atributos}}</a></li>
                </ul>
              </li>
              <li><a href="#">Testes Clinicos</a>
                <ul>
                  <li><a href="#">{{$atributos}}</a></li>
                </ul>
              </li>
            </ul>
          </nav>
      </div>
      <!-- Final do menu de navegacao -->
  </div>
