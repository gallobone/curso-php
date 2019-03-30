<?php

//Nesta aula aprenderemos sobre uma classe nativa do php. A Classe DateTime;


//abaixo instanciamos $dt como um objeto da classe DateTime, portanto $dt é uma instancia da classe DateTime.
$dt = new DateTime();


//Para, por exemplo, acessar o metodo format(que é um metodo da classe DateTime) é preciso seguir o padrão abaixo:
echo $dt->format("d/m/Y H:i:s");
//OBS: Format é igual a function Date();
?>