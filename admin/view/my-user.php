<?php 
	include_once('../service/MyUserService.php');
   include_once('../include/head.php');
   include('../include/header.php');
?>
<section id="content">
	<div class="row-fluid">
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
		<div class="span10 offset1">
			<form class="form-crud" action="../actions/MyUserController.php" method="post">
				<label class="control-label">Nome</label>
				<div class="controls">
					<input type="text" class="span6" name="nome" id="nome" value="<?php if(isset($nome)){echo $nome; unset($nome);} ?> " required>
				</div>
				<label class="control-label">User</label>
				<div class="controls">
					<input type="text" class="span6" name="userName" id="userName" value="<?php if(isset($userName)){echo $userName; unset($userName);} ?>" required>
				</div>
				<input type="hidden" name="id" value=" <?php if(isset($idUser)){echo $idUser; unset($iduser);} ?> ">
				<label for="pssword" class="control-label">Password</label>
				<div class="controls">
					<input type="password" class="span6" name="password" id="password" required>
				</div>
				<div class="controls">
					<input type="submit" name="enviar" class="btn btn-inverse" value="Enviar" />
				</div>
			</form>
		</div>
	</div>

</section>
<?php include_once('../include/footer.php') ?>