<html>

	<head> <title>Alteração Efetuada</title> </head>

	/* ação ativivada quando é clicado o botão de alterar dados de um aluno */

	<?php


			require "esta_logado.php";


		$codi = $_GET["codigo"];
		$nome = $_POST["nome"];
		$endereco = $_POST["endereco"];
		$idade = $_POST["idade"];
		$regime = $_POST["regime"];
		$sexo = $_POST["sexo"];
		$observacao = $_POST["observa"];

		include 'conexao.php';
		

		$sql = "UPDATE Aluno SET al_nome='$nome', al_endereco='$endereco', al_idade=$idade, re_codigo=$regime, al_sexo='$sexo', al_observacao='$observacao' WHERE al_codigo='$codi'";

		if ($conn->query($sql) === TRUE) 
		{
		  echo "New record created successfully";
		} 
		else 
		{
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	?>
	
	<script>
		alert('Dados alterados com sucesso!');
		location.href = "relatorio.php";
	</script>
	
</html>