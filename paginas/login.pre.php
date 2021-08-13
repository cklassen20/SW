<?php
	if(isset($_GET['logout'])) {
		session_destroy();
		header('Location: ./index.php?p=login');
		die();
	} else if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
		$senha = isset($_POST['pass']) ? $_POST['pass'] : null;
		
		$registro = ORM::for_table('usuario')->where(array(
                'email' => $usuario,
                'pass' => $senha
            ))->find_one();
		
		if($registro != null) {
			$_SESSION['idusuario'] = $registro->id;
			$_SESSION['usuario'] = $registro->email;
			header('Location: ./index.php?p=materiais');
			die();
		} else {
			$errors[] = 'Credenciais inválidas';
		}
	}
?>