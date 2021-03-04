<?php

include_once('includes/header.php');


	$obj = new Jogadores();
	$listaJogadores = $obj->getJogadores();
	//$buscaJogadores = $obj->searchJogadores();

	$objHabilidades = new Habilidades();
	$listaHabilidades = $objHabilidades->getListaHabilidades();
?>

	<div class="container">
		<section class="section-players mt-4">
			<div class="container">
				<div class="row boxes">
					<?php foreach($listaJogadores as $row) :?>
						
						<div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2  mt-4 mb-4 text-center pl-1 pr-1 default">
							<div class="box-player">
								<h3 class="title-players anton dark-grey"><?php echo utf8_encode($row['apelido']);?></h3>
								<div class="img-box">
									<img onclick="javascript:exibeBoxAvaliacao(<?php echo $row['id'];?>)" style="cursor:pointer;max-height:140px; max-width: 190px;" src="images/<?php echo $row['image_path'];?>.jpg">
								</div>
								<button id="bt_<?php echo $row['id'];?>" type="button" class="btn btn-green btn-block mt-2" onclick="javascript:exibeBoxAvaliacao(<?php echo $row['id'];?>)">
									Skills
								</button>	
							</div>
						</div>

						<?php $idJogador = $row['id'];?>
						<?php $imgJogador = $row['image_path'];?>


						<!-- Modal Box Avaliação -->
						<div class="modal fade" id="box_avaliacao_<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="boxAvaliacaoTitle<?php echo $row['id'];?>" aria-hidden="true">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						      	<input type="hidden" name="jogador" id="id_jogador_<?php echo $row['id'];?>">
						        <h3 class="modal-title anton white" id="boxAvaliacaoTitle<?php echo $row['id'];?>"><?php echo utf8_encode($row['nome']);?></h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 div-range-skills">
										<h5 class="mb-4 font-weight-bold strong-orange">Avalie as skills de <?php echo utf8_encode($row['apelido']);?></h5>
										<div class="div-lista-habilidades">
											<?php foreach($listaHabilidades as $row) : ?>
											<div class="div-lista-habilides-row d-flex align-items-center">
												<div class="nome-habilidade">
													<input type="hidden" name="habilidade" class="input-habilidades" id="id_habilidade_<?php echo $row['id'];?>" value="<?php echo $row['id'];?>"> 
													<label>
														<span><i class="icon-skill-<?php echo $row['id'];?> mr-1"></i><!--<img width="20" src="images/ball1.png">--></span>
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
									<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 div-modal-img-jopgador">
										<img class="zoom" style="border: 2px solid #fff; width: 100%;" src="images/<?php echo $imgJogador;?>.jpg">
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
		<section class="section-players search-players">
			<h1 class="mt-4">Resultados da busca: </h1>
			<div class="container">
				<div class="row boxes row-search-players">
					
				</div>
			</div>
		</section>
		<!--End Search Players Section -->

	</div>

<?php
	include_once('includes/footer.php');