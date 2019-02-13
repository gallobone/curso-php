<?php

//OPERADORES DE COMPARAÇÃO

//var tipo PONTO FLUTUANTE
$a = 55.00;

//var tipo INTEIRO
$b = 55;


var_dump($a > $b);

echo "<br/>";

var_dump($a < $b);

echo "<br/>";


//DOIS SINAIS DE == COMPARAM APENAS VALOR
var_dump($a == $b);

echo "<br/>";
//TRêS SINAIS DE IGUAIS === COMPARAM O VALOR E TAMBÉM O TIPO DA VARIÁVEL
var_dump($a === $b);

echo "<br/>";


//OPERADOR QUE VERIFICA SE $a TEM UM VALOR DIFERENTE DE $b. No exemplo abaixo retorna FALSE
var_dump($a != $b);

echo "<br/>";
//OPERADOR QUE VERIFICA SE $a TEM UM VALOR DIFERENTE DE $b E SE O TIPO DE VARIÁVEL TAMBÉM É DIFERENTE. No exemplo abaixo retorna TRUE
var_dump($a !== $b);


?>