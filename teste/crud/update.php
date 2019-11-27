<?php

$getId = $_GET["id"];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="atualizado.php?id=<?php echo $getId; ?>" method="GET">
	<input type="hidden" name="id" value="<?php echo $getId; ?>"><br/><br/>

	<label>Nome de usuario: </label>
	<input type="text" name="login"><br/><br/>

	<label>Digite uma senha: </label>
	<input type="text" name="senha"><br/><br/>
	<input type="submit" name="btn-cadastro" value="Atualizar">
</form>

</body>
</html>
