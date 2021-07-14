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
			<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
				Nome: <input type="text" name="nome">
					<span class="error">* <?php echo $nomeErr;?> </span>
				<br>
				Sobrenome: <input type="text" name="sobrenome">
					<span class="error">* <?php echo $sobrenomeErr;?></span>
				<br>
				Idade: <input type="text" name="idade">
					<span class="error">* <?php echo $idadeErr;?></span>
				<br>
				<form>
					<p>Selecione o sexo:</p>
					<input type="radio" id="masc" name="sexo" value="Masculino">
					<label for="masc">Masculino</label><br>
					<input type="radio" id="fem" name="sexo" value="Feminino">
					<label for="fem">Feminino</label>
					<br><br>
				</form> 
				Ano: <input type="text" name="ano">
					<span class="error">* <?php echo $anoErr;?></span>
				<br>
				Pré-teste: <input type="text" name="pretest">
					<span class="error">* <?php echo $pretestErr;?></span>
				<br>
				Experimento 1: <input type="text" name="experimento1">
					<span class="error">* <?php echo $experimento1Err;?></span>
				<br>
				Experimento 2: <input type="text" name="esperimento2">
					<span class="error">* <?php echo $experimento2Err;?></span>
				<br>
				Pós-teste: <input type="text" name="postest">
					<span class="error">* <?php echo $postestErr;?></span>
				<br><br>
				<input type="submit" name="submit" value="Cadastrar">
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
			echo "Pré-teste: $pretest";
			echo "<br>"; 
			echo "Experimento 1: $experimento1";
			echo "<br>"; 
			echo "Experimento 2: $experimento2";
			echo "<br>"; 
			echo "Pós-teste: $postest";
			echo "<br>"; 
			echo "<br><br><br>";
		?>
	</body>
</html> 
