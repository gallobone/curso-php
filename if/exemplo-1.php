<?php


//Estruturas Condicionais - If, Else if, Else

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){

	echo "Você é Criança";

}
else if($qualASuaIdade < $idadeMaior){
	
	echo "Você é Adolescente";

}
else if($qualASuaIdade < $idadeMelhor){
 	
 	echo "Você é Adulto";

 }
 else{
 	echo "Você é Idoso";
 }

 /*
OPERADOR TERNÁRIO: outra forma de se criar uma estrutura condicional.
É o chamado IF  de uma linha só.
Veja o exemplo abaixo:
 */

echo "<br/>";  

/*
No exemplo abaixo, o sinal de "?" representa o IF/THEN, 
e o sinal de ":" representa o ELSE.
*/

echo ($qualASuaIdade < $idadeMaior)?"Você é Menor de Idade":"Você é maior de idade";
//Acima, como dito, o OPERADOR TERNÁRIO: outra forma de se criar uma estrutura condicional.

?>