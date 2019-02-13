<?php

//PRECEDÊNCIA DE OPERADOR e OPERADORES LÓGICOS

//Assim como na matemática, o código abaixo irá resolver primeiro a conta que está dentro dos parênteses().
//Portanto, este é um conceito de precedência de operadores.


//Abaixo também foram utilizados operadores lógicos como &&(and) e ||(ou)

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;

//echo $resultado;

//Quando se trata de uma operação de comparação, é pre iso usar o var_dump para exibir os dados na tela. Portanto:
var_dump($resultado);

echo "<br/>";



// no exemplo abaixo, foi utilizado também o operador || (or), e através do var_dump, retornará true caso UMA das condições seja VERDADEIRA.
$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado2);



?>