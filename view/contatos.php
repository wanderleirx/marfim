<?php 
	include_once('../functions/crud.php');
   include_once('../include/head.php');
   include_once('../include/header.php');
?>
<section id="content">
	<div class="row-fluid">
		<div class="span10 offset1">
			<h3 class="divide">Contatos</h3>
         <hr class="divide" />
			<div class="row-fluid">
				<div class="span6 ">
	         	<form action="#" method="post" name="form-contatos" id="form-contatos">
	         		<label class="text-success" for="nome">Nome:</label>
	         		<div class="controls">
	         			<input type="text" class="span12" name="nome" id="nome" required>
	    				</div>
	    				<div class="controls">
	    					<label class="text-success" for="email">Email</label>
	         			<input type="email" class="span12" name="email" id="email" required>
	    				</div>
	    				<div class="controls">
	    					<label class="text-success" for="phone">Telefone:</label>
	         			<input type="tel" class="span12" name="phone" id="phone" required>
	    				</div>
	    				<div class="controls">
	    					<label class="text-success" for="assunto">Assunto:</label>
	         			<input type="text" class="span12" name="assunto" id="assunto" required>
	    				</div>
	    				<div class="controls">
	    					<label class="text-success" for="mensagem">Mensagem:</label>
							<textarea class="span12" name="menssagem" id="mensagem" rows="5" required></textarea>
	    				</div>
	    				<div class="controls">
							<input type="submit" class="btn btn-inverse" name="enviar" value="Enviar">
							<input type="reset" class="btn btn-inverse" name="limpar" value="Limpar">
	    				</div>
	         	</form>
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