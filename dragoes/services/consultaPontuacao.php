<?php

//require_once('../config.php');
require_once('../classes/Sql.php');
require_once('../classes/Pontuacao.php');

$id_usuario = $_GET['id_usuario'];
$id_jogador = $_GET['id_jogador'];
$id_habilidade = $_GET['id_habilidade'];

$obj = new Pontuacao();

$result = $obj->consultaPontuacao($id_usuario, $id_jogador, $id_habilidade);
//json_encode($result);
//var_dump($result);
echo json_encode($result);
//echo $result;