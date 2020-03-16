<?php

require_once("config.php");

$sql = new Sql();

$results = $sql->run_query('SELECT * FROM tb_times');

?>

<h1>Cadastro de Jogadores</h1>

<form action="cadastro-jogadores.php" method="POST">
	<label>Nome:</label>
	<input type="text" name="nome_jogador"><br/>

	<label>Idade:</label>
	<input type="number" name="idade"><br/>

	<label>Posição:</label>
	<input type="text" name="posicao_jogador"><br/>

	<label>Nacionalidade:</label>
	<input type="text" name="nacionalidade_jogador"><br/><br/>


	<label><strong>Selecione um time para o seu jogador:</strong></label><br/>
	<select name="time">
		<option value="0">Selecione um time</option>
		<?php foreach($results as $row) : ?>
		
		<option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
		
		<?php endforeach; ?>
	</select><br/><br/><br/><br/>



	<input type="submit" value="Cadastrar" name="cadastrar">

</form>

