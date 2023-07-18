<!DOCTYPE HTML>
<html>

	<head> <title>Detalhes</title> <meta charset="uft-8"> </head>

	<body>
	
		<?php
			require "esta_logado.php";
		?>

		<h3 align="center" style="background-color:#800000; color:#FFD700;">Detalhamento do Aluno</h3>
	
	
		<style>
			body 
			{
				background-image: url('teste.jpg');
			}
		
		
			table 
			{
			  border-collapse: collapse;
			  width: 100%;
			}

			tr 
			{
			  border-bottom: 1px solid #ddd;
			  border-top: 1px solid #000000;
			  border-left: 1px solid #000000;
			  border-right: 1px solid #000000;
			}
		</style>
		
		
		<table border=1 align="center" width="50%">
			<tr style="background-color:#800000;">	<th style="color:#FFD700;">Cód.</th> <th style="color:#FFD700;">Nome</th> <th style="color:#FFD700;">Endereço</th> <th style="color:#FFD700;">Idade</th> <th style="color:#FFD700;">Regime</th> <th style="color:#FFD700;">Sexo</th> <th style="color:#FFD700;">Observação</th>	</tr>
	
			<?php
				include 'conexao.php';
				$codi = $_GET["codigo"];

				$sql = "SELECT * FROM aluno al, regime re, sexo se WHERE al.al_codigo = '$codi' and re.re_codigo = al.re_codigo and se.se_cod=al.al_sexo";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				
				if ($result->num_rows > 0) 
				{
					$cod = $row["al_codigo"];
					$nome = $row["al_nome"];
					$endereco = $row["al_endereco"];
					$idade = $row["al_idade"];
					$regime = $row["re_descricao"];
					$sexo = $row["se_descricao"];
					$observa = $row["al_observacao"];
			?>
							<tr style="background-color:#F0E68C;"> 
							
								<td align="center"> <?php echo $cod ?> </td> 
								<td align="center"> <?php echo $nome ?> </td> 
								<td align="center"> <?php echo $endereco ?> </td> 
								<td align="center"> <?php echo $idade ?> </td> 
								<td align="center"> <?php echo $regime ?> </td> 
								<td align="center"> <?php echo $sexo ?> </td> 
								<td align="center"> <?php echo $observa ?> </td> 
							</tr>
							
		</table>
					<p align = center> <button onclick="history.back()" style="background-color:#F0E68C;">Voltar</button> <a href = "alterar.php?codigo=<?php echo $row ["al_codigo"]?>"><input type = "button" value = "Alterar" style="background-color:#F0E68C;"></a>					
					<a href = "exclusao.php?codigo=<?php echo $row ["al_codigo"]?>"><input type = "button" value = "Excluir" onclick = "return confirm ('Confirmar exclusão?');" style="background-color:#F0E68C;"></a> </p>


					
			<?php
					
				}
								
				else 
				{
					echo "Nenhum resultado encontrado";
				}
								
				$conn->close();	
			?>
		</table>
	
	</body>


</html>