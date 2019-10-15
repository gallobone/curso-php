<?php

/**
* 
*/
class Profissionais{
	
	public $nome;
	public $idade;
	public $cargo;
	protected $salario = "3.000";



	public function getNome(){
		return $this->nome;
	}

	public function setNome($param){
		$this->nome = $param;
	}



	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($param){
		$this->idade = $param;
	}



	public function getCargo(){
		return $this->cargo;
	}

	public function setCargo($param){
		$this->cargo = $param;
	}


}


class RecursosHumanos extends Profissionais{
	public function getSalario(){
		return $this->salario;
	}

	public function setSalario($param){
		$this->salario = $param;
	}
}


$obj = new Profissionais();

$obj->setNome("Fernando");
echo $obj->getNome();
echo "<br/>";

$obj->setIdade("34");
echo $obj->getIdade();
echo "<br/>";


$obj->setCargo("Analista de Sistemas");
echo $obj->getCargo();
echo "<br/>";

$obj2 = new RecursosHumanos();
echo $obj2->getSalario();


?>