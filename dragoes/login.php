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
<html class="html-login">
<head>
	<title>Dragons - All Stars</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/space.css">

	<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body class="body-login">
	<div id='stars'></div>
	<div id='stars2'></div>
	<div id='stars3'></div>

	<div class="all">

		<div class="container container-login">

			<div class="row mt-5">
				<div class="col-12">
					<div class="box-form login">

						<!--<h1 class="terror-blue monoton">Login</h1><br/>-->
						<h1 class="nosifer mutant-green text-center mb-5">M<img style="max-width: 50px;" src="images/ball3.png">nsters</h1>

						<!--<div class="logo text-center"><img src="images/logo-dbfc.png"></div>-->

						<form id="formlogin" name="formlogin" action="services/validaLogin.php" method="post">

						  <div class="form-group">
						    <!--<label for="username">Username</label>-->
						    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
						  </div>
						  
						  <div class="form-group">
						    <!--<label for="password">Password</label>-->
						    <input type="password" class="form-control" id="password" placeholder="Password" name="senha" required>
						  </div>

						  <!--<input type="button" name="" value="Login" id="bt_login" class="btn btn-primary">-->
						  <input type="submit" name="" value="Login" class="btn btn-primary btn-block">

						  <div class="div-set-cadastro">
						  	<a id="bt_display_cadastro">Cadastre-se</a>
						  </div>

						</form>
					</div>

					<div class="box-form cadastro">
						<!--<h1 class="terror-blue monoton">Login</h1><br/>-->
						<h1 class="nosifer mutant-green text-center mb-5">M<img style="max-width: 50px;" src="images/ball3.png">nsters</h1>

						<!--<div class="logo text-center"><img src="images/logo-dbfc.png"></div>-->

						<form id="formCadastro" name="formCadastro" action="services/criarConta.php" method="post">

							<div class="form-group">
							    <!--<label for="username">Username</label>-->
							    <input type="email" class="form-control" id="cadastro_email" placeholder="E-mail" name="cadastro-email" required>
						  	</div>

						  	<div class="form-group">
							    <!--<label for="username">Username</label>-->
							    <input type="text" class="form-control" id="cadastro_name" placeholder="Name" name="cadastro-name" required>
						  	</div>

							<div class="form-group">
								<!--<label for="username">Username</label>-->
								<input type="text" class="form-control" id="cadastro_username" placeholder="Username" name="cadastro-login" required>
							</div>
							  
						  	<div class="form-group">
						    	<!--<label for="password">Password</label>-->
						    	<input type="password" class="form-control" id="cadastro_password" placeholder="Password" name="cadastro-senha" required>
						  	</div>

							<!--<input type="button" name="" value="Login" id="bt_login" class="btn btn-primary">-->
							<input type="submit" name="" value="Criar Conta" class="btn btn-primary btn-block btn-orange">

							<div class="div-set-login">
							  <a id="bt_display_login">Já possuo cadastro</a>
							</div>
						</form>
					</div>

					<div class="msg mt-3 nosifer">
						<?php if($login === 'false') : ?>
								<?= "<h3 class='red-warning text-center'>Login Inválido  =/</h3><br/>";?>
						<?php elseif($login === 'no_session') : ?>
								<?= "<h3 class='strong-yellow anton text-center'>Faça o Login</h3><br/>" ;?>
						<?php elseif($login === 'exists_user') : ?>
								<?= "<h3 class='first-orange alfa-slab text-center'>Este e-mail já possui cadastro!</h3><br/>" ;?>
						<?php elseif($login === 'create_account_success') : ?>
								<?= "<h3 class='green-light anton text-center'>Cadastro realizado com sucesso.<br/> Faça o login!</h3><br/>" ;?>
						<?php elseif($login === 'incomplete_data') : ?>
								<?= "<h3 class='red-warning anton text-center'>Preencha corretamente todos os campos!</h3><br/>" ;?>
						<?php endif;?>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>