<?php

//DIFERENÇAS ENTRE ""(aspas duplas) E ''(aspas simples).


$nome = "Hcode";
$nome2 = 'Treinamentos';


//var_dump($nome, $nome2);

echo "ABC $nome"; 
// Se usarmos aspas dupla para 
//uma string que contenha uma variável(conforme o exemplo acima),
//esta variável terá seu valor interpretado.


echo "<br/>";

echo 'ABC $nome';

//Se usarmos aspas simples, 
//o php irá interpretar o nome da variável como um texto 
//ao inves de exibir o seu valor, conforme mostra o exemplo acima.


?>