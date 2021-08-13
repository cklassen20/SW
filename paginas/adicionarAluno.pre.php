<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
		$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
		$genero = isset($_POST['genero']) ? $_POST['genero'] : null;
		$datanascimento = isset($_POST['datanascimento']) ? $_POST['datanascimento'] : null;
		$serie= isset($_POST['ano']) ? $_POST['ano'] : null;
		
		if(validar_formulario()) {
			$aluno = ORM::for_table('aluno')->create();
			$aluno->nome = $nome;
			$aluno->sobrenome = $sobrenome;
			$aluno->idusuario = $_SESSION['idusuario'];
			$aluno->genero = $genero;
			$aluno->datanascimento = $datanascimento;
			$aluno->serie = $serie;
			$aluno->save();
			
			header('Location: ./index.php?p=adicionarAluno');
			die();
		}
	}
	
	function validar_vazio($campo, $vazio) {
		return isset($_POST[$campo]) && $_POST[$campo] != $vazio;
	}
	
	function validar_formulario() {
		global $errors;
		$valido = true;
		if(!validar_vazio('nome', '')) {
			$errors[] = 'Nome é obrigatório';
			$valido = false;
		}
		if(!validar_vazio('sobrenome', '')) {
			$errors[] = 'Sobrenome é obrigatório';
			$valido = false;
		}
		if(!validar_vazio('genero', null)) {
			$errors[] = 'Sexo é obrigatório';
			$valido = false;
		}
		if(!validar_vazio('datanascimento', null)) {
			$errors[] = 'Data de Nascimento é obrigatório';
			$valido = false;
		}
		if(!validar_vazio('ano', null)) {
			$errors[] = 'Ano é obrigatório';
			$valido = false;
		}
		return $valido;
	}
?>