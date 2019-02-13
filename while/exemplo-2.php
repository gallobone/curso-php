<?php


//DO WHILE -- EXEMPLO

$total = 100;

$desconto = 0.9;


// USANDO O DO WHILE, pelo menos uma vez a instrução que tiver dentro do bloco 'DO{}' vai acontecer.

do {
	//a linha de baixo desconta o valor de 10%
	$total *= $desconto;

} while ( $total > 100);

echo "total: ". $total. "<br/><hr>";



/// treinamento meu para criar desconto
$valor = 100;
$desconto = 1 - 0.25 ;// % de desconto
$porecentagem = $valor * $desconto; // = 70

$totalDesconto = $valor - $porecentagem;

echo "valor do desconto é de ".$totalDesconto;

?>