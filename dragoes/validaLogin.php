<?php

require_once('config.php');

$usuario = $_POST['login'];
$senha = $_POST['senha'];

$obj = new Login();

$obj->setUsuario($usuario);
$obj->setSenha($senha);


$islogged = $obj->validaLogin($usuario, $senha);

if($islogged){

	//session_start();
	$user = $obj->getUsuario();
	$iduser = $obj->getIdusuario();

	//$_SESSION["nome"] = $user;
	//$_SESSION["iduser"] = $iduser;

	header("location: index.php?user=".$user."&iduser=".$iduser);
}
else{

	header("location: login.php?login=false");
}

