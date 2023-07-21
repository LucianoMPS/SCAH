<html>

	<head> <title>Cadastro Efetuado</title> </head>

	/* ação ativivada quando é clicado o botão de cadastrar novo usuario */

	<?php
	
		$user = $_POST["usuario"];
		$key = $_POST["senha"];

		include 'conexao.php';

		$sql = "INSERT INTO usuarios VALUES ('$user', '$key')";

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	?>
	
	<script>
		alert('Usuario cadastrado com sucesso!');
		location.href = "login.php";
	</script>
	
</html>