<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = isset($_POST['email']) ? $_POST['email'] : null;
		$password = isset($_POST['password']) ? $_POST['password'] : null;
		
		if(validar_formulario()) {
			$usuario = ORM::for_table('usuario')->create();
			$usuario->email = $email;
			$usuario->pass = $password;
			$usuario->save();
			
			header('Location: ./index.php?p=login');
			die();
		}
	}
	
	function validar_vazio($campo, $vazio) {
		return isset($_POST[$campo]) && $_POST[$campo] != $vazio;
	}
	
	function validar_formulario() {
		global $errors;
		$valido = true;
		if(!validar_vazio('email', '')) {
			$errors[] = 'Email é obrigatório';
			$valido = false;
		}
		if(!validar_vazio('password', '')) {
			$errors[] = 'Senha é obrigatório';
			$valido = false;
		}
		return $valido;
	}
?>