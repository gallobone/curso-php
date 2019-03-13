<?php

/*
Nesta aula teremos exemplos de FUNÇÕES ANONIMAS;
É um tipo de função muito usada no javascript, por exemplo. Ela geralmente é criada/executada através de uma varíável e nao tem nome 
e nem RETURN;

*/


function test($callback){
	//processo lento

	/*
	Obersve que estou chamando/determinando/definindo a variável $callback como uma function(), 
	portanto a function test() vai "retornar uma outra função" ;
	*/

	$callback();
}


/*
Desta forma, abaixo, estou chamando a function test(), que "recebe como parametro/argumento" uma function anonima. 
Esta function anonima retorna uma string, por exemplo, como no codigo abaixo.
Portanto essa é uma forma de se trabalhar como funcoes anonimas;
*/
test(function(){
	echo "Terminou!";
	echo "<br/>";
	echo "<br/>";
});


//ABAIXO OUTRO EXEMPLO DE FUNCTION ANONIMA COM FUNCTION DE CALLBACK;

function calcular($funcaoDeRetorno){
 
	$a = 10;
	$b = 5;
 
	$resultado = $a + $b;
 
	echo "O resultado é: " . $resultado . "<br/>";
 
        // Agora eu chamo o callback
	$funcaoDeRetorno();
 
}
 
calcular(function(){
 
        // Este é o callnack
	echo "A conta foi feita!!!";
 
});



?>