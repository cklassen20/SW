<!-- PÁGINA de ADICIONAR ALUNO -->

<!DOCTYPE HTML>
<html lang="br">
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>

	<body>
	
		<?php
			//definindo as variáveis e setando como vazias
			//ver variáveis numéricas e como setar vazias INT
			//ver com setar variáveis como NULL
			$nome = $sobrenome = $idade  = $sexo = $ano = $pretest = $experimento1 = $experimento2 = $postest ="";
			$nomeErr = $sobrenomeErr = $idadeErr = $sexoErr = $anoErr = $pretestErr = $experimento1Err = $experimento2Err = $postestErr ="";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(empty($_POST["nome"])){
					$nomeErr = "O campo requer um nome.";
					} else {
					$nome = test_input($_POST["nome"]);
			}
			if (empty($_POST["sobrenome"])) {
				$sobrenomeErr = "O campo requer um sobrenome.";
				} else {
					$sobrenome = test_input($_POST["sobrenome"]);
			}
			if (empty($_POST["idade"])) {
				$idadeErr = "O campo requer uma idade.";
				} else {
					$idade = test_input($_POST["idade"]);
			}
			if (empty($_POST["ano"])) {
				$anoErr = "O campo requer o ano letivo.";
				} else {
					$ano = test_input($_POST["ano"]);
			}
			if (empty($_POST["pretest"])) {
				$pretestErr = "O campo uma nota para o pré-teste.";
				} else {
					$pretest = test_input($_POST["pretest"]);
			}
			//tentar inicializar com valor NULL - ver dados INT
			if (empty($_POST["experimento1"])) {
				$experimento1Err = "O campo requer uma nota para o experimento 1.";
				} else {
					$experimento1 = test_input($_POST["experimento1"]);
			}
			//tentar incializar com valor NULL - ver dados INT
			if (empty($_POST["experimento2"])) {
				$experimento2Err = "O campo requer uma nota para o experimento 2.";
				} else {
					$experimento2 = test_input($_POST["experimento2"]);
			}
			} if (empty($_POST["postest"])) {
				$postestErr = "O campo requer uma nota para o pós-teste.";
				} else {
					$postest = test_input($_POST["postest"]);
			}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data; 
			}
		?>

		<p> <h3> <font color="#7887CE">Adicionar Aluno</font> </h3><p>

		<p> <span class="error"> </span> </p>
			<!-- <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
				Nome: <input type="text" name="nome">
					<span class="error">* <?php echo $nomeErr;?> </span>
				<br>
				Sobrenome: <input type="text" name="sobrenome">
					<span class="error">* <?php echo $sobrenomeErr;?></span>
				-->
				<form>
				<div class="form-group col-md-6">
					<label for="name3">Nome:</label> <br>
					<input type="text" class="form-control" id="name3" placeholder="Nome da criança">
				</div>
				<div class="form-group col-md-6">
					<label for="sobrenome3">Sobrenome:</label> <br>
					<input type="text" class="form-control" id="sobrenome3" placeholder="Sobrenome">
				</div>
				</form>
				<br> 
				<form>
					<div class="form-row align-items-center">
						<div class="col-auto my-1">
							<label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Sexo:</label>
							<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
								<option selected>Escolher...</option>
								<option value="1">Masculino</option>
								<option value="2">Feminino</option>
							</select>
						</div>
					</div>
				</form>
				<br>
				<form>
					<div class="form-row align-items-center">
						<div class="col-auto my-1">
							<label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Idade:</label>
							<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
								<option selected>Escolher...</option>
								<option value="1">7</option>
								<option value="2">8</option>
								<option value="3">9</option>
								<option value="4">10</option>
								<option value="5">11</option>
								<option value="6">12</option>
							</select>
						</div>
					</div>
				</form>
				<br>
				<form>
					<div class="form-row align-items-center">
						<div class="col-auto my-1">
							<label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Ano:</label>
							<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
								<option selected>Escolher...</option>
								<option value="1">1º ano</option>
								<option value="2">2º ano</option>
								<option value="3">3º ano</option>
								<option value="4">4º ano</option>
								<option value="5">5º ano</option>
								<option value="6">6º ano</option>
								<option value="7">7º ano</option>
								<option value="8">8º ano</option>
							</select>
						</div>
					</div>
				</form>
				<br>
				<button type="submit" class="btn btn-primary">Adicionar</button>
			</form>

		<?php
			echo "<h3>Print das entradas:</h3>";
			echo "<br>";
			echo "Nome: $nome";
			echo "<br>";
			echo "Sobrenome: $sobrenome";
			echo "<br>";
			echo "Idade: $idade";
			echo "<br>";
			echo "Sexo: $sexo";
			echo "<br>"; 
			echo "Ano: $ano";
			echo "<br>"; 
			echo "<br><br><br>";
		?>
	</body>
</html> 
