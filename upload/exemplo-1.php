
<!--
Aula sobre UPLOAD de arquivos no PHP

Abaixo criamos um formulario simples em HTML
- neste formulario, nao inserimos o atributo action, entao ele vai submeter para a MESMA PÁGINA
- usamos o atributo enctype="multipart/form-data". Este atributo faz com o que o envio das informações do 
seu formulário seja em código BINÁRIO ao invés de submeter as informações como STRING
-->


<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="fileUpload">

	<button type="submit">Send</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

	$file = $_FILES["fileUpload"];

	if ($file["error"]){

		throw new Exception("Error ". $file["error"]);
		
	}

	//Abaixo a variável com o nome do diretório que vai ser criado pra receber os uploads
	$dirUploads = "uploads";

	//Mas iremos validar se um diretorio com esse nome já existe. Se não existe, será criado o diretório com o nome colocado na variável
	if(!is_dir($dirUploads)){

		mkdir($dirUploads);
	}


	/*
	Aqui abaixo usamos a function move_upload_file() pra verfifcar se o arquivo foi para a pasta temporaria, se o upload foi conluído
	e se esse arquivo existe dentro da pasta que foi criada, buscando pelo nome desse mesmo arquivo.
	*/
	if (move_uploaded_file($file["tmp_name"], $dirUploads. DIRECTORY_SEPARATOR . $file["name"])){

		echo "Upload realizado com sucesso!";

	}else{

		//Caso a function acima retorne false, temos uma exception para tratar e comunicar o erro.
		throw new Exception("Não foi possível realizar o upload.");
		
	}


}

?>