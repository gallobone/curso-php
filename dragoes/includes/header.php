<?php 

//header

session_start();

$login = $_SESSION["login"];
$id_usuario = $_SESSION["id_usuario"];


if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['id_usuario']) == true))
{
  	unset($_SESSION['login']);
  	unset($_SESSION['id_usuario']);

  	header('location:login.php?login=false');
 }



?>
<!DOCTYPE html>
<html>
<head>
	<title>Dragons - All Stars</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->	    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">




	<script type="text/javascript" src="js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body class="body">
	<div class="all">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-12 mt-2 mb-1">
						<h1 class="dark-green frijole">Hello, Mr. <span class='welcome-msg nosifer dark-red'><?= $login; ?> !!!</span></h1>	
						<input id="idUsuario" type="hidden" name="usuario" value="<?= $id_usuario;?>">
					</div>
				</div>
			</div>

			<div class="div-menu">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
						<div class="collapse navbar-collapse">
							
						  	<ul class="navbar-nav">
							    <li class="nav-item active">
							    	<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							    </li>
							    <li class="nav-item">
							    	<a class="nav-link" href="#">Players</a>
							    </li>
							    <li class="nav-item">
							    	<a class="nav-link" href="ranking.php">Ranking</a>
							    </li>
						  	</ul>
						  	
						</div>
					</nav>	
				</div>
			</div>
		</header>
