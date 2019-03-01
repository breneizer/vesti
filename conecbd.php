<?php 

	funcion conectarBD(){
		$host= "host = localhost";
		$port= "port-5432";
		$dbname="dbname=helpme";
		$user="user=dbhelpme";
		$password="password-3585743";
	}		
	
		$bd = pg_connect("$host $port $dbname $user $password");
		
?>