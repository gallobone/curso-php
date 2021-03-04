<?php

include_once('includes/header.php');

$obj = new Jogadores();
$listaJogadores = $obj->getJogadores();

?>	

   	<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.0/knockout-min.js"></script>

  	<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
  
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<div class="container mt-5">
		<section class="section-team">
			<div class="container">
				<div class="row">
					<div class="col-3 div-team-configs">
						<div class="team-configs-area d-none">
							<h3 class="anton">Defina o esquema</h3>
							<!-- Exemplo de uso de knockout js
							<div>
								<p data-bind="text: name"></p>
								<p data-bind="text: age"></p>
								<p data-bind="text: country"></p>
							</div>
							-->
							<div>
								<form name="form-formacao">
									<input type="radio" name="tatica" value="4-4-2">
									<label>4-4-2</label><span>&nbsp;&nbsp;</span>

									<input type="radio" name="tatica" value="4-3-3">
									<label>4-3-3</label><span>&nbsp;&nbsp;</span>

									<input type="radio" name="tatica" value="3-5-2">
									<label>3-5-2</label><span>&nbsp;&nbsp;</span>

									<input type="radio" name="tatica" value="4-5-1">
									<label>4-5-1</label><span>&nbsp;&nbsp;</span>
								</form>
							</div>
						</div>
						<div class="team-configs-area">
							<h3 class="anton">Escolha os jogadores</h3>
							<div>
								<table class="table table-dark table-hover">
									<tr class="jogador-1">
										<td><span>Jogador-1 (GK)</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>
									<tr class="jogador-2">
										<td><span>Jogador-2</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-3">
										<td><span>Jogador-3</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-4">
										<td><span>Jogador-4</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-5">
										<td><span>Jogador-5</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-6">
										<td><span>Jogador-6</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-7">
										<td><span>Jogador-7</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-8">
										<td><span>Jogador-8</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-9">
										<td><span>Jogador-9</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-10">
										<td><span>Jogador-10</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

									<tr class="jogador-11">
										<td><span>Jogador-11</span></td>
										<td>Add</td>
										<td>Delete</td>
									</tr>

								</table>
								
							</div>
						</div>
					</div>
					<div class="col-9" id="draggableContentArea">
						<div class="campo">
							<img class="img-soccer-field-base" width="100%" src="images/campo-v3.jpg">
						</div>

						<div class="formacao icon-user-plus" id="draggable">
							<span id="position_jogador-1"></span>
							<span id="position_jogador-2"></span>
							<span id="position_jogador-3"></span>
							<span id="position_jogador-4"></span>
							<span id="position_jogador-5"></span>
							<span id="position_jogador-6"></span>
							<span id="position_jogador-7"></span>
							<span id="position_jogador-8"></span>
							<span id="position_jogador-9"></span>
							<span id="position_jogador-10"></span>
							<span id="position_jogador-11"></span>
						</div>
					</div>

				</div>


				<div class="row">
					<div class="col-12">
						<div class="modal fade" id="modalSelecao" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
						      		<div class="modal-header">
						      			<h3 class="anton white">Escolha os melhores</h3>
						      			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          			<span aria-hidden="true">&times;</span>
						        		</button>
									</div>
									<div class="modal-body">
										<div class="row mb-4">
											<div class="selecao-search-bar col-12">
												<input style="width: 100%" type="search" name="search" placeholder="procurar...">
											</div>
										</div>
										<div class="row">
											<?php foreach($listaJogadores as $row) :?>
											<div id="jogador-<?php echo $row['id'] ;?>" title="<?php echo $row['image_path'] ;?>" class="select-jogador col-2 text-center">
												<div><img style="max-height: 80px; width: auto;" src="images/<?php echo $row['image_path'];?>.jpg"></div>
												<h5 class="anton white"><?php echo utf8_encode($row['apelido']); ?></h5>	
											</div>
											<?php endforeach; ?>
										</div>
										<?php $idJogador = $row['id'];?>
										<?php $imgJogador = $row['image_path'];?>
										
									</div>
									<div class="modal-footer">
								    	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								    	<button type="button" class="btn btn-green">Salvar</button>
								    </div>			
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>			
		</section>
	</div>

	<script type="text/javascript">
		var viewModel = {
			name: "Gallo Bone",
			age: "36",
			country: "Italy"
		}

		function AppViewModel(){
		//do something
		}

		ko.applyBindings(viewModel);

	</script>

<?php
	include_once('includes/footer.php');