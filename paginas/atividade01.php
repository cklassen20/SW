<span class="titulos">Materiais/Atividade 01: Kart 50cc</span>

<?php
	$items = array(
		0 => array (
			'nome' => '3x3.copyright.png',
			'file' => 'pagina/3x3.copyrught.png',
			'titulo' => 'img1',
			'type' => 'png'
		)
	)
?>

<?php foreach ($items as item) : ?>
	<div class="item">
		<div class="img">
			<?php if($item['tipo'} == 'png' ? ?>
				<img src" <?php echo "$item ['file']; ?> "alt"">
			<?php end if; ?>
		</div>
		<div class="content">
			<h2>
				<?php echo $item['titulo']; ?>
			</h2>
			<a href="<?php echo 'download.php?file='.$item['file'].'&nome='.$item['nome'].'&tipo='.$item['tipo']?>">
				Download
			</a>	
		</div>	
	</div>
<?php endforeach; ?>	
	
<div align="left">
	<p><h5>O nível de dificuldade para a catergoria Kart 50cc é de iniciante, isto é, fácil.
		Sugere-se que o professor utilize o modelo do tapete pedagógico, disponibilizado na imagem,
		assim como para download logo abaixo. O tapete pode ser confeccionado pelo próprio professor,
		utilizando-se de materias que estejam a sua disposição, como por exemplo, o próprio chão e
		um giz branco, ou qualquer outro método que o docente assim o preferir. O tabuleiro possui um 
		tamanho 3x3, e deve ser utilizado como "pista" para	movimentar o carrinho do ponto A até o 
		ponto B, de modo que o carro não utilize as cédulas que possuem obstáculos. Observando a imagem,
		e tendo como orientação os sentidos vertical e horizontal, o carrinho dever ser colocado na
		cédula onde está inscrito o ponto A, observando o sentido vertical para baixo. Deve-se apertar
		os botões de movimento, isto é, programar o carrinho, com a quantidade necessária e correta de
		ações para que o carrinho realize uma trajetória que o leve do ponto A ao ponto B. Nesta primeira
		atividade são necessárias um mínimo de 5 ações para que o objetivo seja alcançado. A programação
		efetuada deverá aparecer na tela da aplicação, informando a ação selecionada.</h5>
	</p>
	<div align="center">
		<img src="3x3.png" alt="3x3.copyright" style="width:512px;height:324px;">
		<p><input type="submit" name="submit" value="DOWNLOAD"></p>
	<div align="left">
	<p><h5>Uma das possíveis resoluções desta atividade pode ser observada na imagem abaixo, 
		onde é possível visualizar o movimento realizado pelo carrinho e os comandos que foram
		utilizados.</h5>
	</p>
	</div>
		<img src="3x3Resposta.png" alt="3x3Resposta.copyright" style="width:512px;height:324px;">
	</div>
</div>