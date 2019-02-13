<?php


/*FOREACH

Serve para percorrer arrays e coleções.


*/


$meses = array(

	"janeiro", "fevereiro", "março",
	"abril", "maio", "junho",
	"julho", "agosto", "setembro",
	"outubro", "novembro", "dezembro"

	);

foreach ($meses as $index => $mes) {

	echo "O mês é ". $index ." : ". $mes ."<br/>";

}

?>