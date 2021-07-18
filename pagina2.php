<!-- PÁGINA de NOVO USUÁRIO -->

<!DOCTYPE HTML>
<html lang="br">
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>

	<body>

		<?php
			//definindo as variáveis e sentando como vazias
			$user = $confUser = $senha = $confSenha = "";
			$userErr = $confUserErr = $senhaErr = $confSenhaErr = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["user"])) {
					$userErr = "O campo requer um usuário.";
				} else {
				$user = test_input($_POST["user"]);
			}
  
			if (empty($_POST["confUser"])) {
				$confUserErr = "Confirme o usuário.";
				} else {
					$confUser = test_input($_POST["confUser"]);
			}
  
			if (empty($_POST["senha"])) {
				$senhaErr = "O campo requer uma senha.";
				} else {
					$senha = test_input($_POST["senha"]);
			}
  
			if (empty($_POST["confSenha"])) {
				$confSenhaErr = "Confirme o usuário.";
				} else {
					$confSenha = test_input($_POST["confSenha"]);
			}
  
}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data; 
			} 
		?>

		<p> <h3> <font color="#7887CE">Novo Usuário</font> </h3><p>
		
		<!--<p> <span class="error"> </span> <p/>
			<form method="post" action="<?php //echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
				Novo Usuário: <input type="text" name="user">
					<span class="error">* <?php //echo $userErr;?> </span>
				<br>
				Confirmação de usuário: <input type="text" name="confUser">
					<span class="error">* <?php //echo $confUserErr;?> </span>
				<br><br>
				Senha: <input type="text" name="senha">
					<span class="error">* <?php //echo $senhaErr;?> </span>
				<br>
				Confirmação da Senha: <input type="text" name="confSenha">
					<span class="error">* <?php //echo $confUserErr;?> </span>
				<br><br>
				<input type="submit" name="submit" value="Cadastrar">
			</form> -->
			
			<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="email2">Email:</label> <br>
					<input type="email" class="form-control" id="email2" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
					<label for="password2">Senha:</label> <br>
					<input type="password" class="form-control" id="password2" placeholder="Senha">
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>

		<?php
			echo "<h3>Print das entradas:</h3>";
			echo "<br>";
			echo "Novo Usuário: $user";
			echo "<br>";
			echo "Confirmação de usuário: $confUser";
			echo "<br>";
			echo "Senha: $senha";
			echo "<br>";
			echo "Confirmação de senha: $confSenha";
			echo "<br><br><br>";
		?>

	</body>
</html> 
