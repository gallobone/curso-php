<?php


$frases = [
	'Malhuco, pra quem tá se afogando, Jacaré vira tronco!',

	'Tem que mergulhar na piscina sem saber nadar, "malhuco.',

	'Eu sempre mirei nas estrelas mais brilhantes e só acertava os meteoritos. Mas aí eu vi que os meteoritos também tem o seu brilho, sacou, "Malhuco"?',

	'Troquei o cigarro de filtro, pelo cigarro de ervas... Aí eu vi que, apenas, estava deixando de tomar um soco do Mike Tyson para tomar um do Holyfield!',

];



shuffle($frases);


////////////////

////AQUI ABAIXO, OUTRA MANEIRO DE RANDOMIZAR

$proverbios = array(
	"texto 1", 
	"texto 2", 
	"texto 3", 
	"texto 4", 
	"texto 5"
);

$randomiza = array_rand($proverbios);
//echo $proverbios[$randomiza];
/////////////////
	


$arrayColors = array(
	'#940173',
	'#ff1d30',
	'#4bc500',
	'#47a2ea',
	'#ff8f00'
	);

$randomizaColors = array_rand($arrayColors);



?>


<!DOCTYPE html>
<html>
<head>
	<title>Fersil - Mentor</title>
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<style type="text/css">
		html {cursor:url(img/maozinha1.cur), auto;}

		body{margin: 0 0;height: 100%; width: 100%;background: <?php echo  $arrayColors[$randomiza]; ?> ;}
		header{background: url('img/toldo2.png') repeat; height: 120px; width: 100%;}
		.container{width: 1100px; margin: 0 auto;}

		.section-initial{height: 670px;}
		.section-draggable{background: url('img/bg-bath.jpg'); height: 675px;width: 100%;background-size: contain;}
		.section-fersil-room{background: url('img/bg-fersil-rom.jpg'); height: 675px;width: 100%;background-size: cover;}

		.container h1{color: #000;font-family: 'Luckiest Guy', cursive;color: #fbff3e;font-size: 100px;text-shadow: 4px 4px 9px #000;text-align: center;}
		.container h2{/*color: #ff0000;*/color:#ffffff;font-family: 'Luckiest Guy', cursive;font-size: 40px;text-shadow: 2px 5px 0px #000;}
		.fersil-msg{display: none;}
		.fersil-msg h2 img{float: left; margin-right: 20px;}
		button{cursor:url(img/maozinha1.cur), auto; font-family: 'Luckiest Guy', cursive;padding: 10px;border: 11px solid #254c86!important;}

		

		.draggable{cursor: move;}
	}
	</style>

	<script type="text/javascript">
		
		$(document).ready(function(){
			$(".fersil-msg").fadeIn(900);
			//

			$( function() {
			   $( ".draggable" ).draggable();
			});

		});


	</script>

	
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">


</head>
<body>
	<div class="content">
		<header>
			<!-- <img src="img/toldo.png"> -->
		</header>
		<!--  -->
		
		<section class="section-initial">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-4 mb-5">
						<h1><big>R</big>a<big></big>nd<big>o</big>m  <big>F</big>er<big>s</big>il  <big>!!!</big></h1>
					</div>
					
					<div class="fersil-msg col-lg-12">
						<h2><img src="img/fersil1-c.png">" <?php echo $frases[0]; ?> "</h2>	
					</div>

					<div class="col-lg-12 fersil-call text-right">
						<button class="btn-primary">Call to Fersil</button>
						<!-- <input class="btn-primary" type="submit" value="Call To Fersil" /> -->
					</div>
						
				</div>
			</div>
		</section>

		<section class="section-fersil-room">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-5 pt-5">
						<h2>Fersil Room</h2>

					</div>
				</div>
			</div>
		</section>

		<section class="section-draggable">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-5">
						<span><img width="100" class="draggable" src="img/bola-basket.png"></span>
						<span><img width="300" class="draggable" src="img/guitar.png"></span>
						<span><img width="250" class="draggable" src="img/burning_guitar-original.gif"></span>
						<span><img width="250" class="draggable" src="img/cigarros.png"></span>
						<span><img src=""></span>
						<span><img src=""></span>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div>
				<?php
					//require('index-v2.html');
				?>
			</div>
		</section>


		

		
		<!--  -->
		<footer>
			
		</footer>
	</div>
</body>
</html>