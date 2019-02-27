<?php


/*
Neste arquivo de exemplo, vamos mostrar como usar uma função que PODE ou NÃO receber parametros.

Dentro da function ola(), temos uma function do php "func_get_args()" que retorna em ARRAY todos os parametros/argumentos 
que foram utilizados(caso tenha sido de fato utilizado algum parametro), na chamada da sua function.
*/

function ola(){

	$argumentos = func_get_args();

	return $argumentos;

}


var_dump(ola("Bom dia!", 10));
//Perceba que usando o var_dump, veremos que a function ola() retornou, atraves de func_get_args(), um array de 2 indices e seus valores.



?>