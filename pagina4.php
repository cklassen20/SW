<!-- PÁGINA de ADICIONAR DESEMPENHO -->

<!DOCTYPE HTML>
<html lang="br">
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
		<link rel="stylesheet" href="site.css">
	</head>

	<body>
		<span class="titulos">Adicionar Desempenho</span>
			<form>
					<div class="form-group col-md-6">
						<label for="name4">Buscar:</label> 
						<input type="text" class="form-control form-control-sm" id="name4" placeholder="Nome da criança">
						<button type="submit" class="btn btn-primary">Buscar</button>
					</div>
				</form>
			<hr>
				<form>
					<div class="form-group col-md-6">
						<label for="name41">Nome:</label> 
						<input type="text" class="form-control form-control-sm" id="name4" placeholder="Nome da criança">
					</div>
					<br>
					<div class="form-group col-md-6">
						<label for="preTeste">Pré-teste:</label> 
						<input type="text" class="form-control form-control-sm" id="preTeste" placeholder="Digite o resultado da teste">
						<button type="submit" class="btn btn-primary">Salvar Pré-teste</button>
					</div>
					<br>
					<div class="form-group col-md-6">
						<label for="exp01">Experimento 01:</label> 
						<input type="text" class="form-control form-control-sm" id="exp01" placeholder="Digite o resultado do experimento 01">
						<button type="submit" class="btn btn-primary">Salvar experimento 01</button>
					</div>
					<br>
					<div class="form-group col-md-6">
						<label for="exp02">Experimento 02:</label> 
						<input type="text" class="form-control form-control-sm" id="exp02" placeholder="Digite o resultado do experimento 02">
						<button type="submit" class="btn btn-primary">Salvar experimento 02</button>
					</div>
					<br>
					<div class="form-group col-md-6">
						<label for="posTeste">Pós-teste:</label> 
						<input type="text" class="form-control form-control-sm" id="posTeste" placeholder="Digite o resultado do pós-teste">
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