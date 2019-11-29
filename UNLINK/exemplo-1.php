<?php

//AULA SOBRE COMO REMOVER ARQUIVOS E DIRETORIOS
//Abaixo usamos a function fopen que é usada pra criar um arquivo.
$file = fopen("teste.txt", "w+");


//Aqui, mais uma vez usamos a function fclose que é usada para encerrar o processo de manipulação de um arquivo.
fclose($file);


//AQUI USAMOS A FUNCTION UNLINK, QUE É USADA PARA EXCLUIR ARQUIVOS E DIRETORIOS.
//No caso aqui abaixo, estamos usando a function unlink para excluir o arquivo "teste.txt";
unlink("teste.txt");

echo "Arquivo removido com sucesso";


?>