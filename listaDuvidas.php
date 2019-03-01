<?php 
			$conn= mysqli_connect('localhost' , 'root', '') or
				die('Erro no acesso ao servidor MYSQL.' ) ;
				
				mysqli_select_db($conn, "help") or
						die("erro na selecao do banco help:" . mysqli_error($conn));
						
			$sql = "SELECT * FROM ajudaa" ;		
	
			
			
			$registros = mysqli_query($conn , $sql) or 
					die ("Erro na consulta: " . mysqli_error($conn));

			
			echo"<h1> Listagem de Registros </h1>";
			
			
			echo "<table border='1'>";
			echo "<tr>";
			echo "			<th>Codigo   </th>";
			echo "			<th>Duvida   </th>";
			echo "			<th>Link     </th>";
			echo "</tr>";			

		
				while ($dados = mysqli_fetch_array($registros)) {
					$id      = $dados ['id'] ;
					$duvida  = $dados ['duvida'];
					$link    = $dados ['link'];
					echo "		<tr>";
					echo "			<td> $id </td>";
					echo "			<td> $duvida</td>";
					echo "			<td><a href='$link'> $link</a> </td>";
					echo "		</tr>";
	
			}
			echo "</table>";

?>
Para voltar para Home <a href="home.html"> Clique Aqui </a> 