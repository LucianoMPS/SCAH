<!DOCTYPE HTML>
<html>
	<head> <title>Relatorio de Alunos</title> <meta charset="uft-8"> </head>
	
	<body>

		<?php
			require "esta_logado.php";
		?>

		<h3 align="center" style="background-color:#800000; color:#FFD700;">Relatorio de Alunos</h3>
		

		
		<style>
			body 
			{
				background-image: url('teste.jpg');
			}
		
			table 
			{
			  border-collapse: collapse;
			  width: 50%;
			}

			tr 
			{
			  border-bottom: 1px solid #000000;
			  border-top: 1px solid #000000;
			  border-left: 1px solid #000000;
			  border-right: 1px solid #000000;
			}
		</style>
		
		
			<table border=1 align="center" >
				<tr style="background-color:#800000;"  >	<th style="color:#FFD700;">Cód.</th>	<th style="color:#FFD700;">Nome</th>	<th style="color:#FFD700;">Detalhamento</th>	</tr>
				
					<?php
						include 'conexao.php';

						$sql = "SELECT al_codigo, al_nome, al_endereco FROM aluno";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) 
						{
						  // output data of each row
						  while($row = $result->fetch_assoc()) 
						  {
							$cod = $row["al_codigo"];
							$nome = $row["al_nome"];
					?>
							<tr style="background-color:#F0E68C;"> 
							
								<td align="center"> <?php echo $cod ?> </td> 
								<td align="center"> <?php echo $nome ?> </td> 
								<td align="center"> <a href="detalhamento.php?codigo=<?php echo $row["al_codigo"]; ?>">>></a> </td> 
							</tr>
					<?php
						  }
						} 
						
						else 
						{
						  echo "0 results";
						}
								
						$conn->close();
					?>

			</table>
			
			<p align="Center"> <a href = "listagem_rotinas.php"><input type = "button" value = "             Voltar             " style="background-color:#F0E68C;"></a> </p>
	</body>
</html>