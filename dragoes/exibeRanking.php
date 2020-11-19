<?php

require_once('config.php');

$id_usuario = $_GET['id_usuario'];

$obj = new Pontuacao();

$result = $obj->exibeRanking($id_usuario);

echo json_encode($result);