<?php

require_once('config.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$obj = new Login();

$obj->setUsuario($login);
$obj->setSenha($senha);


$islogged = $obj->validaLogin($login, $senha);


if($islogged){

	session_start();

	$user = $obj->getUsuario();
	$id_usuario = $obj->getIdusuario();

	$_SESSION["login"] = $user;
	$_SESSION["id_usuario"] = $id_usuario;

	//header("location: index.php?user=".$user."&iduser=".$iduser);
	header("location: index.php");
}
else{

	unset($_SESSION["login"]);
	unset($_SESSION["id_usuario"]);

	header("location: login.php?login=false");
}

