<!-- PÁGINA de ADICIONAR ALUNO -->

<!DOCTYPE HTML>
<html lang="br">
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
		<link rel="stylesheet" href="site.css">
	</head>

	<body>
	<span class="titulos">Adicionar Aluno</span>

		<form>
			<div class="form-group col-md-6">
				<label for="name3">Nome:</label> <br>
				<input type="text" class="form-control form-control-sm" id="name3" placeholder="Nome da criança">
			</div>
			<div class="form-group col-md-6">
				<label for="sobrenome3">Sobrenome:</label> <br>
				<input type="text" class="form-control form-control-sm" id="sobrenome3" placeholder="Sobrenome">
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
			echo "Nome: ";
			echo "<br>";
			echo "Sobrenome:";
			echo "<br>";
			echo "Idade: ";
			echo "<br>";
			echo "Sexo: ";
			echo "<br>"; 
			echo "Ano: ";
			echo "<br>"; 
			echo "<br><br><br>";
		?>
	</body>
</html> 
