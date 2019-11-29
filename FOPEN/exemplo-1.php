<?php

/*
Abaixo dentro da variavel $file, nos usamos a function fopen(), que recebe dois parametros.
O primeiro é o path completo do arquivo que voce deseja criar. Ex: images/teste.txt. E o segundo é que tipo de manipulação voce deseja
em relação a este arquivo. */
$file = fopen("log.txt", "a+");
//Lembrando que acima a variabel $file é uma variável do tipo RESOURCE, que se refere a arquivos externos


//Abaixo a function fwrite, que escreve algo no arquivo desejado
fwrite($file, date("Y:m:d H:i:s") . "\r\n");

/*Abaixo usamos a function fclose(), que espera tambem uma variável de resource como parametro. 
Esta function encerra a manipulação que estava sendo feita ao arquivo que foi passado como parametro.*/

fclose($file);

//Agora, ao fim do cofigo, usamos um echo para informar que o arquivo foi criado com sucesso.

echo "Arquivo criado com sucesso!";

?>