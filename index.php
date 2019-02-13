<?php

echo "Meu primeiro código PHP! <strong>Hello World</strong><br/><br/>";

$nome = "Gallo";
$sobrenome = "Bone";

$nomeCompleto = $nome ." ". $sobrenome;

echo $nomeCompleto;

exit;
//exit é um comando que interrompe a leitura de código no ponto em que foi inserido


echo "Meu nome és: "; 
echo $nome;
echo "<br/><br/>";

var_dump($nome);

unset($nome);

if(isset($nome)){
	echo $nome;	
}



?>

<!--<div>Teste</div>-->