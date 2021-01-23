<?php 

$login = $_GET['login'];

//echo session_status();

switch (session_status()) {
	case PHP_SESSION_DISABLED: //conforme explicado acima, a constante PHP_SESSION_DISABLED tambem poderia ser usada aqui, no lugar do 0
		//echo "Sessão desabilitada";
		break;

	case PHP_SESSION_NONE: //conforme explicado acima, a constante PHP_SESSION_NONE tambem poderia ser usada aqui, no lugar do 1
		//echo "Sessão habilitada, mas nao iniciada";
		//header('location:index.php');
		break;

	case PHP_SESSION_ACTIVE: //conforme explicado acima, a constante PHP_SESSION_ACTIVE tambem poderia ser usada aqui, no lugar do 2
		echo "Sessão habilitada e iniciada";
		header('location:index.php');
		break;	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dragons - All Stars</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body class="body-login">
	<div class="all">
		<div class="container">
			<div class="row mt-5">
				<div class="col-12">
					<div class="box-form">

						<h1 class="terror-blue monoton">Login</h1><br/>

						<!--<div class="logo text-center"><img src="images/logo-dbfc.png"></div>-->

						<form id="formlogin" name="formlogin" action="services/validaLogin.php" method="post">

						  <div class="form-group">
						    <label for="username">Username</label>
						    <input type="text" class="form-control" id="username" placeholder="Username" name="login">
						  </div>
						  
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" placeholder="Password" name="senha">
						  </div>

						  <!--<input type="button" name="" value="Login" id="bt_login" class="btn btn-primary">-->
						  <input type="submit" name="" value="Login" class="btn btn-primary">

						</form>
					</div>

					<div class="msg mt-5 nosifer">
						<?php if($login === 'false') : ?>
								<?= "<h3 class='red-blood'>LOGIN FAILED</h3><br/>";?>
						<?php elseif($login === 'no_session') : ?>
								<?= "<h3 class='strong-yellow'>Faça o Login</h3><br/>" ;?>
						<?php endif;?>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>