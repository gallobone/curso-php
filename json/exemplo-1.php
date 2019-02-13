<?php

/*Mais exemplos de array BIDIMENSIONAL*/
/*Abaixo estaremos usando uma função típica de ARRAYS, a 'array_push' */

$pessoas = array();



/*A funcao array_push serve para adicionar mais itens a um array. Pode ser uma variavel, pode ser um novo array...
No caso abaiso, usamos a function 'array_push' para inserir um novo 'array', dentro do array $pessoas.

*/
array_push($pessoas, array(
	'nome'=>'Joao',
	'idade'=>20

));


array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25

));


/****
JAVASCRIPT OBJECT NOTATION = JSON

NESTA AULA APRENDEREMOS SOBRE COMO SERIALIZAR UM ARRAY, COMO TRANSFORMAR UM ARRAY EM JSON.
O JSON SERIALIZA AS VARIÁVEIS DE UM ARRAY


E TABÉM COMO DESERIALIZAR UM ARRAY()

****///

//Abaixo funcoes nativas do php para trabalhar com "arrays x json";

//FUNCTION json_encode(json) : transforma uma ARRAY em JSON, por exemplo.

//FUNCTION json_decode(json), faz justamente o contrário : transforma um JSON em um ARRAY.

echo json_encode($pessoas);


?>