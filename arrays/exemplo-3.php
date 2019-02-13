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

//funcao 'print_r()' , imprime na tela o ceonteudo do array
print_r($pessoas);
echo "<br/>";


//Da forma abaixo, eu pego somente os valores do primeiro indice do array, ou seja, da primeira pessoa, no exmeplo
print_r($pessoas[0]);
echo "<br/>";

//Da maneira abaixo eu imprimo somemte o valor da chave 'nome' da primeira pessoa(primeiro indice do array) 
print_r($pessoas[0]['nome']);


?>