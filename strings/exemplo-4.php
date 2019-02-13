<?php 

//FUNCAO STRPOS : Funcao php que verifica um
//valor especifico dentro de uma string e retorna seu índice/posição

// strpos(haystack, needle) // recebe dois argumentos.


$frase = "A repetição é mãe da retenção.";

echo strlen($frase);
echo "<br/>";

$palavra = "mãe";

// funcao strpos, retorna a posição do valor procurado na string
//$q = strpos($frase, "mãe");
$q = strpos($frase, $palavra);



//FUNCAO SUBSTR: Funcao php que encontra um 
//determinado trecho de uma string.

//Recebe dois ou três argumentos: String e Indice/start e Indice/end
//(a partir de onde voce quer buscar até onde voce quer buscar na determinada string)
$texto = substr($frase, 0, $q);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

//FUNCAO STRLEN(): conta quantos espaços/indices possui uma string
//Retorna o total de carcteres de uma determinada string.

echo $q;

echo "<br/>";

var_dump($q);


echo "<br/>";

var_dump($texto);


echo "<br/>";

var_dump($texto2);



?>