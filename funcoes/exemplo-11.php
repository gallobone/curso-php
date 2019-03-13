<?php

//Neste exemplo de FUNCOES ANONIMAS, vamos ver uma outra forma de se criar uma funcao anonima.

//Atribuindo a uma variável uma funcao como valor. Vejamos:

$fn = function($sa){

	var_dump($sa);
};

/*
No trecho acima, estou dizendo que a variável $fn é uma function, portanto, abaixo, eu posso chamar a variável 
$fn como se estivesse chamando uma function(); Vejamos o exemplo:
*/


//Chamei a variável $fn(que agora é uma function), e passei como parametro uma string que será varrida no var_dump()
$fn("Oi");

?>