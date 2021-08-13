<!-- PÁGINA de ADICIONAR ALUNO -->
<span class="titulos">Adicionar Aluno</span>

<form method="POST">
	<br>
	<div class="form-group col-md-6">
		<label for="nome">Nome:</label> <br>
		<input type="text" class="form-control form-control-sm" id="nome" name="nome" placeholder="Nome da criança">
	</div>
	<div class="form-group col-md-6">
		<label for="sobrenome">Sobrenome:</label> <br>
		<input type="text" class="form-control form-control-sm" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
	</div>
	<div class="form-group col-md-6">
		<label for="genero">Sexo:</label>
		<select class="form-select form-select-sm" name="genero" id="genero">
			<option value selected>Escolher...</option>
			<option value="1">Masculino</option>
			<option value="2">Feminino</option>
		</select>
	</div>
	<div class="form-group col-md-6">
		<label for="datanascimento">Data de nascimento:</label>
		<input type="date" class="form-control form-control-sm" id="" name="datanascimento">
	</div>
	<div class="form-group col-md-6">
		<label for="ano">Ano:</label>
		<select class="form-select form-select-sm" id="ano" name="ano">
			<option value selected>Escolher...</option>
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
	<br/>
	<input type="submit" class="btn btn-primary" value="Adicionar">
</form>