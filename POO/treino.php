<?php



class TimeDragoes{

	private $goleiro;
	private $zagueiro;
	private $alaEsquerdo;
	private $alaDireito;
	private $atacante;


	//get and set goleiro
	public function getGoleiro(){
		return $this->goleiro;
	}

	public function setGoleiro($goleiro){
		$this->goleiro = $goleiro;
	}


	public function getZagueiro(){
		return $this->zagueiro;
	}

	public function setZagueiro($zagueiro){
		$this->zagueiro = $zagueiro;
	}


	public function getAlaEsquerdo(){
		return $this->alaEsquerdo;
	}
	public function setAlaEsquerdo($alaEsquerdo){
		$this->alaEsquerdo = $alaEsquerdo;
	}


	public function getAlaDireito(){
		return $this->alaDireito;
	}

	public function setAlaDireito($alaDireito){
		$this->alaDireito = $alaDireito;
	}


	public function getAtacante(){
		return $this->atacante;
	}

	public function setAtacante($atacante){
		$this->atacante = $atacante;
	}



	public function escalacao(){
		
		return array(
			"Goleiro: " =>$this->getGoleiro(), 
			"Zagueiro: " =>$this->getZagueiro(),
			"Ala Direito: "=>$this->getAlaDireito(),
			"Ala Esquerdo: "=>$this->getAlaEsquerdo(),
			"Atacante: "=>$this->getAtacante()
		);
	}
}



$objTime = new TimeDragoes();

$objTime->setGoleiro("Joel");
$objTime->setZagueiro("Gallo Bone");
$objTime->setAlaDireito("Robson");
$objTime->setAlaEsquerdo("Daniel Rozen");
$objTime->setAtacante("Willis Jackson");



//echo "<br/>";
//echo "<br/>";

//echo "Escalação Completa: " .  $objTime->escalacao();

//var_dump($objTime->escalacao());
 
$arrayTimeCompleto = $objTime->escalacao();

$timeLista = implode("<br/>", $arrayTimeCompleto);
//print $timeLista;



?>


<!DOCTYPE html>
<html>
<head>
	<title>Campo Dragões</title>
	<style type="text/css">
		body{margin:0 0; background: #135035; color: #fff;}
		
		/*.content-right{width: 49%; background: #000; border: 2px solid #000;float: left;}
		.content-left{width: 49%;background: #000; border: 2px solid #fff;float: right;}*/
		.area1{border: 5px solid #fff;position: absolute;left: 0;width: 200px; height: 400px; top: 50%; margin-top: -200px;}
		.area2{border: 5px solid #fff;position: absolute;right: 0;width: 200px; height: 400px; top: 50%; margin-top: -200px;}
		/*.area1{float: left;width: 200px; height: 400px;border: 5px solid #fff;}
		.area2{float: right;width: 200px; height: 400px;border: 5px solid #fff;}*/

		.meia-lua-esquerda {
		    border-radius: 0px 75px 75px 0px;
		    width: 70px;
		    height: 150px;
		    border: 3px solid #fff;
		    position: relative;
		    left: 200px;
		    display: block;
		    top: 50%;
		    margin-top: -75px;
		}
		.meia-lua-direita {
		    border-radius: 75px 0px 0px 75px;
		    width: 70px;
		    height: 150px;
		    border: 3px solid #fff;
		    position: relative;
		    right:77px;
		    display: block;
		    top: 50%;
		    margin-top: -75px;
		}
	</style>
</head>
<body>
	
	
	<div class="area1">
		<span class="meia-lua-esquerda"></span>
	</div>


	<div class="area2">
		<span class="meia-lua-direita"></span>
	</div>
	
	

</body>
</html>