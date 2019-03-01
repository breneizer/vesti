<?php
		if(! isset($_GET['id']) ){
		die("A página de exclusão de dados só pode ser chamada via página de listagem.");
}


			
			
			$conn=mysqli_connect("localhost", "root","") or
						die("Erro na conexao com o servidor MYSQL");
			mysqli_select_db($conn, "help") or
						die("erro na selecao do banco help:" . mysqli_error($conn));
						
		$sql="DELETE FROM cargos WHERE id=$id";
		mysqli_query($conn, $sql) or
			die("Erro na exclusao  $id:". mysqli_error($conn) ) ;
			echo " $id excluído com sucesso<hr>";

?>