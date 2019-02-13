<?php

/*Exempolo de ARRAY BIDIMENSIONAL */

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";



$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";


/*Exemplo abaixo: Caso eu queira exibir o camaro...*/
echo $carros[0][3];


echo "<br/>";
//Exemplo abaixo uso a função END, que pega o último item/indice do array em questão/parametro
echo end($carros[1]);

?>