<?php


//FUNCAO STR_REPLACE : Funcao php para trocar valores numa string;
// recebe 3 parametros/argumentos; 
// str_replace(search, replace, subject)//



$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>