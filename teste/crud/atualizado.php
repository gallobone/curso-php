<?php

require_once("config.php");


$getId = $_GET["id"];
$getLogin = $_GET["login"];
$getSenha = $_GET["senha"];


$obj = new Usuarios();
$obj->setLogin($getLogin);
$obj->setSenha($getSenha);

$obj->update($getId);

?>

<a href="index.php">CONSULTAR</a>