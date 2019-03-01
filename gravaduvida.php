
<?php 
 // duvida - para o texto de duvida 
 // foto - para anexar a foto da duvida
 // link - para anexar o link com o video da duvida
 // id - primary key da tabela
		
		$link    = $_POST ['link'];
		$duvida  = $_POST ['duvida'];

	
	$conn= mysqli_connect('localhost' , 'root', '') or
	die('Erro no acesso ao servidor MYSQL.' ) ;
		
		
	mysqli_select_db($conn, "help") or
						die("erro na selecao do banco help:" . mysqli_error($conn));
						
					$sql     = "INSERT INTO ajudaa (duvida) VALUES ('$duvida')";
					$sqll    = "INSERT INTO ajudaa (link) VALUES ('$link')";

					mysqli_query($conn, $sqll) or	
						die("Erro na na isercao de um novo link:" . mysqli_error($conn));
						
					mysqli_query($conn, $sql) or	
						die("Erro na na isercao de uma nova duvida:" . mysqli_error($conn));
						
					echo"Link: <b> $link </b> Gravado com sucesso!!<br/> ";	
					echo"Duvida: <b> $duvida </b> Gravada com sucesso!! <hr>";

	
		
?>

Clique <a href="help.html"> aqui </a> para voltar para "me ajuda".