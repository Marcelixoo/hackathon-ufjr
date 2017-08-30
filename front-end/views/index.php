<?php
// Variável 'rota' para redirecionamento das páginas
$rota = $_GET['rota'];

require_once ($rota . ".php");
