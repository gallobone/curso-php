<?php


//Aula sobre como ler conteúdo de arquivos no PHP

//Usando os métodos fgets e fready
//Diferença entre FGETS e FREADY

//fgets lê linha por linha do arquivo todo e fready você precisa especificar quantos bytes do arquivo voce deseja ler.


$filename = "usuarios.csv";

if(file_exists($filename)){

	//abaixo usando o parametro "r" na function fopen para somente ler o arquivo.
	$file = fopen($filename, "r");

	//Aqui, usamos o explode através das virgulas, para quebrar em um array o arquivo CSV. Lembrando que o implode faz o contrário, ele junta elementos de um array transformando em uma string.
	$headers = explode(",", fgets($file));

	//Criamos a variável data que por hora é um array vazio, porem depois vai ser populada com o retorno do while.
	$data = array();

	while ($row = fgets($file)) {
		
		//Aqui, dentro do while, para pegar todas as linhas do CSV, convertemos o csv(que é a variável $file) em array e jogamos na var $rowData; 
		$rowData = explode(",", $row);

		//A variável $linha será o array que receberá o valor de 
		$linha = array();

		//Abaixo criamos um for pra contar quantas posições tem o array $header, ou seja, quantas colunas tem o header do arquivo.
		for ($i=0; $i < count($headers); $i++) { 
			
			//Aqui abaixo separamos 'chave' e 'valor' do que foi encontrado no arquivo CSV.
			//A chave ele pega pelo headers e o valor é pego pelo 
			$linha[$headers[$i]] = $rowData[$i];
		}

		array_push($data, $linha);
	}

	//var_dump($headers);

	fclose($file);

	echo json_encode($data);
}



?>