<!DOCTYPE HTML>

<html>

	<head> <title>Aluno Deletado</title> <meta charset="uft-8"> </head>

	<?php 
		require "esta_logado.php";

		include "conexao.php";
		
		$cod = $_GET["codigo"];
		
		$sql = "DELETE FROM aluno WHERE al_codigo = '$cod' ";
		
		if($conn->query($sql))
		{
			
	?>
		<p align="center">Registro Excluido com Sucesso!</p>
		<a href="relatorio.php"><p align="center">Retornar<p></a>

	<?php
		}
		
		else
		{
			echo"Erro de Sistema!";
		}
	?>

</html>