<?php

$pessoas = array(
	"Nome" => "João",
	"Idade" => 20,
	
	 );



foreach ($pessoas as $key => &$value) {
	

	if(gettype($value) === 'integer') $value += 20;
	
	echo $key ." : ". $value ."<br/>";
}

print_r($pessoas);

?>