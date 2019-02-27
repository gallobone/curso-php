<?php
	
/*

Neste exemplo, no arquivo 2, estamos mostrando  mais um exemplo de como trabalhar com um valor de retornado de uma função 
em que usamos o comando RETURN

*/

	function salario(){

		return 935.00;
	}

echo "Você recebeu, este mês, o equivalente a 3 salários. Total: " .(salario()*3);

/*
Acima, concatenamos com a string, uma operação matemática em que um dos valores é 
propriamente a function salario(), multiplicada por 3. 
*/

?>