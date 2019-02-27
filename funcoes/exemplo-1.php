<?php


//Funções definidas pelo Usuário, chamadas tambem de User Functions

//Função em conceito, é quando se retorna uma valor. E é usada com o comando RETURN
// Quando uma function não retorna um valor, conceitualmente, ela é uma Sub Rotina, executa aquela instrução repetidamente.


function ola(){
	echo "Olá Mundo<br/>";
}


ola();

/*
Agora, vamos criar um exemplo, usando o comando return, para utilizar essa função de uma maneira mais abstrata
que nos permita encaixá-la/reutilizá-la em situações e propósitos diversos.
*/


function ola2(){
	return "Olá Mundo<br/>";
}

//OBS: o "echo" também pode ser usado para chamar uma funcao quando, por exemplo, esta function retorna uma string
echo ola2();


/*
Desta forma, usando o return para que a function retorne um valor, poderíamos usar essa funcao de várias formas:
poderia usar um echo, como no exemplo acima, para retornar o valor de texto na tela
poderia usar um "insert", para gravar esse valor no banco de dados
poderia gravar o valor de retorno desta funcao em uma variável...
 */

//Ex:

$frase = ola2();
//guardei o valor de retorno da function ola2(), na variável $frase

echo strlen($frase);
//Também usei a function strlen() para contar quantos caracteres tem na variável $frase


/* CONCLUSAO:
	Portanto, perceba que usando o RETURN, ganhamos liberdade, 
	ganhamos possibilidades de trabalhar com esta função para objetivos diversos
*/

?>