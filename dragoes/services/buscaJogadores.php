<?php

require_once('../classes/Sql.php');
require_once('../classes/Jogadores.php');

$nome_jogador = $_POST['nome'];


$obj = new Jogadores();

$results = $obj->searchJogadores($nome_jogador);

echo json_encode($results);
//return $results;

