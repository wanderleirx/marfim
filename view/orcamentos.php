<?php 
	session_start();
	include_once('../service/GeneralService.php');
   include_once('../include/head.php');
   include_once('../include/header.php');
?>
<section id="content">
<div class="row-fluid">
	<div class="span10 offset1 ">
		<h3 class="divide">Orçamento</h3>
		<hr class="divide"/>
		<?php if(isset($_SESSION['success'])): ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong> <?php echo $_SESSION['success']; unset($_SESSION['success']) ?> </strong>
			</div>
		<?php elseif(isset($_SESSION['error'])): ?>
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong> <?php echo $_SESSION['error']; unset($_SESSION['error']) ?> </strong>
			</div>
		<?php endif; ?>
		<h5>Preencha o formulário e receba a resposta do orçamento no seu email em seguida.<br/><span class="asterisco">*</span><small class="">Campos obrigatórios </small></h5>
		<legend>Formulário de Orçamento</legend>
		<form name="fomr-orcamento" id="form-orcamento" method="post" action="../actions/OrcamentoController.php" class="form-orcamento">
			<span class="asterisco">*</span>
			<div class="controls">
				<input type="email" class="span6" name="email" id="email" required placeholder="Digite seu email">
			</div>
			<br/>
			<div class="controls">
				<input type="tel" class="span6" name="phone" id="telefone" placeholder="Digite seu telefone">
			</div>
			<span class="asterisco">*</span>
			<div class="controls">
				<select name="tipo" id="tipo" class="span6 form" required >
					<option value="0">Escolha um tipo de serviço</option>
					<option value="Desinsetização">Desinsetização</option>
					<option value="Desratização">Desratização</option>
					<option value="Descupinização">Descupinização</option>
				</select>
	    	</div>
			<span class="asterisco">*</span>
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