<?php

require_once('config.php');

$usuario = $_GET['usuario'];
$senha = $_GET['senha'];

$obj = new Login();

$obj->setUsuario($usuario);
$obj->setSenha($senha);


$obj->validaLogin($usuario, $senha);


?>