<?php

require_once('config.php');


$obj = new Pontuacao();


$result = $obj->consultaPontuacao('1', '1', '1');

echo $result;