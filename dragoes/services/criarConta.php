<?php

require_once('../classes/Sql.php');
require_once('../classes/Login.php');


$email = $_POST['cadastro-email'];
$name = $_POST['cadastro-name'];
$login = $_POST['cadastro-login'];
$senha = $_POST['cadastro-senha'];





if(($email !== NULL) && ($email !== "") && ($senha !== NULL) && ($senha !== "") && ($login !== NULL) && ($login !== "") && ($name !== NULL) && ($name !== "")){
	$obj = new Login();
	$obj->createAccount($name, $email, $login, $senha);
}
else{
	header("location: ../login.php?login=incomplete_data");
}


