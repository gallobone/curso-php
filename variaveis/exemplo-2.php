<?php

$nome = "Gallo";

$sobreNome = "Bone";

$nomeCompleto = $nome . " " . $sobreNome; // usando concatenação com o .

echo $nomeCompleto;

exit; //exit é um comando que interrompe a leitura de código no ponto em que foi inserido


echo "<br/>";


echo "Meu nome és: ".$nomeCompleto; 

echo "<br/><br/>";

var_dump($nome);

unset($nome); // Método UNSET,método que limpa p valor de uma variável. Esvazia o valor da variável.




if(isset($nome)){ 
	echo $nome;	
}
// Método isset verifica se uma varável tem um valor.




?>