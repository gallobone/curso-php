<?php

//AULA FUNÇÕES COM PARÂMETROS POR REFERÊNCIA X PARÂMETROS POR VALOR


$a = 10;

//ABAIXO UM EXEMPLO DE PASSAGEM E PARÂMETRO POR VALOR!

//padrao cammel case, a cada nova palavra , inicia-se com letra maiúscula.
function trocaValor($b){

	$b += 50;
	
	return $b;
}


//echo $a;

echo trocaValor($a);
echo "<br/>";
echo $a;
echo "<br/>";
echo "<br/>";




//Agora abaixo, um exemplo de função utilizando PASSAGEM DE PARÂMETRO POR REFERÊNCIA

//Para passarmos um parametro por referencia, precisamos adicionar o '&' na frente do parametro. Ex: "&$parametro"
 /*
A grande diferença nesse caso, é que a variável muda o seu valor de acordo com a função, 
e esta variável armazena o valor conforme a função é executada. É como se o valor fosse sendo incrementado, 
a cada vez que a função é chamada.

 */

$c = 10;

function trocaValor2(&$qq){

	$qq += 50;
	
	return $qq;
}



echo trocaValor2($c);
echo "<br/>";
/* Observe abaixo, que ao chamar a variável $c agora, o valor da variável será diferente do valor inicial,
uma vez que a função executa e altera o valor. */
echo $c;


?>