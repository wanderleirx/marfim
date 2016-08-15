<?php 
	session_start();
	include_once('../service/GeneralService.php');
   include_once('../include/head.php');
   include_once('../include/header.php');
?>
<section id="content">
	<div class="row-fluid">
		<div class="span10 offset1">
			<br>
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
			<h3 class="divide">Contatos</h3>
         <hr class="divide" />
			<div class="row-fluid">
				<div class="span6 ">
	         	<form method="post" name="form-contatos" id="form-contatos" action="../actions/EnviaEmailController.php" >
	         		<label class="text-success" for="nome"><span class="asterisco">*</span>Nome:</label>
	         		<div class="controls">
	         			<input type="text" class="span12" name="nome" id="nome" required>
	    				</div>
	    				<div class="controls">
	    					<label class="text-success" for="email"><span class="asterisco">*</span>Email</label>
	         			<input type="email" class="span12" name="email" id="email" required>
	    				</div>
	    				<div class="controls">
	    					<label class="text-success" for="phone"><span class="asterisco">*</span>Telefone:</label>
	         			<input type="tel" class="span12" name="phone" id="phone" required>
	    				</div>
	    				<div class="controls">
	    					<label class="text-success" for="assunto"><span class="asterisco">*</span>Assunto:</label>
	         			<input type="text" class="span12" name="assunto" id="assunto" required>
	    				</div>
	    				<div class="controls">
	    					<label class="text-success" for="mensagem"><span class="asterisco">*</span>Mensagem:</label>
							<textarea class="span12" name="mensagem" id="mensagem" rows="5" required></textarea>
	    				</div>
	    				<div class="controls">
							<input type="submit" class="btn btn-inverse" name="enviar" value="Enviar">
							<input type="reset" class="btn btn-inverse" name="limpar" value="Limpar">
	    				</div>
	         	</form>
					<span class="asterisco">*</span> Campos obrigatórios
				</div>
				<div class="span5">
					<div class="span11 offset1 conteudo-contatos">
						<?php $data = read('contatos', 'nm_contato, ds_contato, icon_contato') ?>
							<ul class="unstyled">
								<?php foreach($data as $res): extract($res) ?>
									<li><?php echo "<img src='../img/uploads/$icon_contato' class='img-responsive' alt=''>";?><span><?php echo $ds_contato ?></span> </li>
								<?php endforeach; ?>
							</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
<?php include_once('../include/footer.php') ?>