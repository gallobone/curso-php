<?php

//outros exemplos de operadores de ATRIBUIÇÃO   '+='   '-='   '*='

$valorTotal = 0;

$valorTotal += 100; // '+='  soma o valor que já existe na variável com o novo valor inserido

$valorTotal += 25; // '+='  soma o valor que já existe na variável com o novo valor inserido

$valorTotal -= 10; // '-='  subtrai o valor que já existe na variável pelo novo valor inserido


echo "Valor total = " . $valorTotal . "<br/>";


$valorTotal *= 0.9; // neste exemplo usando ' *= ' , o valor existente está sendo multiplicando pelo novo valor adicionado
// e ainda sobre o caso acima, esse é um exemplo de um cálculo de 90% do valor existente, por exemplo.

echo $valorTotal;

?>