<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Dragons - All Stars</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>

<body>
	<div class="all">
		<!--<header>
			<h1>Dragões de Botafogo - 2002</h1>
		</header>-->
		
		<div class="container">
			<div class="row mt-5">
				<div class="col-12">
					<div class="box-form">

						<h1>Login</h1><br/>

						<!--<div class="logo text-center"><img src="images/logo-dbfc.png"></div>-->

						<form action="validaLogin.php" method="GET" name="formlogin">

						  <div class="form-group">
						    <label for="username">Username</label>
						    <input type="text" class="form-control" id="username" placeholder="Username" name="usuario">
						  </div>
						  
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" placeholder="Password" name="senha">
						  </div>

						  <button type="submit" class="btn btn-primary">Submit</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>