<?php

require_once('config.php');

include_once('includes/header.php');


$obj = new Pontuacao();

$results = $obj->exibeRanking($id_usuario);



?>	

	<div class="container">
		<section class="section-ranking">
			<?php foreach($results as $row) :?>
			<div class="info-ranking">
				<h3><?php echo utf8_encode($row['apelido']);?></h3>
				<p>Pontuação: <?php echo $row['pontuacao'];?></p>
			</div>
			<?php endforeach ;?>
		</section>
	</div>

<?php
	include_once('includes/footer.php');