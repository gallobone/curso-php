<?php

require_once('config.php');


$nome = $_GET['user'];
$iduser = $_GET['iduser'];


if($nome == NULL){
	header("location: login.php?login=no_session");
}
else{

	$obj = new Jogadores();
	$lista_jogadores = $obj->getJogadores();

	$objHabilidades = new Habilidades();
	$lista_habilidades = $objHabilidades->getListaHabilidades();

}




include_once('includes/header.php');

?>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-12 mt-2 mb-1">
					<h1 class="dark-green frijole">Hello, Mr. <span class='welcome-msg nosifer dark-red'><?= $nome; ?> !!!</span></h1>	
					<input id="idUsuario" type="hidden" name="usuario" value="<?= $iduser;?>">
				</div>
			</div>
		</div>

		<div class="">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
					<div class="collapse navbar-collapse">
						
					  	<ul class="navbar-nav">
						    <li class="nav-item active">
						    	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						    </li>
						    <li class="nav-item">
						    	<a class="nav-link" href="#">Players</a>
						    </li>
						    <li class="nav-item">
						    	<a class="nav-link" href="#">Ranking</a>
						    </li>
					  	</ul>
					  	
					</div>
				</nav>	
			</div>
		</div>
	</header>

	<div class="container">
		<!--
		<div class="row d-none">
			<div class="col-12 mt-5 mb-5">
				<h1 class="dark-green frijole">Hello, Mr. <span class='welcome-msg nosifer dark-red'><?= $nome; ?> !!!</span></h1>	
				<input type="hidden" name="id_usuario" value="<?= $iduser;?>">
			</div>
		</div>
		-->

		<div>
			
		</div>
		
		<div class="d-none">
			<h2 class="nosifer strong-orange"><?= "Monster";  ?></h2>
			<h2 class="frijole dark-pinky "><?= "Terror";  ?></h2>
			<h2 class="creepster deep-purple"><?= "Ghost";  ?></h2>
			<h2 class="monoton strong-yellow"><?= "Vampire";  ?></h2>
			<h2 class="alfa-slab green-light"><?= "Darkness";  ?></h2>
			<h2 class="modak red-blood"><?= "Pirate";  ?></h2>
			<h2 class="anton strong-orange"><?= "Demon";  ?></h2>
			<h2 class="sigmar-one ghost-grey"><?= "Hell";  ?></h2>	
		</div>


		<section class="section-players mt-4">
			<div class="container">
				<div class="row boxes">
					<?php foreach($lista_jogadores as $row) :?>
						
						<div class="col-2 mt-4 mb-4 text-center">
							<h3 class="title-players anton dark-grey"><?php echo utf8_encode($row['apelido']);?></h3>
							<div class="img-box"><img style="max-height:140px; max-width: 190px;" src="images/<?php echo $row['image_path'];?>.jpg"></div>
							<button id="bt_<?php echo $row['id'];?>" type="button" class="btn btn-green btn-block mt-2" onclick="javascript:exibeBoxAvaliacao(<?php echo $row['id'];?>)">
								Avalie
							</button>
						</div>

						<?php $id_jogador = $row['id'];?>


						<!-- Modal Box Avaliação -->
						<div class="modal fade" id="box_avaliacao_<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="boxAvaliacaoTitle<?php echo $row['id'];?>" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						      	<input type="hidden" name="jogador" id="id_jogador_<?php echo $row['id'];?>">
						        <h3 class="modal-title anton dark-grey" id="boxAvaliacaoTitle<?php echo $row['id'];?>"><?php echo utf8_encode($row['nome']);?></h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
									<div class="col-12">
										<h5 class="mb-4 font-weight-bold">Avalie as skills de <?php echo utf8_encode($row['apelido']);?></h5>
										<div class="div-lista-habilidades">
											<?php foreach($lista_habilidades as $row) : ?>
											<div class="div-lista-habilides-row d-flex align-items-center">
												<div class="nome-habilidade">
													<input type="hidden" name="habilidade" class="input-habilidades" id="id_habilidade_<?php echo $row['id'];?>" value="<?php echo $row['id'];?>"> 
													<label>
														<span><img width="20" src="images/ball1.png"></span>
														<?php echo utf8_encode($row['nome_habilidade']);?>
													</label>
													<!--<input type="number" name="pontuacao" class="input-pontuacao" id="pontuacao_habilidade_<?php echo $id_jogador; ?>_<?php echo $row['id'];?>" min="1" max="10" value="">-->
												</div>

												<div class="range-slider">
												  <input class="range-slider__range input-pontuacao" id="pontuacao_habilidade_<?php echo $id_jogador; ?>_<?php echo $row['id'];?>" type="range" value="5" min="0" max="10">
												  <span class="range-slider__value"></span>
												</div>
											</div>

												<?php $id_habilidade = $row['id'];?>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
						      </div>
						      <div class="modal-footer modal-footer-box-avaliacao">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						        <button type="button" class="btn btn-green bt-salva-pontuacao" onclick="salvaPontuacao(<?php echo $id_jogador;?>);">Salvar</button>
						      </div>
						      <div class="modal-footer-msg">
					      		<p></p>
				      			<button class="bt-close-modal btn btn-dark" onclick="closeModal(<?php echo $id_jogador;?>);">OK</button>	
						      </div>
						    </div>
						  </div>
						</div>

					<?php endforeach; ?>

				</div>
			</div>
		</section>

	</div>

<?php
	include_once('includes/footer.php');
?>