<?php


//Neste exemplo vamos usar a funcao strtotime(), que converte uma STRING para um TIMESTAMP
echo strtotime("2001-09-11");//Vai retornar o timestamp desta data passada como parametro

echo "<br/>";
echo "<br/>";


//Armazenamos em uma variável o timestamp desta data em questão.
$ts = strtotime("2001-09-11");


//o parametro 'l', abaixo, representa o dia da semana. Repare que passamos a variavel "$ts" como timestamp tambem
echo date("l, d/m/Y", $ts);

echo "<br/>";
echo "<br/>";


//Abaisxo, outro recurso da funcao strtotime();
//Podemos utilizar nessa function, uma expressão como parametro; Vejamos:



//Nas variáveis abaixo, foram atribuidas expressoes como parametros da function strtotime()
//Entao, usaremos essas variaveis como timestamps na function date(), e vejamos o que será retornado.
$ts2 = strtotime("+ 1 day");
$ts3 = strtotime("+ 1 week");
$ts4 = strtotime("+ 1 month");

echo $ts2; 
echo "<br/>";
echo "<br/>";
echo date("d/m/y", $ts3);




?>