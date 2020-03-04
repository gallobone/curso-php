<?php


require_once("config.php");


echo "<h1>Times</h1><br/>";

echo "<br/>";



$obj = new Times();

$obj->setNome("Dragoes de Botafogo");

echo $obj->getNome();


?>