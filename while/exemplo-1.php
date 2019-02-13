<?php

//WHILE 
/*

executa uma ação ENQUANTO uma condição for verdadeira.
Diferente do foreach e do for, voce pode usar o WHILE para qualquer situação.
É muito utilizado para pegar registros do banco de dados.

*/


$condicao = true;

while ($condicao) {
	

	//funcao rand, randomiza possíveis valores inseridos nos parametros.
	$numero = rand(1, 10);
	
	if($numero === 3){
		echo "A condição é falsa ";
		$condicao = false;
	}
	
	echo "número é: ". $numero . "<br/>";
	
}

?>