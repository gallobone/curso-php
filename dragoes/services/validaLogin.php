<?php

//require_once('../config.php');
require_once('../classes/Sql.php');
require_once('../classes/Login.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

//use classes\Login;

$obj = new Login();

$obj->setEmail($email);
$obj->setSenha($senha);


$isLogged = $obj->validaLogin($email, $senha);


if($isLogged){

	session_start();

	$user = $obj->getUsuario();
	$id_usuario = $obj->getIdusuario();

	$_SESSION["login"] = $user;
	$_SESSION["id_usuario"] = $id_usuario;

	//header("location: index.php?user=".$user."&iduser=".$iduser);
	header("location: ../index.php");
}
else {

	//unset($_SESSION["login"]);
	//unset($_SESSION["id_usuario"]);

	header("location: ../login.php?login=false");
}

