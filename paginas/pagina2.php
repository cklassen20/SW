<!-- PÁGINA de NOVO USUÁRIO -->
<span class="titulos">Novo Usuário</span>
<form>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="email2">Email:</label> <br>
			<input type="email" class="form-control form-control-sm" id="email2" placeholder="Email">
		</div>
		<div class="form-group col-md-6">
			<label for="password2">Senha:</label> <br>
			<input type="password" class="form-control form-control-sm" id="password2" placeholder="Senha">
		</div>
	</div>
	<br>
	<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php
	echo "<h3>Print das entradas:</h3>";
	echo "<br>";
	echo "Email:";
	echo "<br>";
	echo "Senha:";
	echo "<br><br><br>";
?>
