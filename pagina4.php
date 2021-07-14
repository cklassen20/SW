<!-- PÁGINA de ADICIONAR DESEMPENHO -->

<!DOCTYPE HTML>
<html lang="br">
	<head>
	<style>
		.error {color: #FF0000;}
	</style>
	</head>

	<body>

		<?php
		//definindo as variáveis
			$busca = $preteste = $experimento01 = $experimento02 = $posteste "";
			$buscarErr = "";
	
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				if(empty($_POST["busca"])){
					$buscaErr = "O campo requer um nome.";
				} else {
					$busca = test_input($_POST["busca"]);
				}
			}
	
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data; 
			}	
		?>

		<p> <h3> <font color="#7887CE">Adicionar Desempenho</font> </h3> </p>
	
		<p> <span class="error"> </span> </p>
			<form <method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
				Buscar aluno: <input type="text" name="busca">
					<span class="error">* <?php echo $buscaErr;?> </span>
				<br>
				<input type="submit" name="submit" value="Buscar">
			<hr>
				Pré-teste: <input type="text" name="preteste">
					<input type="submit" name="submit" value="Salvar1">
				Experimento 01: <input type="text" name="experimento01">
					<input type="submit" name="submit" value="Salvar2">
				Experimento 02: <input type="text" name="experimento02">
					<input type="submit" name="submit" value="Salvar3">
				Pós-teste: <input type="text" name="posteste">
					<input type="submit" name="submit" value="Salvar4">
			</form>
	</body>
</html> 