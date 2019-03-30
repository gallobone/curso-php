<?php

//Objeto $dt, da classe DateTime()
$dt = new DateTime();

//Instaciamos $periodo como um objeto da classe DateInterval()
$periodo = new DateInterval("P15D");


echo $dt->format("d/m/Y H:i:s");


//Agora, através do método add(), adicionamos um outro valor ao objeto $dt, 
//e abaixo iremos imprimir o valor novamente para ver a diferença
$dt->add($periodo);

echo "<br/>";
echo $dt->format("d/m/Y H:i:s");


?>