<html>

	<title>Login</title>
	
	<?php
		include "conexao.php";

		$user = $_POST["usuario"];
		$password = $_POST["senha"];
		
		$sql = "SELECT * FROM usuarios WHERE usuario = '$user' and senha = '$password'";
		$result = $conn->query($sql);
					
		if ($result->num_rows > 0) 
		{
			session_start();
			$_SESSION["Logado"] = 1;
	?>
			<script>
				alert('Login realizado com sucesso!');
				location.href = "listagem_rotinas.php";
			</script>
	<?php
		}
		
		else
		{
	?>	
			<script>
				alert('Usuario ou senha invalidos!');
				location.href = "login.php";
			</script>
	<?php
		}
		
		$conn->close();
	?>
	
</html>

