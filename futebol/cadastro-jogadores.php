<?php

require_once('config.php');


$sql = new Jogadores();

$sql->setNome($_POST['nome_jogador']);
$sql->setIdade($_POST['idade']);
$sql->setPosicao($_POST['posicao_jogador']);
$sql->setNacionalidade($_POST['nacionalidade_jogador']);
$sql->setTime($_POST['time']);





try{
	$sql->insert();
	
	echo "Dados inseridos com Sucesso!";

}catch(Exception $e){
	echo "Não foi possível inserir o registro: ".  $e->getMessage();
}






?>