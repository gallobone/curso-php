<?php

//vamos criar um CRUD

/*

TEMOS QUE TER UM ARQUIVO DE CONFIG que carrega as classes utilizadas

TEMOS QUE TER AS CLASSES QUE irão carregar os atributos, geters and seteres e metodos

Temos que ter um arquivo index.php (este aqui), no qual somente executaremos todas as chamadas.

*/

//Aqui estou chamando meu arquivo de configuração, onde carrego as classes.
require_once("config.php");


//SELECT 
$start = new Sql();
$results = $start->select("SELECT * FROM tb_usuarios");
//echo json_encode($results);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
</head>
<body>

<h1>Gallo Bone PHP</h1>


<p>Página de testes para funções em PHP</p>


<div>
	<form name="consulta" action="index.php" method="POST">
		<input type="submit" value="consulta"/>	
	</form>
	
</div>
<br/>

<div>
	
	<table border="1" cellpadding="3" cellspacing="3">
		<thead>
			<tr>
				<th>ID:</th>
				<th>login:</th>
				<th>Senha:</th>
				<th>Data de Cadastro:</th>
				<th>Ações:</th>
			</tr>

			<?php foreach ($results as $rows) :?>
			  <tr class="item_row">
		        <td> <?php echo $rows['idusuario']; ?></td>
		        <td> <?php echo $rows['login']; ?></td>
		        <td> <?php echo $rows['senha']; ?></td>
		        <td> <?php echo $rows['dtcadastro']; ?></td>
		        <td><a href='delete.php?id=<?php echo $rows['idusuario']; ?>'>DELETAR</a> | <a href="atualizar.php">ATUALIZAR</a></td>
			  </tr>
			<?php endforeach;?>

		</thead>
	</table>
</div>

<br/>
<br/>

<div>
	<a href="insert.php">INSERIR</a>
</div>


</body>
</html>