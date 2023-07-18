<html>

	<head> <title>Cadastro Efetuado</title> </head>

	/* ação ativivada quando é clicado o botão de cadastrar cadastrar um aluno */

	<?php
	

			require "esta_logado.php";



		$nome = $_POST["nome"];
		$endereco = $_POST["endereco"];
		$idade = $_POST["idade"];
		$regime = $_POST["regime"];
		$sexo = $_POST["sexo"];
		$observacao = $_POST["observa"];

		include 'conexao.php';

		$sql = "INSERT INTO Aluno (al_nome, al_endereco, al_idade, re_codigo, al_sexo, al_observacao) VALUES ('$nome', '$endereco', $idade, $regime, '$sexo', '$observacao')";

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	?>
	
	<script>
		alert('Aluno cadastrado com sucesso!');
		location.href = "cadastro.php";
	</script>
	
</html>