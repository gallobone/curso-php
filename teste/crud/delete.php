<?php


require_once("config.php");


$get = $_GET["id"];

$obj = new Usuarios();
$obj->delete($get);

?>

<a href="index.php">CONSULTAR</a>