<?php

/*

Aqui neste arquivo, mais um exemplo do uso de PARÊMETROS POR REFERÊNCIA.
No FOREACH, no parametro $value, adicionamos o '&' na frente (&$value), com isto o parametro será por referência, e seu valor será alterado
não somente dentro do foreach(como propõe o código), mas será alterado definitivamente, portanto tambem fora do foreach.


*/

$pessoas = array(
	"Nome" => "João",
	"Idade" => 20,
	
	 );


//No parametro $value usamos o &, portanto ele se torna um parametro por referência.
//Com isto, ele não apenas muda o valor deste parametro dentro do foreach, mas tambem muda quando chamarmos esse dado fora do foreach.
foreach ($pessoas as $key => &$value) {
	
	// se alguma chave do array tiver o value como tipo inteiro, será adicionado + 20 ao seu valor.
	//usando o '&' no parametro value, mudamos esse valor tambem fora do foreach
	if(gettype($value) === 'integer') $value += 20;
	
	echo $key ." : ". $value ."<br/>";
}

//Lembrando que para ler um array na tela usamos o print_r()
print_r($pessoas);


?>