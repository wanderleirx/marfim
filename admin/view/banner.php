<?php 
	include_once('../service/BannerService.php');
   include_once('../include/head.php');
   include('../include/header.php');
?>
<section id="content">
	<!--
	 // Formulário para Incluir dados natabela
	 -->
	<div class="row-fluid">
		<div class="span10 offset1">
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
		</div>
	</div>
	<div class="row-fluid">
   	<div class="span5 offset1">
			<legend class="legend-form">Incluir Novo Banner</legend>
			<form class="form form-crud"  name="form" action="../actions/BannerController.php" method="post" onsubmit="return validateFormBannerInclude()" enctype="multipart/form-data" >
				<label class="control-label" for="nomeBanner">Nome</label>
				<div class="controls">
					<input type="text" class="span12" name="nomeBanner" id="nomeBanner" placeholder="Nome do Banner" value="" required>
				</div>
				<input type="hidden" name="operacao" value="create">
				<label class="control-label" for="imgBanner">IMG</label>
				<div class="controls">
					<input type="text" class="span9" id="uploadFile" placeholder="Escolha a imagem" value="" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input type="file" class="upload" name="imgBanner" id="arquivo" onchange="filePathCreate();" value="" required>
					</div>
				</div>
				<div class="controls">
					<input type="submit" class="btn btn-inverse" name="enviar" value="Enviar">
				</div>
			</form>
   	</div>
		<!--
	 	// Formulário para Alterar dados natabela
	 	-->
   	<div class="span5">
   		<legend class="legend-form">Editar Banner</legend>
           <form class="form form-crud" action="../actions/BannerController.php" method="post" onsubmit="return validateFormBannerEdit();" enctype="multipart/form-data">
               <label class="input" for="idBanner">ID</label>
               <div class="controls">
						<select class="span12" name="idBanner" id="idBanner2" required="required">
							<option value="" selected="selected" disabled="disabled">Escolha o ID</option>
							<?php foreach($data as $res):	extract($res); ?>
								<option value=" <?= $id_banner; ?> "> <?= $id_banner ?> </option>
							<?php endforeach; ?>
						</select>
					</div>
               <label class="input" for="nomeBanner">Nome</label>
               <div class="controls">
                  <input type="text" class="span12" name="nomeBanner" id="nomeBanner2"  required>
               </div>
               <input type="hidden" name="operacao" value="edit">
					<label class="input" for="imgBanner">IMG</label>
					<div class="controls">
						<input type="text" class="span9" id="uploadFile2" placeholder="Escolha a imagem" value="" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input  type="file" class="upload" name="imgBanner" id="arquivo2" onchange="filePathEdit();" value="" required>
						</div>
					</div>
               <div class="controls">
                  <input type="submit" name="editar" class="btn btn-inverse" value="Editar" />
               </div>
           </form>
   	</div>
   </div>
   <!--
	// Tabela com os dados do BD
	-->
	<div class="row-fluid">
	   <div class="span12">
	      <div class="row-fluid">
				<div class="span10 offset1">
					<table class="table table-striped table-bordered table-crud">
						<legend class="table">Dados Tabela Banner</legend>
						<thead class="thead">
							<tr>
								<th>#</th>
								<th>Nome</th>
								<th>IMG</th>
								<th>Excluir</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data as $res):	extract($res); ?>
							<tr>
								<td><?= $id_banner ?></td>
								<td><?= $nm_banner ?></td>
								<td><?= "<img src='../../img/uploads/{$img_banner}' alt='' width='120'  >" ?></td>
								<td><?php	echo"<a href='../actions/ExcluirController.php?id=$id_banner&table=$table&idName=id_banner&page=$page'onclick='return confirmDelete();' class='btn btn-warning'><i class='icon-remove-sign'></i></a>";?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
      </div>
   </div>
</section>
<?php include_once('../include/footer.php') ?>