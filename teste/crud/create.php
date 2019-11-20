<?php

require_once("config.php");


$sql = new Usuarios();

$sql->setLogin($_POST['login']);
$sql->setSenha($_POST['senha']);

$sql->insert();

?>

<h2>Dado inseridos!</h2>
<br/>
<br/>
<a href="index.php">CONSULTAR</a>