<!-- PÁGINA de LOGIN -->

<!DOCTYPE HTML>  
<html lang="br">
	<head>
		<style>
			.error {color: #FF0000;}
			<!-- teste cor do button-->
		</style>
	</head>

	<body>  
	
		<?php
		// definindo as variáveis e setando como vazias
			$nameErr = $emailErr = "";
			$name = $email = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					$nameErr = "O campo requer um usuário.";
				} else {
				$name = test_input($_POST["name"]);
			}
	  
			if (empty($_POST["email"])) {
				$emailErr = "O campo requer um e-mail.";
				} else {
				$email = test_input($_POST["email"]);
			}
	}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
	<!-- verificar user com @ -->
		<p> <h3> <font color="#7887CE">Login</font> </h3><p>
		<!-- marcação -->
		<p><span class="error"> </span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				Usuário: <input type="text" name="name">
					<span class="error">* <?php echo $nameErr;?></span>
				<br>
				Senha: <input type="text" name="email">
					<span class="error">* <?php echo $emailErr;?></span>
				<br><br>
				<input type="submit" name="submit" value="Entrar">  
			</form>
		<hr>

		<?php
			echo "<h3>Print das Entradas:</h3>";
			echo "<br>";
			echo "Nome: $name";
			echo "<br><br>";
			echo "E-mail: $email";
			echo "<br><br><br><br>";
		?>
		<hr>

	<!-- comentários --> 
		<div align="center">
			<p> <font color="#7887CE">Esqueceu a senha?</font> <p>
			<p> <font color="#000000">Ainda não possui cadastro?</font> <p>
			<p> <font color="#7887CE">Junte-se à nós!</font> <p>
		</div>
	</body>
</html>