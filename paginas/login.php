<span class="titulos">Login</span>
<br>
<form method="POST">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="usuario">Email:</label> <br>
			<input type="email" name="usuario" class="form-control form-control-sm" id="ema" placeholder="Email">
		</div>
		<div class="form-group col-md-6">
			<label for="pass">Senha:</label> <br>
			<input type="password" name="pass" class="form-control form-control-sm" id="pass1" placeholder="Senha">
		</div>
	</div>
	<br>
	<button type="submit" class="btn btn-primary">Entrar</button>
</form>
<hr>

<?php
	echo "<h3>Print das Entradas:</h3>";
	echo "<br>";
	echo "Nome: ";
	echo "<br><br>";
	echo "E-mail: ";
	echo "<br>";
?>
<hr>

<div align="center">
	<p> <font color="#7887CE">Esqueceu a senha?</font> <p>
	<a href="./index.php?p=novoUsuario">Ainda não possui cadastro?</a>
</div>