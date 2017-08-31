<?php

$param = [
  [
    "titulo"=> "Aula de Francês com o Francisco",
    "descricao"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quis non reiciendis suscipit dolorem tenetur quaerat voluptas voluptatum, inventore consequatur sequi rem, saepe perferendis quod asperiores labore soluta ducimus architecto.",
    "curso"=> "Eletrônica",
    "tags"=> ["#Artes", "#Jogos"],
    "local"=> "Praia do mamão",
    "data"=> "Ontem",
    "nota"=> 0
  ],
  [
    "titulo"=> "Hackathon UFRJ",
    "descricao"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, porro, distinctio! Quibusdam ratione sunt accusamus a sequi qui quas quisquam ea voluptates molestiae voluptas debitis cumque temporibus quam, amet architecto.",
    "curso"=> "Engenharia Eletrônica",
    "tags"=> ["#Tecnologia", "#Computação", "#MeioAmbiente", "#Voluntariado"],
    "local"=> "Auditório Congelante",
    "data"=> "Hoje",
    "nota"=> 0
  ],
  [
    "titulo"=> "Venda de Lagartixa no Corredor",
    "descricao"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, porro, distinctio! Quibusdam ratione sunt accusamus a sequi qui quas quisquam ea voluptates molestiae voluptas debitis cumque temporibus quam, amet architecto.",
    "curso"=> "Engenharia Ambiental",
    "tags"=> ["#MeioAmbiente"],
    "local"=> "Corredor ué",
    "data"=> "Amanhã",
    "nota"=> 0
  ],
  [
    "titulo"=> "Musculação Braba na Decania",
    "descricao"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, porro, distinctio! Quibusdam ratione sunt accusamus a sequi qui quas quisquam ea voluptates molestiae voluptas debitis cumque temporibus quam, amet architecto.",
    "curso"=> "Engenharia Mecânica",
    "tags"=> ["#Esportes"],
    "local"=> "Academia do Guarujá",
    "data"=> "01/11/2017",
    "nota"=> 0
  ],
  [
    "titulo"=> "Semana da Anistia - Eu, sua mãe e tua tia",
    "descricao"=> "Desaparecidos, onde estão? Caminhada e panfletagem sobre a campanha OCUPA DOPS!",
    "curso"=> "Direito",
    "tags"=> ["#Militância", "#Debate", "#Voluntariado", "#Palestras"],
    "local"=> "FND",
    "data"=> "02/09/2017",
    "nota"=> 0
  ],
  [
    "titulo"=> "Mutirão da doação de sangue",
    "descricao"=> "Venha doar sangue e salvar vidas!",
    "curso"=> "Enfermagem",
    "tags"=> ["#Voluntariado", "#Saúde"],
    "local"=> "Hospital Universitário",
    "data"=> "Hoje",
    "nota"=> 0
  ],
  [
    "titulo"=> "Mostra fotográfica dos Esportes Olímpicos",
    "descricao"=> "Os alunos de Comunicação Social apresentam uma mostra fotográfica com os melhores registros das olimpíadas Rio 2016",
    "curso"=> "Comunicação Social",
    "tags"=> ["#Esportes", "#Artes"],
    "local"=> "ECO",
    "data"=> "23/11/2017",
    "nota"=> 0
  ],
  [
    "titulo"=> "Encontro Brasil - EUA",
    "descricao"=> "Apresentação da cultura americana e divulgação de oportunidades nos EUA",
    "curso"=> "Letras",
    "tags"=> ["#Intercâmbio", "#Linguagens", "#Palestras"],
    "local"=> "Prédio de Letras",
    "data"=> "14/09/2017",
    "nota"=> 0
  ],
  [
    "titulo"=> "Pelada de domingo",
    "descricao"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptas dignissimos, enim id assumenda soluta perspiciatis ea ipsam accusamus pariatur eum, at suscipit deserunt veritatis iste reprehenderit, perferendis praesentium distinctio.",
    "curso"=> "Mecânica",
    "tags"=> ["#Esportes"],
    "local"=> "Grêmio da COPPE",
    "data"=> "Domingo",
    "nota"=> 0
  ]
];

// $interesses = ["#Artes", "#Jogos", "#Tecnologia"];

if (!isset($interesses)) {
  $interesses = [];
}

$novo = [];

foreach ($param as $post) {
  for ($k = 0, $max = count($interesses); $k < $max; $k++) {
    $teste = in_array($interesses[$k], $post['tags']);
    if ($teste) {
      $post['nota'] += 30;
    }

    // if ($post['curso'] == $user['curso']) {
    //   $post['nota'] += 60;
    // }

  }
  $novo[] = $post;
}

// var_dump ($novo);

// var_dump ordenarPosts($vetorAleatorio);
$aux = [];
for ($i = 0, $max = count($novo); $i < $max; $i++) {

  for ($j = 0; $j < ($max - 1); $j++) {
    if ($novo[$j + 1]["nota"] > $novo[$j]["nota"]) {
      $aux = $novo[$j];
      $novo[$j] = $novo[$j + 1];
      $novo[$j + 1] = $aux;
    } /*fim do IF*/
  }
} /*Fim do sort*/

var_dump ($interesses);
// print_r ($novo);
