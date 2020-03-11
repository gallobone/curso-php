<?php


require_once("config.php");


echo "<h1>Times</h1><br/>";

echo "<br/>";



$obj = new Times();

$obj->setNome("Dragoes de Botafogo");

echo $obj->getNome();

echo "<br/>";


$sql = new Sql();
$results = $sql->select('SELECT * FROM tb_times');

//echo json_encode($results);

echo "<br/>";
echo "<br/>";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2" cellpadding="4" cellspacing="2">
		<tr>
			<td>Time</td>
			<td>País</td>
		</tr>
		<?php foreach ($results as $rows) : ?>
			<tr>
				<td><?php echo $rows['nome'];?></td>
				<td><?php echo $rows['nacionalidade'];?></td>
			</tr>
		<?php endforeach;?>
		<tr></tr>
	</table>

</body>
</html>