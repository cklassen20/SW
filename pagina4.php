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
			$busca = "";
			$preteste = "";
			$experimento01 = "";
			$experimento02 = "";
			$posteste = "";
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
	
		<!-- <p> <span class="error"> </span> </p>
			<form <method="post" action="<?php //echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
				Buscar aluno: <input type="text" name="busca">
					<span class="error">* <?php //echo $buscarErr;?> </span>
				<br>
				<input type="submit" name="submit" value="Buscar"> -->
				<form>
					<div class="form-group col-md-6">
						<label for="name4">Buscar:</label> 
						<input type="text" class="form-control" id="name4" placeholder="Nome da criança">
						<button type="submit" class="btn btn-primary">Buscar</button>
					</div>
				</form>
			<hr>
				<!--<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							Pré-teste: <input type="text" name="preteste">
								<input type="submit" name="submit" value="Salvar1">
							Experimento 01: <input type="text" name="experimento01">
								<input type="submit" name="submit" value="Salvar2">
							Experimento 02: <input type="text" name="experimento02">
								<input type="submit" name="submit" value="Salvar3">
							Pós-teste: <input type="text" name="posteste">
								<input type="submit" name="submit" value="Salvar4">
						</div>
					</div>	
				</form> -->
				<form>
					<div class="form-group col-md-6">
						<label for="name41">Nome:</label> 
						<input type="text" class="form-control" id="name4" placeholder="Nome da criança">
					</div>
					<br>
					<div class="form-group col-md-6">
						<label for="preTeste">Pré-teste:</label> 
						<input type="text" class="form-control" id="preTeste" placeholder="Digite o resultado da teste">
						<button type="submit" class="btn btn-primary">Salvar Pré-teste</button>
					</div>
					<br>
					<div class="form-group col-md-6">
						<label for="exp01">Experimento 01:</label> 
						<input type="text" class="form-control" id="exp01" placeholder="Digite o resultado do experimento 01">
						<button type="submit" class="btn btn-primary">Salvar experimento 01</button>
					</div>
					<br>
					<div class="form-group col-md-6">
						<label for="exp02">Experimento 02:</label> 
						<input type="text" class="form-control" id="exp02" placeholder="Digite o resultado do experimento 02">
						<button type="submit" class="btn btn-primary">Salvar experimento 02</button>
					</div>
					<br>
					<div class="form-group col-md-6">
						<label for="posTeste">Pós-teste:</label> 
						<input type="text" class="form-control" id="posTeste" placeholder="Digite o resultado do pós-teste">
						<button type="submit" class="btn btn-primary">Salvar Pós-teste</button>
					</div>
				</form>
			</form>
			
			<hr>
			
			<?php
			echo "<h3>Print das entradas:</h3>";
			echo "<br>";
			echo "Pré-teste: ...";
			echo "<br>";
			echo "Experimento 01: ...";
			echo "<br>";
			echo "Experimento 02: ...";
			echo "<br>";
			echo "Pós-teste: ...";
			echo "<br>"; 
			 
			echo "<br><br><br>";
		?>
	</body>
</html> 