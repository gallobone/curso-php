<?php


spl_autoload_register(function($class_name){

	//Abaixo a variável $filename traz o PATH do arquivo("classe php") que será carregado na pagina index.php
	$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

	if(file_exists(($filename))) {
		require_once($filename);
	}


});



?>