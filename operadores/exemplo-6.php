<?php

//OPERADOR NULL COALESCE // Tambem um operador/recurso novo do PHP7
// TAMBEM UM OPERADOR DE COMPARAÇÃO PARA TRATAR VALORES NULLOS

// no exemplo abaixo, o operador varre a sequencia de variáveis e para somente quando encontra valor

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;


?>