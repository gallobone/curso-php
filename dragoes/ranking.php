<?php

require_once('config.php');

include_once('includes/header.php');


$obj = new Pontuacao();

$results = $obj->exibeRanking($id_usuario);



?>	

	<div class="container mt-5">
		<section class="section-ranking">
			<?php foreach($results as $row) :?>
				<?php 
					$valorTotalPontuacao = $row['pontuacao'];
					$mediaPontuacao = $valorTotalPontuacao / 6;
					number_format($mediaPontuacao, 2, '.', '')."<br/>";
				?>
			<div class="info-ranking">
				<h3 class="anton text-fade"><?php echo utf8_encode($row['apelido']);?></h3>
				<p><span class="anton">pt's: </span><span class="anton dark-green" style="font-size: 2.5rem;"><?php echo number_format($mediaPontuacao, 2, '.', ''); ?></span></p>
			</div>
			<?php endforeach ;?>
		</section>
	</div>

<?php
	include_once('includes/footer.php');