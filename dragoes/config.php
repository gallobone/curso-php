<?php

//Configs

//Automatiza dinamicamente a inclusao dos arquivos de classes que contem no diretorio 'class'

//Abaixo estamos usando o conceito de funcao anonima, que neste caso é o parametro na funcao spl_autoload_register();
//PS: spl_autoload_register() vai ler TODOS os arquivos que estao no diretorio class e inseri-los.
spl_autoload_register(function($className){

	//Abaixo a variável $filename traz o PATH do arquivo("classe php") que será carregado na pagina index.php
	//$filepath = "..".DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR. $className. ".php";
	$filepath = "classes".DIRECTORY_SEPARATOR. $className. ".php";

	if( file_exists($filepath) ) {
		require_once($filepath);
	}
	
});

