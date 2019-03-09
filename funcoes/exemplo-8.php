<?php

//Aula sobre novas funções no PHP7


//OUTRO NOVO RECURSO : DECLARAÇÃO DE TIPO DE RETORNO
/*
É possível setar o o tipo do parâmetro que a função recebe e também o tipo de retorno. No exemplo, abaixo, declaramos o tipo como INT,
e declaramos o tipo de RETORNO como STRING

**** ESTE NOVO RECURSO, É MUITO IMPORTANTE, POR EXEMPLO, QUANDO FORMOS INSERIR/RGRAVAR DADOS NO BANCO DE DADOS.


*/

function soma(int ...$valores):string {

	// Aqui abaixo usamos a function array_sum(), que evidentemente soma os valores encontrados num array
	return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br/>";
echo soma(25, 33);
echo "<br/>";


echo soma(1.5, 3.2);
echo "<br/>";

?>