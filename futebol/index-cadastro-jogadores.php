<?php

require_once("config.php");


$sql = new Sql();

$results = $sql->run_query('SELECT * FROM tb_times');

$resultsgiocatori = $sql->run_query('SELECT tb_jogadores.nome_jogador, tb_jogadores.idade, tb_jogadores.posicao_jogador, tb_jogadores.nacionalidade_jogador,  tb_times.nome FROM tb_jogadores INNER JOIN tb_times ON tb_jogadores.time_id = tb_times.id;');




require_once("includes/header.php");

?>

<section class="section-registrazione-giocatori mt-5">

	<div class="container pt-5">

		<div class="row">
			<h2>Registro Di Giocatori</h2>
			<div class="col-12 form-box">
				<form action="cadastro-jogadores.php" method="POST">
					<div class="form-row">
						<div class="form-group col-md-6">
						     <label for="nome_jogador">Nome:</label>
						     <input type="text" class="form-control" id="nome_jogador" name="nome_jogador">
					    </div>

					    <div class="form-group col-md-6">
						    <label for="idade">Età:</label>
							<input type="number" class="form-control" id="idade" name="idade">
					    </div>

					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="posicao_jogador">Posizione:</label>
							<input type="text" class="form-control" id="posicao_jogador" name="posicao_jogador">
						</div>

					    <div class="form-group col-md-6">
							<label for="nacionalidade_jogador">Nazionalità:</label>
							<input type="text" class="form-control" id="nacionalidade_jogador" name="nacionalidade_jogador">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="time"><strong>Sceglie una squadra per il giocatori:</strong></label>
							<select name="time" class="form-control">
								<option value="0">Scegliere una squadra</option>
								<?php foreach($results as $row) : ?>
								
									<option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
								
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
					    <div class="col-12 mt-5 text-right">
					    	<button type="submit" class="btn btn-success" value="Registrazione" name="Registrazione">Registrazione</button>
					      	<!--<button type="submit" class="btn btn-primary">Sign in</button>-->
					    </div>
					</div>		
								
				</form>
			</div>
		</div>
	</div>

</section>


<section class="section-giocatori mt-5 mb-5 pb-5">
	<div class="container pt-5">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-3">Giocatori</h2>
				<table class="table" border="2" cellpadding="4" cellspacing="2">
					<thead class="thead-dark">
						<tr>
							<!--<th scope="col">#</th>-->
							<th scope="col">Nome</th>
							<th scope="col">Età</th>
							<th scope="col">Posizione</th>
							<th scope="col">Nazionalità</th>
							<th scope="col">Squadra Attuale</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($resultsgiocatori as $rows) : ?>
							<tr>
								<!--<td><?php echo $rows['id'];?></td>-->
								<td><?php echo $rows['nome_jogador'];?></td>
								<td><?php echo $rows['idade'];?></td>
								<td><?php echo $rows['posicao_jogador'];?></td>
								<td><?php echo $rows['nacionalidade_jogador'];?></td>
								<td><?php echo $rows['nome'];?></td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
</section>

<?php
require_once("includes/footer.php");
?>