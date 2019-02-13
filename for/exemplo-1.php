<?php

//INSTRUÇÃO FOR
//ESTRUTURA DA INSTRUÇÃO FOR

//INÍCIO ; FIM; INCREMENETO OU DECRMENTO

//EX: $i = 0; $i <= 10; $i++


for($i = 0; $i < 100; $i++){

	
	if($i > 30 && $i <= 70){continue;}

	if($i > 80){
		echo $i ." "; 
		break;
	}


	echo $i . "<br/>";

}

?>