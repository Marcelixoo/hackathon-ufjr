<?php
// Pega os valores de interesse do usuário

  $dados = $_POST['name'];
  $dados = preg_replace('/\s+/', ' ', $dados);
  $dados = trim ($dados);
  $interesses = [];
  $interesses = explode (' ', $dados);

  require_once ('sort.php');

  require_once ('timeline.php');

  // var_dump ($interesses);
  // echo $dados;
  // $interesses = ["#Artes", "#Jogos", "#Tecnologia"];
