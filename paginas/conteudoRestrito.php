<?php
	$logged = $_SESSION['logged'] ?? NULL;
	if(!logged) die ('Usuário não cadastrado!');

?>

<span>Este conteúdo é restrito!</span>
<span><?php echo "olá {$_SESSION['usuario']}"; ?></span>