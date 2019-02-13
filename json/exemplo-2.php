<?php

/*Agora neste exemplo, vamos deserializar um json.*/

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

/* A Function abaixo transforma um JSON em um ARRAY */


$data = json_decode($json, true);
// Acima colocamos o parametro 'true', para transformar em array, ao inves de tranformar direto em objeto 


var_dump($data);

?>