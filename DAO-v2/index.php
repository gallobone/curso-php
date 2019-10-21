<?php

require_once("config.php");

/*comentei a forma antiga aqui nesse caso, pq agora estou chamando a classe Usuario, e la ja consta o select que precisa
ser feito na tb_usuario

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


//ABAIXO A FORMA DE CARREGAR APENAS 1 USUÁRIO, USANDO AS CLASSES USUÁRIOS E SQL
//$root = new Usuario();
//$root->loadById(7);
//echo $root;


//Abaixo a forma de carregar uma lista de usuários!
//$lista = Usuario::getList();
//echo json_encode($lista);


//Abaixo a forma de carregar uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);


//Abaixo a forma de carregar um usuário por autenticação, validando por login e senha
$usuario = new Usuario();
$usuario->login("Jose","123456");
echo $usuario;

?>