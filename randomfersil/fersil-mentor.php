<?php

// $proverb1 	= "1";
// $proverb2 	= "2";
// $proverb3 	= "3";
// $proverb4 	= "4";
// $proverb5 	= "5";
// $proverb6 	= "6";
// $proverb7 	= "7";
// $proverb8 	= "8";
// $proverb9 	= "9";
// $proverb10 	= "10";


$array = [
	'Malhuco, pra quem tá se afogando, Jacaré vira tronco!',
	'Tem que mergulhar na piscina sem saber nadar, "malhuco."',
	'Eu sempre mirei as estrelas mais brilhantes e só acertava os meteoritos. Mas aí eu vi que os meteoritos também tem o seu brilho, sacou, "Malhuco"?',
	'Troquei o cigarro de filtro, pelo cigarro de ervas... Aí eu vi que, apenas, estava deixando de tomar um soco do Mike Tyson para tomar um do Holyfield!"',
];



shuffle($array);
//echo $array[0];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Fersil - Mentor</title>
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style type="text/css">
		body{margin: 0 0;height: 100%; position: absolute; width: 100%;background: #ff8f00;}
		header{background: url('img/toldo2.png') repeat; height: 120px; width: 100%;}
		.container{max-width: 1280px;margin: 0 auto;}


		.container h1{color: #000;font-family: 'Luckiest Guy', cursive;color: #fbff3e;font-size: 100px;text-shadow: 4px 4px 9px #000;}
		.container h2{/*color: #ff0000;*/color:#ffffff;font-family: 'Luckiest Guy', cursive;font-size: 50px;text-shadow: 2px 5px 0px #000;}
		.fersil-msg{display: none;}
		.fersil-msg h2 img{float: left; margin-right: 20px;}
	}
	</style>

	<script type="text/javascript">
		
		$(document).ready(function(){
			$(".fersil-msg").fadeIn(900);
		});


	</script>
</head>
<body>
	<div class="content">
		<header>
			<!-- <img src="img/toldo.png"> -->
		</header>
		<!--  -->
		<div class="container">
			<div>
				<h1><big>F</big>er<big>s</big>il <big>R</big>and<big>o</big>m <big>!!!</big></h1>
			</div>
			
			<div class="fersil-msg">
				<h2><img src="img/fersil1-c.png">" <?php echo $array[0]; ?> "</h2>	
			</div>

		</div>
		<!--  -->
		<footer>
			
		</footer>
	</div>
</body>
</html>