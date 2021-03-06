<?php

//Aqui neste arquivo, mostramos outras formas de se trabalhar com o Autoload

/*
USANDO A FUNCTION SPL_AUTOLOAD_REGISTER()
SPL : Standard Php Library

Podemos chamar uma funcao como parametro no spl_autolad_register(nomeDaFuncao);

Ou podemos tambem chamar uma funcao anonima, atraves da function spl_autolad_register()

Observe os exemplos abaixo que ilustram esses dois casos

*/

function incluirClasses($nomeClasse){
	if(file_exists($nomeClasse.".php") === true){
		require_once($nomeClasse.".php");	
	}
}


//Aqui chamamos uma string, que corresponde ao nome de uma function, como parametro na funcao spl_autoload_register()
spl_autoload_register("incluirClasses");


//Já neste exemplo, usamos o conceito de funcao anonima, no parametro da spl_autolad_register();
spl_autoload_register(function($nomeClasse){
	if(file_exists("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
	/* Observe que acima usamos a constante 'DIRECTORY_SEPARATOR', que serve para utilizar o caractere separador de diretorios ( / ), 
	em diferentes sistemas operacaionais. Portando DIRECTORY_SEPARATOR simula o que seria a '/' em outros sistemas operacionais */
		require_once("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php");
	}


});



$carro = new DelRey();


$carro->acelerar(80);



?>