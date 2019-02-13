<?php


/////////////////////////////////////
// TIPOS BÁSICOS

//string
$nome = "Hcode";
$site = 'www.hcode.com.br';

//inteiro
$ano = 1990;

//ponto fluante
$salario = 5500.99;

//boolean
$bloqueado = false;

///////////////////////////////////
// TIPOS COMPOSTOS

// Array
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

// Objeto
$nascimento = new DateTime();

//var_dump($nascimento);


//////////////////////////////////////////
// TIPOS ESPECIAIS

// Resource
$arquivo = fopen("exemplo-3.php", "r"); // nesse exemplo leu o arquivo "exemplo-3.php"

//var_dump($arquivo);

// Nulo(ausência de valor),nao ocupa espaço na memória.
$nulo = NULL;


?>