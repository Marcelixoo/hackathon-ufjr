<?php
// Variável 'rota' para redirecionamento das páginas
if ($rota) {
  $rota = $_GET['rota'];
} else {
  $rota = "login";
}

require_once ("views/" . $rota . ".php");
