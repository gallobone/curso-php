<?php


//ESCOPO DE VARIÁVEL

$nome = "Gallo";

function teste() {

	global $nome;
	echo $nome;
	//palavra reservada global pega a variável FORA da funcao, ou seja, pega a variável global da página.
}


function teste2() {
	
	$nome = "Gallo33";
	
	echo $nome." Bone";
}

teste();

teste2();

?>
