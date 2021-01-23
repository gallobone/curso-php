<?php


setlocale(LC_ALL, 'pt_BR.utf8');
header('Content-Type: text/html; charset=utf-8');



//require_once('../config.php');
require_once('../classes/Sql.php');
require_once('../classes/Habilidades.php');


$obj = new Habilidades();
$lista_habilidades = $obj->getListaHabilidades();

//var_dump($lista_habilidades);

echo json_encode($lista_habilidades);

//print_r($lista_habilidades);



