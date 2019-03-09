<?php

//Aula sobre novas funções no PHP7


//NOVO RECURSO : DECLARAÇÃO DE TIPOS ESCALARES
/*
É possível setar o o tipo do parâmetro que a função recebe. No exemplo, abaixo, declaramos o tipo como INT

Desta forma, se passarmos um paramêtro que não seja tipo INT, por exemplo um 'double', ele será ignorado e apenas arrendondará para 
um tipo INT
*/

function soma(int ...$valores) {

	// Aqui abaixo usamos a function array_sum(), que evidentemente soma os valores encontrados num array
	return array_sum($valores);
}

echo soma(2, 2);
echo "<br/>";
echo soma(25, 33);
echo "<br/>";

//abaixo, o tipo double é arredondado/convertido para INT
echo soma(1.5, 3.2);
echo "<br/>";

?>