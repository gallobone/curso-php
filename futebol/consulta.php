<?php

require_once("config.php");

//if(isset($_POST["data"])){

	$sql = new Sql();

	$results = $sql->run_query('SELECT * FROM tb_times');
	echo json_encode($results);
	
	//while ($row = $results) {

	//$data["nome"] = $row["nome"];
	//	$data["cidade"] = $row["cidade"];
	//}

	//echo json_encode($data);
	

//}




?>
