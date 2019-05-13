<?php

class Ragazza{

	//todos veem
	public $occhi;
	public $capelo;
	public $boca;
	public $pele;

	//
	protected $opcaoSexual;


	//
	private $salario;



	public function getOcchi(){
		return $this->occhi;
	}


	public function setOcchi($arg){
		$this->occhi = $arg;
	}


	public function setSalario($arg){
		$this->salario = $arg;
	}

	public function getSalario(){
		return $this->salario;
	}


}


$obj = new Ragazza();

/*
$obj->setOcchi("azuis");
$obj->setSalario(1.300);

$valOcchi = $obj->getOcchi();
$valSalario = $obj->getSalario();

//echo $valOcchi;
echo "<br/>";
//echo $valSalario;
*/
	

?>


<h1>Class</h1>

<hr/>
<br/>
<br/>

<form action="" method="get" name="form">
	<label>Olhos: </label><input type="text" name="olhos"><br/><br/>
	<label>Salario: </label><input type="text" name="salario"><br/><br/>
	<input type="submit" value="enviar">
</form>

<br/>
<br/>
<hr/>


<?php

$valOlhos =  $_GET['olhos'];
$valSalario =  $_GET['salario'];


//echo $valOlhos;
//echo "<br/>";
//echo $valSalario;


$obj->setOcchi($valOlhos);
$obj->setSalario($valSalario);

echo $obj->getOcchi();
echo "<br/>";
echo "<br/>";
echo $obj->getSalario();





?>