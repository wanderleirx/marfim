<?php 
	include_once('../include/head.php');
	include_once('../include/header.php');
?>
<section id="content">
<div class="row-fluid">
	<div class="sapn10 offset1">
		<h3 class="divide">Orçamento</h3>
		<hr class="divide"/>
		<h5>Preencha o formulário e receba a resposta do orçamento no seu email em seguida.</h5>
		<form name="fomr-orcamento" id="form-orcamento" method="post" action="" class="form-orcamento">
			<div class="controls">
				<input type="email" class="span6" name="email" id="email" placeholder="Digite seu email">
			</div>
			<div class="controls">
				<select name="tipo" id="tipo" class="span6 form"  required>
					<option value="0">Escolha um tipo de serviço</option>
					<option value="Desinsetização">Desinsetização</option>
					<option value="Desratização">Desratização</option>
					<option value="Descupinização">Descupinização</option>
				</select>
	    	</div>
			<div class="controls">
				<select id="local" name="local" class="span6 form" onchange="orcamento();" required>
					<option value="0">Escolha o local de atendimento</option>
					<option value="Apartamento">Apartamento</option>
					<option value="Casa">Casa</option>
					<option value="Escritório">Escritório</option>
				</select>
	    	</div>
			<div class="controls medida">
					<label class="" id="comodo">Quantos comodos na residencia?</label>
					<label class="" id="ambiente">Quantidade de ambientes a ser dedetizado?</label>
	    	</div>
			<div class="controls medida2">
				<input type="number" name="medida" id="medida" class="medida" required>
				<input type="text" name="tipoMedida" id="tipoMedida" class="tipo-medida" readonly />
			</div>
			<div class="controls enviar">
				<input type="submit" class="btn btn-inverse" value="Enviar" class="botao" name="enviar" />
			</div>
		</form>		
	</div>
</div>

</section>
<?php include_once('../include/footer.php'); ?>