<html>

	<?php
		
		
		session_start();
		
		if($_SESSION["Logado"] == 0)
		{
	?>
				<script>
					alert('Logue-se Primeiro!');
					location.href = "login.php";
				</script>

	<?php
		}
	?>
	
</html>
