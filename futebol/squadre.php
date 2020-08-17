<?php

require_once("config.php");


$sql = new Sql();
$results = $sql->run_query('SELECT * FROM tb_times');


require_once('includes/header.php');
?>

<section class="section-squadre mt-5">
	<div class="container pt-5">
		<div class="row boxes">
			<?php foreach($results as $row) :?>
				
				<div class="col-2 mt-4 mb-4 text-center"><img style="max-height:140px; max-width: 190px;" src="images/squadre/<?php echo $row['path_simbolo'];?>"></div>

			<?php endforeach; ?>
		</div>
	</div>
</section>






<?php
require_once('includes/footer.php');
?>