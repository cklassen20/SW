<!-- PÁGINA de ADICIONAR DESEMPENHO -->
<span class="titulos">Adicionar Desempenho</span>
	<form>
		<br>
		<div class="form-group col-md-6">
			<label for="name4">Buscar:</label> 
			<input type="text" class="form-control form-control-sm" id="name4" placeholder="Nome da criança">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</div>
	</form>
	<hr>
	
	<form>
		<div class="form-group col-md-6">
			<label for="name41">Nome:</label> 
			<input type="text" class="form-control form-control-sm" id="name4" placeholder="Nome da criança">
		</div>
		<br>
		<div class="form-group col-md-6">
			<label for="preTeste">Pré-teste:</label> 
			<input type="text" class="form-control form-control-sm" id="preTeste" placeholder="Digite o resultado da teste">
			<button type="submit" class="btn btn-primary">Salvar Pré-teste</button>
		</div>
		<br>
		<div class="form-group col-md-6">
			<label for="exp01">Experimento 01:</label> 
			<input type="text" class="form-control form-control-sm" id="exp01" placeholder="Digite o resultado do experimento 01">
			<button type="submit" class="btn btn-primary">Salvar experimento 01</button>
		</div>
		<br>
		<div class="form-group col-md-6">
			<label for="exp02">Experimento 02:</label> 
			<input type="text" class="form-control form-control-sm" id="exp02" placeholder="Digite o resultado do experimento 02">
			<button type="submit" class="btn btn-primary">Salvar experimento 02</button>
		</div>
		<br>
		<div class="form-group col-md-6">
			<label for="posTeste">Pós-teste:</label> 
			<input type="text" class="form-control form-control-sm" id="posTeste" placeholder="Digite o resultado do pós-teste">
			<button type="submit" class="btn btn-primary">Salvar Pós-teste</button>
		</div>
	</form>
	
	<hr>
	
<?php
	echo "<h3>Print das entradas:</h3>";
	echo "<br>";
	echo "Pré-teste: ...";
	echo "<br>";
	echo "Experimento 01: ...";
	echo "<br>";
	echo "Experimento 02: ...";
	echo "<br>";
	echo "Pós-teste: ...";
	echo "<br>"; 
	 
	echo "<br><br><br>";
?>

<!--  Cálculo da nota do Pré-teste: 10 movimentos mínimos: criar uma função e passar parâmetro? 
<!-- variáveis nMovPreteste = preTeste? ou usar preTeste
$nMovPreteste; <!-- n. de movimentos no pré-teste efetuados pela criança 
$notaFinalPreteste; 
$fatorPre = 0.2;
$descNota; <!-- %de err
$descNotaPre;
$nMovDescPre
$nMovIdealPre;

if (nMovPreteste == nMovIdealPre){
	notaFinalPreteste = 100;	<!-- se a criança realizar 10 movs. ela tirou 10.
	}
	else if(noMovPreteste < nMovIdealPre) {
		notaFinalPreteste = 0; <!-- se a criança não realizar 10 mov. tira 0
	} else {
		nMovDescPre = nMovPreteste - nMovIdealPre;
		descNotaPre = nMovDescPre / fatorPre;
		notaFinalPresteste = 100 - descNota;
	}	
} -->

<!-- Cálculo do Pós-teste: 40 movs. mínimos
$nMovPosteste // nMovPesteste = posTeste;
$notaFinalPosteste;
$nMovDesc;
$descNotaPos;
$fatorPos = 2.5;
$nMovIdealPos = 40;

if (nMovPostes < nMovIdealPos){
	notaFinalPosteste = 0;
	}
	else if (nMovPosteste == nMovIdealPos){
		notaFinalPosteste = 100;
		}	
	} else {
		nMovDesc = nMovPosteste - nMovIdealPos;
		descNotaPos = nMovdesc * fatorPos;
		notaFinalPosteste = 100 - descNotaPos;
	}
-->

<!-- Cálculo da atividade 01
$nMovA1;
$notaFinalA1;
$nMovDescA1;
$descNotaA1;
$fatorA1 = 10;
$nMovIdealA1 = 5;

if(nMovA1 < nMovIdealA1){
	notaFinalA1 = 0;
	} else if (nMovA1 == nMovIdealA1){
		notaFinalA1 = 100;
	} else {
		nMovDescA1 = nMovA1 - nMovIdealA1;
		descNotaA1 = nMovDescA1 * fatorA1;
		notaFinalA1 = 100 - descNotaA1;
	}
 -->
 
 <!-- 
 !-- Cálculo da atividade 02
$nMovA2;
$notaFinalA2;
$nMovDescA2;
$descNotaA2;
$fatorA2 = 3.5715;
$nMovIdealA2 = 14;

if(nMovA2 < nMovIdealA2){
	notaFinalA2 = 0;
	} else if (nMovA2 == nMovIdealA2){
		notaFinalA2 = 100;
	} else {
		nMovDescA2 = nMovA2 - nMovIdealA2;
		descNotaA2 = nMovDescA2 * fatorA2;
		notaFinalA2 = 100 - descNotaA2;
	}
 --> 