<?php



include_once('includes/header.php');


	$obj = new Jogadores();
	$listaJogadores = $obj->getJogadores();
	$buscaJogadores = $obj->searchJogadores('Ronaldo');

	$objHabilidades = new Habilidades();
	$listaHabilidades = $objHabilidades->getListaHabilidades();
?>

	<div class="container">
		<section class="section-players mt-4">
			<div class="container">
				<div class="row boxes">
					<?php foreach($listaJogadores as $row) :?>
						
						<div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2  mt-4 mb-4 text-center pl-1 pr-1">
							<div class="box-player">
								<h3 class="title-players anton dark-grey"><?php echo utf8_encode($row['apelido']);?></h3>
								<div class="img-box"><img onclick="javascript:exibeBoxAvaliacao(<?php echo $row['id'];?>)" class="zoom" style="cursor:pointer;max-height:140px; max-width: 190px;" src="images/<?php echo $row['image_path'];?>.jpg"></div>
								<button id="bt_<?php echo $row['id'];?>" type="button" class="btn btn-green btn-block mt-2" onclick="javascript:exibeBoxAvaliacao(<?php echo $row['id'];?>)">
									Avalie
								</button>	
							</div>
						</div>

						<?php $idJogador = $row['id'];?>


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
											<?php foreach($listaHabilidades as $row) : ?>
											<div class="div-lista-habilides-row d-flex align-items-center">
												<div class="nome-habilidade">
													<input type="hidden" name="habilidade" class="input-habilidades" id="id_habilidade_<?php echo $row['id'];?>" value="<?php echo $row['id'];?>"> 
													<label>
														<span><img width="20" src="images/ball1.png"></span>
														<?php echo utf8_encode($row['nome_habilidade']);?>
													</label>
													<!--<input type="number" name="pontuacao" class="input-pontuacao" id="pontuacao_habilidade_<?php echo $idJogador; ?>_<?php echo $row['id'];?>" min="1" max="10" value="">-->
												</div>

												<div class="range-slider">
												  <input class="range-slider__range input-pontuacao" id="pontuacao_habilidade_<?php echo $idJogador; ?>_<?php echo $row['id'];?>" type="range" value="5" min="0" max="10">
												  <span class="range-slider__value"></span>
												</div>
											</div>

												<?php $idHabilidade = $row['id'];?>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
						      </div>
						      <div class="modal-footer modal-footer-box-avaliacao">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						        <button type="button" class="btn btn-green bt-salva-pontuacao" onclick="salvaPontuacao(<?php echo $idJogador;?>);">Salvar</button>
						      </div>
						      <div class="modal-footer-msg">
					      		<p></p>
				      			<button class="bt-close-modal btn btn-dark" onclick="closeModal(<?php echo $idJogador;?>);">OK</button>	
						      </div>
						    </div>
						  </div>
						</div>

					<?php endforeach; ?>

				</div>
			</div>
		</section>

		<!--Begin Search Players Section -->
		<section class="search-players">
			<h1>Resultados da busca: </h1>
			<div class="container">
				<div class="row boxes row-search-players">
					<?php foreach($buscaJogadores as $row) :?>
						
						<div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2  mt-4 mb-4 text-center pl-1 pr-1">
							<div class="box-player">
								<h3 class="title-players anton dark-grey"><?php echo utf8_encode($row['apelido']);?></h3>
								<div class="img-box"><img onclick="javascript:exibeBoxAvaliacao(<?php echo $row['id'];?>)" class="zoom" style="cursor:pointer;max-height:140px; max-width: 190px;" src="images/<?php echo $row['image_path'];?>.jpg"></div>
								<button id="bt_<?php echo $row['id'];?>" type="button" class="btn btn-green btn-block mt-2" onclick="javascript:exibeBoxAvaliacao(<?php echo $row['id'];?>)">
									Avalie
								</button>	
							</div>
						</div>

						<?php $idJogador = $row['id'];?>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<!--End Search Players Section -->

	</div>

<?php
	include_once('includes/footer.php');