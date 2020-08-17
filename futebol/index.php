<?php

require_once("config.php");

//echo "<h1>Times</h1><br/>";
//echo "<br/>";
//$obj = new Times();
//$obj->setNome("Dragoes de Botafogo");
//echo $obj->getNome();
//echo "<br/>";


$sql = new Sql();

$results = $sql->run_query('SELECT * FROM tb_times');

//echo json_encode($results);
require_once('includes/header.php');

?>

		<section class="section-squadre mt-5">
			<div class="container pt-5">
				<div class="row">
					<h2 class="mb-3">Le Squadre</h2>
					<table class="table" border="2" cellpadding="4" cellspacing="2">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Scudo</th>
								<th scope="col">Squadre</th>
								<th scope="col">Città</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($results as $rows) : ?>
								<tr>
									<td><img style="max-width: 30px; max-height: 30px;" src="images/squadre/<?php echo $rows['path_simbolo'] ?>"></td>
									<td><?php echo $rows['nome'];?></td>
									<td><?php echo $rows['cidade'];?></td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>	
				</div>
			</div>
		</section>


<?php
require_once('includes/footer.php');
?>
	
	