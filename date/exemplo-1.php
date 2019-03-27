<?php

//Aula sobre funções date() / time() / 


//Para usar a function date(), é preciso passar pelo menos 1 argumento.
//Pode ser d (que corresponde ao dia), m (que corresponde ao mês) e y (que corresponde ao ano);

/*
OBS: É importante frisar que esses argumentos passados seguem o padrão CASE SENSITIVE, portanto, se colocarmos o y minúsculo, 
por exemplo, a funcao retornará somente os dois últimos dígitos correspondentes ao ano. Caso coloquemos o Y maiúsculo, a função retorna
os 4 dígitos referentes ao ano.
*/
echo date("d/m/Y");

echo "<br/>";
echo "<br/>";


/*
Aaqui abaixo, usamos o conceito de CASE SENSITIVE no argumento 'Y', que corresponde ao ano, portanto a funcao retornará
o ano completo

Também estamos usando os parametros de 'H'(hora), 'i'(que corresponde a minuto) e 's' (que corresponde a segundos).


*/
echo date("d/m/Y H:i:s");

//OBS: Por padrão do PHP, a funcao date(), recebe como segundo parametro o [$timestamp],

//O que é o $timestamp? Representa a contagem de todos os segundos desde 1970

//Abaixo, veremos uma forma de pegar o $timestamp usando a funcao time();

echo "<br/>";
echo "<br/>";

echo time();//retorna um valor que corresponde ao timestamp



echo "<br/>";
echo "<br/>";

//No exmeplo abaixo, vou usar o $timestamp retornado a partir da funcao time() e passa-lo com o segundo parametro na funcao date();
//Com isso, eu pego uma data e hora exata de um determinado momento. 
echo date("d/m/Y H:i:s", 1553661361);




?>