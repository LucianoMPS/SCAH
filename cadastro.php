<html>

	<head> 
		<meta charset="utf-8">
		<title>Cadastro de Novos Alunos</title>
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
			require "esta_logado.php";
		?>
	
	
		<h3 align="center" style="background-color:#800000; color:#FFD700;">Cadastro do Aluno</h3>

		<form action="formcadastro.php" method="post" >
		
			<table border=1 align="center">
				<tr> <td align="center" style="background-color:#800000; color:#FFD700;" >Nome:</td> <td style="background-color:#F0E68C;"> <input type="text" name="nome" style="width: 390px;"> </td> </tr>
				<tr> <td align="center" style="background-color:#800000; color:#FFD700;" >Endereço:</td> <td style="background-color:#F0E68C;"> <input type="text" name="endereco" style="width: 390px;"> </td> </tr>
				<tr> <td align="center" style="background-color:#800000; color:#FFD700;" >Idade:</td> <td style="background-color:#F0E68C;"> <input type="number" name="idade" min="15" max="80"> </td> </tr>
				
				<tr> <td align="center" style="background-color:#800000; color:#FFD700;" ><label for="regime">Regime de Entrada:</label></td> 
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
								  <option value="<?php echo $regime['re_codigo'];?>" > <?php echo $regime['re_descricao'];?> </option>
						<?php
								}
							}
						?>  
						</select>
					</td>
				</tr>

				<tr> <td align="center" style="background-color:#800000; color:#FFD700;" >Sexo</td>
					<td style="background-color:#F0E68C;">
						<?php
							$sql="SELECT * FROM sexo";
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) 
							{
								while($sexo = $result->fetch_assoc()) 
								{
						?>
							<input type="radio" id="<?php echo $sexo["se_descricao"] ?>" name="sexo" value="<?php echo $sexo["se_cod"] ?>">
							<label for="<?php echo $sexo["se_descricao"] ?>"><?php echo $sexo["se_descricao"] ?></label>
							
						<?php
								}
							}
							
							$conn->close();	
						?>
					</td>
				</tr>
				
				<tr>
					<td align="center" style="background-color:#800000; color:#FFD700;" ><label for="observa">Observações:</label></td>
					<td style="background-color:#F0E68C;">
						<textarea id="observa" name="observa" rows="4" cols="50"></textarea>
					</td>
				</tr>
				
			</table>
			
			<p align="center">
				<a href="listagem_rotinas.php"><input type = "button" value="Voltar" style="background-color:#F0E68C;"></a>
				<input type="submit" value="Cadastrar" style="background-color:#F0E68C;">
			</p>

		</form>

	</body>

</html>