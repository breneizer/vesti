<?php
	$duvida   = $_POST['duvida'];
	$link     = $_POST['link'];
	$foto     = $_FILE['foto']['name'];
	
	echo "<hr>";
	echo "<h2>Dados Recebidos</h2>";
	echo "Nome:" . $duvida . "<br>";
	echo "Senha:" . $link. "<br>";
	


		if(isset($_FILES['foto'])){
		if($_FILES["foto"]["error"] > 0) {
			echo "Erro no upload do arquivo (da foto): " .
			$_FILES["foto"]["error"] . "<br>"; }
		else{
			$arquivo = $_FILES["foto"]["name"];
			$tipoArquivo= $_FILES["foto"]["type"];		
			$tamanhoArquivo= $_FILES["foto"]["size"] / 1024;
			$pastaArquivo= $_FILES["foto"]["vesti_name"];
		}	
		}
?>