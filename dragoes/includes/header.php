<?php 

//header
require_once('config.php');

session_start();

$login = $_SESSION["login"];
$id_usuario = $_SESSION["id_usuario"];


if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['id_usuario']) == true))
{
  	unset($_SESSION['login']);
  	unset($_SESSION['id_usuario']);

  	header('location:login.php?login=no_session');
 }


function logOut()
{
	session_unset();
	session_destroy();

	header("location: login.php?login=null");
}

  if (isset($_GET['logout'])) {
  	logOut();
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

	<link rel="stylesheet" type="text/css" href="css/space.css">
	
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">




	<script type="text/javascript" src="js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/scripts.js"></script>

	<!--animate fonts-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body class="body">
	<div id='stars'></div>
	<div id='stars2'></div>
	<div id='stars3'></div>
	
	<div class="all">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-12 mt-2 mb-1 text-left">
						<!--<h1 class="dark-green frijole">Hello, Mr. <span class='welcome-msg nosifer dark-red'><?= $login; ?> !!!</span></h1>	
						<input id="idUsuario" type="hidden" name="usuario" value="<?= $id_usuario;?>">-->
						<h1 class="nosifer mutant-green">M<img style="max-width: 50px;" src="images/ball3.png">nsters</h1>
						<div class="username-box text-right">
							<span class="white">Hello, Mr. <span class='welcome-msg nosifer green-ocean'><?= $login; ?></span></span>	
							<input id="idUsuario" type="hidden" name="usuario" value="<?= $id_usuario;?>">
							<br/>
							<br/>
							<!--<a class="btn-logout" href="services/logOut.php">Logout</a>-->
							<a class="btn-logout" href="index.php?logout=true">Logout</a>
						</div>		
					</div>
				</div>
			</div>


			<div class="div-menu">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
							  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    	<span class="navbar-toggler-icon"></span>
							  	</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									
								  	<ul class="navbar-nav mr-auto">
									    <li class="nav-item">
									    	<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
									    </li>
									    <li class="nav-item">
									    	<a class="nav-link" href="#">Players</a>
									    </li>
									    <li class="nav-item">
									    	<a class="nav-link" href="team.php">Team</a>
									    </li>
									    <li class="nav-item">
									    	<a class="nav-link" href="ranking.php">Your Ranking</a>
									    </li>
									    <li class="nav-item">
									    	<a class="nav-link" href="general-ranking.php">General Ranking</a>
									    </li>

									    <li class="nav-item-logout menu-logout">
									    	<a class="nav-link" href="index.php?logout=true">Logout</a>
									    </li>
								  	</ul>

								  	<div class="form-inline form-search my-2 my-lg-0">
								      <input id="search_field" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
								      <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>-->
								    </div>
								    <button class="btn btn-outline-success btn-form-search my-2 my-sm-0" onclick="javascript:buscaJogadores()">Buscar</button>
								  	
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
