<?php


require_once('config.php');


$id_usuario = $_POST['id_usuario'];
$id_jogador = $_POST['id_jogador'];
$id_habilidade = $_POST['id_habilidade'];
$pontuacao = $_POST['pontuacao'];


echo "ID USUARIO: ". $id_usuario . "<br/>";
echo "ID JOGADOR: ". $id_jogador . "<br/>";
echo "ID HABILIDADE: ". $id_habilidade . "<br/>";
echo "PONTUACAO: ". $pontuacao . "<br/>";

$obj = new Pontuacao();

$result = $obj->consultaPontuacao($id_usuario, $id_jogador, $id_habilidade);
$valida_result = json_encode($result);
echo "<br/>RESULT = " . $valida_result. "<br/>";

if($valida_result == "true"){
	echo "<br/>JÁ POSSUI REGISTROS";
	$obj->atualizaPontuacao($id_usuario, $id_jogador, $id_habilidade, $pontuacao);
}
else{
	echo "<br/>NÃO POSSUI REGISTROS";
	$obj->inserePontuacao($id_usuario, $id_jogador, $id_habilidade, $pontuacao);
	//$obj->atualizaPontuacao($id_usuario, $id_jogador, $id_habilidade, $pontuacao);
}

