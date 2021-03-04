<?php

//header('content-type: application/json');

require_once('../classes/Sql.php');
require_once('../classes/Jogadores.php');

$nome_jogador = $_GET['nome'];

//utf8_decode($nome_jogador);
//var_dump($nome_jogador);


$obj = new Jogadores();

$results = $obj->searchJogadores($nome_jogador);

echo json_encode($results);

//echo json_encode($results);
//return $results;

