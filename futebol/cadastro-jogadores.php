<?php

require_once("includes/header.php");

require_once('config.php');


$sql = new Jogadores();

$sql->setNome($_POST['nome_jogador']);
$sql->setIdade($_POST['idade']);
$sql->setPosicao($_POST['posicao_jogador']);
$sql->setNacionalidade($_POST['nacionalidade_jogador']);
$sql->setTime($_POST['time']);


$nome = $sql->getNome($_POST['nome_jogador']);
$idade = $sql->getIdade($_POST['idade']);
$posicao = $sql->getPosicao($_POST['posicao_jogador']);
$nacionalidade = $sql->getNacionalidade($_POST['nacionalidade_jogador']);
$time = $sql->getTime($_POST['time']);



if($nome != null && $idade != null && $posicao != null && $nacionalidade != null && $time != null){
	
	$sql->insert();
	
	$msg = "Dados inseridos com Sucesso!";

	 /*echo "<section class='secttion-response mt-5 pt-5'>
			<div class='container'>
				<h4 class='title-response text-center'>Dados inseridos com Sucesso!</h4>
			</div>
		</section>";*/
}
else{
	$msg = "Preencha todas as informações. O jogador não foi cadastrado!";
}



echo "<section class='secttion-response mt-5 pt-5'>
			<div class='container'>
				<h4 class='title-response text-center'>". $msg ."</h4>
			</div>
		</section>";

/*
try{
	$sql->insert();
	
	echo "Dados inseridos com Sucesso!";

}catch(Exception $e){
	echo "Não foi possível inserir o registro: ".  $e->getMessage();
}
*/





?>