<html>

	<head> 
		<meta charset="utf-8">
		<title>Criar Nova Conta</title>
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
		<h3 align="center" style="background-color:#800000; color:#FFD700;">Crie uma Nova Conta</h3>

		<form action="formCadastroUsuario.php" method="post" >




			<table border=1 align="center" >
				
				<tr  style="height:50px"> <th style="background-color:#800000; color:#FFD700;"> &#160 Usuario &#160  </th> <td style="background-color:#800000; color:#FFD700;"> <input type="text" name="usuario" style="background-color:#F0E68C;" > </td> </tr>
				<tr  style="height:50px"> <th style="background-color:#800000; color:#FFD700;"> Senha </th> <td style="background-color:#800000; color:#FFD700;"> <input type="password" name="senha" style="background-color:#F0E68C;"> </td> </tr>

			</table>
			
			<p align = "center"> <a href="login.php"><input type = "button" value="Voltar" style="background-color:#F0E68C;"></a> <input type="submit" value="Cadastrar" style="background-color:#F0E68C;"> </p>

			
			

		</form>
		
	</body>

</html>