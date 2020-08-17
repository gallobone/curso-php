<?php


require_once('includes/header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		teste ajax	
	</title>

	<script type="text/javascript">
		$(document).ready(function(){
			
			consultaTimes();

			$("#bt_registraJogador").on('click', function(){
				insereJogador();
			});

		});


		function consultaTimes(){

			$.ajax({
			  url: 'consulta.php',
			  type: 'POST',
			  dataType: 'JSON',
			  complete: function(xhr, textStatus) {
			    //called when complete
			  },
			  success: function(data) {

			  	$.each(data, function(indice, val) {
			  		 console.log(indice, val);

			  		 var tr_str = "<tr>" +
                    "<td>" + data[indice].nome + "</td>" +
                    "<td>" + data[indice].cidade + "</td>" +
                    "</tr>";

                    $("#table tbody").append(tr_str);

                    
                    var option_times = "<option value="+data[indice].id+">"+ data[indice].nome+"</option>";
                    $("#select_times").append(option_times);

			  	});

			    //console.log("data = " + data[0].nome);
			  },
			  error: function(xhr, textStatus, errorThrown) {
			    //called when there is an error
			    alert("Não foi possível carregar os dados");
			  }
			});
		}


		function insereJogador(){
			console.log("inserindo...");

			  var nome_jogador = $("#nome_jogador").val();
			  var idade = $("#idade").val();
			  var posicao = $("#posicao_jogador").val();
			  var nacionalidade = $("#nacionalidade_jogador").val();
			  var time = $("#select_times").val();
			
			$.ajax({
			  url: 'cadastro-jogadores.php',
			  type: 'POST',
			  //dataType: 'JSON', neste caso nao tem necessidade de ser do type JSON pois o php do outro lado nao está recebendo um objeto JSON para usar como dados na função que insere
			  data: {
			  	nome_jogador: nome_jogador, 
			  	idade: idade,
			  	posicao_jogador: posicao,
			  	nacionalidade_jogador: nacionalidade,
			  	time: time
			  },
			  complete: function(xhr, textStatus) {
			    alert("complete");
			  },
			  success: function(data, textStatus, xhr) {
			    alert("Dados inseridos com sucesso");
			  },
			  error: function(xhr, textStatus, errorThrown) {
			    alert("Não foi possível inserir o jogador");
			  }
			});
			
		}


	</script>

</head>
<body>
	<section class="section-squadre mt-5">
		<div class="container pt-5">
			<div class="row">
				<table class="table" id="table" border="1">
					<thead class="thead-dark">
						<tr>
							<th>Nome</th>
							<th>Cidade</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</section>



	<section class="section-registrazione-giocatori mt-5">

		<div class="container pt-5">

			<div class="row">
				<h2>Registro Di Giocatori</h2>
				<div class="col-12 form-box">
					<!--<form action="cadastro-jogadores.php" method="POST">-->
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
								<select name="time" id="select_times" class="form-control">
									<option value="0">Scegliere una squadra</option>
								</select>
							</div>
						</div>

						<div class="form-group row">
						    <div class="col-12 mt-5 text-right">
						    	<button id="bt_registraJogador" class="btn btn-success" value="Registrazione" name="Registrazione">Registrazione</button>
						      	<!--<button type="submit" class="btn btn-primary">Sign in</button>-->
						    </div>
						</div>		
									
					<!--</form>-->
				</div>
			</div>
		</div>

	</section>

</body>
</html>