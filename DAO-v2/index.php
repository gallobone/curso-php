<?php

require_once("config.php");

/*comentei a forma antiga aqui nesse caso, pq agora estou chamando a classe Usuario, e la ja consta o select que precisa
ser feito na tb_usuario

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

$root = new Usuario();

$root->loadById(7);

echo $root;


?>