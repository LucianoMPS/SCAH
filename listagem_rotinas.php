<html>

	<head> 
		<meta charset="utf-8">
		<title>Tela Inicial</title>
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
				position: absolute;
				top: 50%;  
				left: 50%;
				transform: translate(-50%, -50%);
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
			require "esta_logado.php";
		?>
	
		<h3 align="center" style="background-color:#800000; color:#FFD700;">Rotinas</h3>
	

		
		<table border=1 align="center" width="15%" style="background-color:#800000;">
			<tr style="height:40px;"> <td rowspan="3"> &#160 <img src="hog.jpg" alt="Italian Trulli"></td> <td align="center"> <a href = "cadastro.php"><input type = "button" value = "Cadastrar novo aluno" style="background-color:#F0E68C; height:30px;"></a> </td> </tr>
			<tr style="height:40px;"> <td align="center"> <a href = "relatorio.php"><input type = "button" value = "       Listar alunos       " style="background-color:#F0E68C; height:30px;"></a> </td> </tr>
			<tr style="height:40px;"> <td align="center"> <a href = "login.php"><input type = "button" value = "              Sair              " onclick = "alert('Até Mais!'); location.href = "login.php";" style="background-color:#F0E68C; height:30px;" </a> </td> </tr>
		
		</table>
		

	</body>

</html>
2