<?php


//Usando o MÉTODO MÁGICO AUTOLOAD

/*
AUTOLOAD serve pra incluir arquivos de classes, de forma otimizada e dinamica.
Ao invés de chamar varias vezes o require_once("") para incluir os arquivos de CLASSE, nós usamos a function __autoload()


*/

function __autoload($nomeClasse){

	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
	
}



//Como __autoload() é um método mágico/construtor, uma vez que um objeto for instanciando, o método é chamado automaticamente.
$carro = new DelRey();


$carro->acelerar(80);




?>