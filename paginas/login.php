<!-- PÁGINA de LOGIN -->
<!DOCTYPE HTML>  
<html lang="br">
	<head>
		<link rel="stylesheet" href="site.css">
	</head>

	<body>  
		<span class="titulos">Login</span>
		<br>
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="email1">Email:</label> <br>
					<input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
					<label for="password1">Senha:</label> <br>
					<input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Senha">
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
			echo "<br><br><br><br>";
		?>
		<hr>

	<!-- comentários --> 
		<div align="center">
			<p> <font color="#7887CE">Esqueceu a senha?</font> <p>
			<p> <font color="#000000">Ainda não possui cadastro?</font> <p>
		</div>
	</body>
</html>