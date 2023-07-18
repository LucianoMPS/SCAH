<html>

	<head> 
		<meta charset="utf-8">
		<title>Login</title>
	<head>

	<body>
	
		<style>
			body 
			{
				background-image: url('teste.jpg');
			}
			
			table 
			{
				border-collapse: collapse;
			}

			tr 
			{
			  border-bottom: 2px solid #000000;
			  border-top: 2px solid #000000;
			  border-left: 2px solid #000000;
			  border-right: 2px solid #000000;
			}
		
		</style>
		
	<?php 
		session_start();
		$_SESSION["Logado"] = 0;
	?>
	
	
		<h3 align="center" style="background-color:#800000; color:#FFD700;">Entrar</h3>

		<form action="autenticacao.php" method="post" >

	
			<table border=1 align="center">
				<tr style="height:40px; background-color:#800000"> <th style="color:#FFD700;"> &#160 Usuário &#160 </th> <td> &#160  <input type="text" name="usuario" style="background-color:#F0E68C; width: 200px;"> &#160 </td> </tr>
				<tr style="height:40px; background-color:#800000"> <th style="color:#FFD700;"> Senha </th> <td> &#160 <input type="password" name="senha" style="background-color:#F0E68C; width: 200px;"> &#160 </td> </tr> 
				<tr> <td align="center" colspan="2" style="height:50px; background-color:#800000"> <input type="submit" value="                            Entrar                            " style="background-color:#F0E68C; height:30px"></td> </tr>
				<tr> <td align="center" colspan="2" style="height:50px; background-color:#800000;"> <a href="cadastro_usuario.php" style="color:#FFD700;"> criar nova conta</a> </td> </tr>
			</table>
			
			
			

		</form>
		
	</body>

</html>
