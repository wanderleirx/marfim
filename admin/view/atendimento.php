<?php 
	include_once('../service/AtendimentoService.php');
   include_once('../include/head.php');
   include('../include/header.php');
?>
<section id="content">
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
			<legend class="legend-form">Incluir Novo Atendimento</legend>
			<form class="form form-crud"  name="form" action="../actions/AtendimentoController.php" method="post"  enctype="multipart/form-data" >
				<label class="control-label" for="titulo">Titulo:</label>
				<div class="controls">
					<input type="text" class="span12" name="titulo" id="titulo" placeholder="Titulo do Atendimento" value="" required>
				</div>
				<label class="control-label" for="texto">Texto</label>
				<div class="controls">
					<textarea class="span12" name="texto" id="texto" rows="5"></textarea>
				</div>
				<input type="hidden" name="operacao" value="create">
				<label class="control-label" for="imgBanner">IMG</label>
				<div class="controls">
					<input type="text" class="span10" id="uploadFile" placeholder="Escolha a imagem" value="" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input type="file" class="upload" name="imgAtendiemnto" id="arquivo" onchange="filePathCreate();" required>
					</div>
				</div>
				<div id="img"></div>
				<div class="controls">
					<input type="submit" class="btn btn-inverse" name="enviar" value="Enviar">
				</div>
			</form>
   	</div>
		<!--
	 	// Formulário para Alterar dados natabela
	 	-->
   	<div class="span5">
   		<legend class="legend-form">Editar Atendimento</legend>
         <form class="form form-crud" action="../actions/AtendimentoController.php" method="post" enctype="multipart/form-data">
            <label class="input" for="idBanner">ID</label>
            <div class="controls">
					<select class="span12" name="idContato" id="idContat2" required="required">
						<option value="" selected="selected" disabled="disabled">Escolha o ID</option>
						<?php foreach($data as $res):	extract($res); ?>
							<option value=" <?= $id_contato; ?> "> <?= $id_contato ?> </option>
						<?php endforeach; ?>
					</select>
            </div>
            <form class="form form-crud"  name="form" action="../actions/AtendimentoController.php" method="post" onsubmit="return validateFormContatoInclude()" enctype="multipart/form-data" >
				<label class="control-label" for="titulo">Titulo:</label>
				<div class="controls">
					<input type="text" class="span12" name="titulo" id="titulo2" placeholder="Titulo do Atendimento" value="" required>
				</div>
				<label class="control-label" for="texto">Texto</label>
				<div class="controls">
					<textarea class="span12" name="texto" id="texto2" rows="5"></textarea>
				</div>
				<input type="hidden" name="operacao" value="edit">
				<label class="control-label" for="imgBanner">IMG</label>
				<div class="controls">
					<input type="text" class="span10" id="uploadFile2" placeholder="Escolha a imagem" value="" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input type="file" class="upload" name="imgAtendiemnto" id="arquivo2" onchange="filePathEdit();" required>
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
						<legend class="table">Dados Tabela Contatos</legend>
						<thead class="thead">
							<tr>
								<th>#</th>
								<th>Nome</th>
								<th>Descrição</th>
								<th>Icone</th>
								<th>Excluir</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data as $res):	extract($res); ?>
							<tr>
								<td><?php echo $id_contato; ?></td>
								<td><?php echo $nm_contato; ?></td>
								<td><?php echo $ds_contato; ?></td>
								<td><?php echo "<img src='../../img/uploads/{$img_atendimento}' alt='' width='25' >" ?></td>
								<td><?php echo"<a href='../actions/ExcluirController.php?id=$id_atendimento&table=$table&idAtendimento=id_atendimento&page=$page'onclick='return confirmDelete();' class='btn btn-warning'><i class='icon-remove-sign'></i></a>";?></td>
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