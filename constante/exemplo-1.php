<?php

// Constantes e Array Constantes

//CONSTANTE geralmente se nomeia em caixa alta
// Uma CONSTANTE é definida atraves da funcão "define('NOME_DA_CONSTANTE', 'valor')"
//Existe também nessa funcao, um terceiro parametro que indica se a constante é case sesnsitive ou case insensitive
//Ex: "define('NOME_DA_CONSTANTE', 'valor', true)". nesse caso, através do parametro TRUE, definimos esta CONSTANTE como case insensitive

//Existe também a funcao defined(), que verifica se a CONSTANTE está definida/criada ou não;

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;


?>