<html>

	<head> 
		<meta charset="utf-8">
		<title>Alterar Dados</title>
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
	
		<h3 align="center" style="background-color:#800000; color:#FFD700;">Alterar Dados do Aluno</h3>

		<?php
				require "esta_logado.php";

				include 'conexao.php';
				$codi = $_GET["codigo"];

				$sql = "SELECT * FROM aluno WHERE al_codigo = '$codi'";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) 
				{
					$aluno = $result->fetch_assoc();
				
		?>
		
		<form action="formAlterar.php?codigo=<?php echo $aluno["al_codigo"]; ?>" method="post" >
		
			<table border=1 align="center" style="background-color:#800000;">
				<tr> <td align="center" style="color:#FFD700;">Nome:</td> <td style="background-color:#F0E68C;"> <input type="text" name="nome" value="<?php echo $aluno["al_nome"] ?>" style="width: 390px;"> </td> </tr>
				<tr> <td align="center" style="color:#FFD700;">Endereço:</td> <td style="background-color:#F0E68C;"> <input type="text" name="endereco" value="<?php echo  $aluno["al_endereco"] ?>" style="width: 390px;"> </td> </tr>
				<tr> <td align="center" style="color:#FFD700;">Idade:</td> <td style="background-color:#F0E68C;"> <input type="number" name="idade" value="<?php echo  $aluno["al_idade"] ?>" min="15" max="80"> </td> </tr>
				
				<tr> <td align="center" style="color:#FFD700;"><label for="regime" > &#160 Regime de Entrada: &#160 </label></td> 
					<td style="background-color:#F0E68C;"> 
						<select name="regime" id="regime">
						<?php
							include 'conexao.php';
							
							$sql="SELECT * FROM regime";
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) 
							{
								while($regime = $result->fetch_assoc()) 
								{
							?>
								  <option value="<?php echo $regime['re_codigo'];?>" <?php if($regime['re_codigo']==$aluno['re_codigo'])echo "selected";?> > <?php echo $regime['re_descricao'];?> </option>
						<?php
								}
							}
						?>  
						</select>
					</td>
				</tr>

				
				<tr > <td align="center" style="color:#FFD700;" >Sexo</td>
					<td style="background-color:#F0E68C;">
						<?php
							$sql="SELECT * FROM sexo";
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) 
							{
								while($sexo = $result->fetch_assoc()) 
								{
						?>
							<input type="radio" id="<?php echo $sexo["se_descricao"] ?>" name="sexo" value="<?php echo $sexo["se_cod"] ?>" <?php if($sexo['se_cod']==$aluno['al_sexo'])echo " checked='checked' ";?> >
							<label for="<?php echo $sexo["se_descricao"] ?>"> <?php echo $sexo["se_descricao"] ?> </label>
							
						<?php
								}
							}
						?>
					</td>
				</tr>
				

				
				<tr>
					<td align="center"><label for="observa" style="color:#FFD700;">Observações:</label></td>
					<td style="background-color:#F0E68C;">
						<textarea id="observa" name="observa" rows="4" cols="50" ><?php echo $aluno["al_observacao"] ?></textarea>
					</td>
				</tr>
				
			</table>
			
			<p align="center">  
				<a href="relatorio.php"><input type = "button" value="Voltar" style="background-color:#F0E68C;"></a>
				<input type="submit" value="Alterar" style="background-color:#F0E68C;">  
			</p>
			
		</form>

		
		<?php
					
				}
						 
						
				else 
				{
					echo "0 results";
				}
								
				$conn->close();
		?>
		
	</body>
	
</html>