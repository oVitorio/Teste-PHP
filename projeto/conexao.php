
<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = ""; 
	$banco = "cadastro";
		
	$conexao = @mysqli_connect($host, $user, $pass, $banco ) 
	or die ("Problemas com a coneão do Banco de Dados");


?>

