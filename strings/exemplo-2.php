<?php 


//funcoes PHP utilizadas para trabalhar com Strings

$nome = "joão rangel";

echo $nome;

echo "<br/>";



// STRTOUPPER : funcao para converter uma string em letras maiusculas.
$nome =  strtoupper($nome);

echo $nome;
echo "<br/>";


//STRTOLOWER : funcao php para converter uma string em letras minusculas.
//echo strtolower($nome);
$nome = strtolower($nome);

echo $nome;
echo "<br/>";



//UCFIRST : Funcao php que converte apenas a primeira letra da string toda
//para maiusculo.
echo ucfirst($nome);
echo "<br/>";



//UCWORDS: Funcao php para deixar maiuscula somente a primeira letra 
//de cada palvara
echo ucwords($nome);
echo "<br/>";



?>