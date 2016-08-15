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
		<!--
	 	// Formulário para Alterar dados natabela
	 	-->
	<div class="row-fluid">
   	<div class="span10 offset1">
   		<legend class="legend-form">Editar Linha 1</legend>
         <form class="form form-crud" action="../actions/AtendimentoController.php" method="post" enctype="multipart/form-data">
            <label class="input" for="idBanner">ID</label>
            <div class="controls">
					<select class="span12" name="idLinha1" id="idLinha1" required="required">
						<option value="" selected="selected" disabled="disabled">Escolha o ID</option>
						<?php foreach($linha1 as $res):	extract($res); ?>
							<option value=" <?= $id_linha1; ?> "> <?= $id_linha1 ?> </option>
						<?php endforeach; ?>
					</select>
            </div>
				<label class="control-label" for="titulo1">Titulo:</label>
				<div class="controls">
					<input type="text" class="span12" name="titulo1" id="titulo1" placeholder="Titulo do Atendimento" value="" required>
				</div>
				<label class="control-label" for="texto">Texto</label>
				<div class="controls">
					<textarea class="span12" name="texto1" id="texto1" rows="5"></textarea>
				</div>
				<label class="control-label" for="imgLinha1">IMG</label>
				<div class="controls">
					<input type="text" class="span10" id="uploadFile2" placeholder="Escolha a imagem" value="" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input type="file" class="upload" name="imgLinha1" id="arquivo" onchange="filePathCreate();" required>
					</div>
				</div>
            <div class="controls">
					<label class="" for="idAtivo1">Ativo</label><input checked="checked" type="radio" name="ativo" id="idAtivo1" value="1">
					<label class="" for="idAtivo2">Dasativado</label><input type="radio" name="ativo" id="idAtivo2" value="0">
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
						<legend class="table">Dados Tabela Linha 1</legend>
						<thead class="thead">
							<tr>
								<th>#</th>
								<th>Titulo</th>
								<th>Texto</th>
								<th>Imagem</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($linha1 as $res):	extract($res); ?>
							<tr>
								<td><?php echo $id_linha1; ?></td>
								<td><?php echo $titulo1; ?></td>
								<td><?php echo $texto1; ?></td>
								<td><?php echo "<img src='../../img/uploads/{$img_linha1}' alt='' width='50' >" ?></td>
								<td><?php if($ativo == 1){echo "<a href='../actions/AtendimentoController.php?id=$id_linha1&active=false&table=linha1'><i class='icon-ok'></i></a>";}else{echo "<a href='../actions/AtendimentoController.php?id=$id_linha1&active=true&table=linha1'><i class='icon-off'></i></a>";} ?><?php  ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
      </div>
   </div>

   <div class="row-fluid">
   	<div class="span10 offset1">
   		<legend class="legend-form">Editar Linha 2</legend>
         <form class="form form-crud" action="../actions/AtendimentoController.php" method="post" enctype="multipart/form-data">
            <label class="input" for="idLinha2">ID</label>
            <div class="controls">
					<select class="span12" name="idLinha2" id="idLinha2" required="required">
						<option value="" selected="selected" disabled="disabled">Escolha o ID</option>
						<?php foreach($linha2 as $res):	extract($res); ?>
							<option value=" <?= $id_linha2; ?> "> <?= $id_linha2 ?> </option>
						<?php endforeach; ?>
					</select>
            </div>
				<label class="control-label" for="titulo2">Titulo:</label>
				<div class="controls">
					<input type="text" class="span12" name="titulo2" id="titulo2" placeholder="Titulo do Atendimento" value="" required>
				</div>
				<label class="control-label" for="texto2">Texto</label>
				<div class="controls">
					<textarea class="span12" name="texto2" id="texto2" rows="5"></textarea>
				</div>
				<label class="control-label" for="imgLinha2">IMG</label>
				<div class="controls">
					<input type="text" class="span10" id="uploadFile2" placeholder="Escolha a imagem" value="" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input type="file" class="upload" name="imgLinha2" id="arquiv2" onchange="filePathEdit();" required>
					</div>
				</div>
            <div class="controls">
					<label class="" for="idAtivo21">Ativo</label><input checked="checked" type="radio" name="ativo" id="idAtivo21" value="1">
					<label class="" for="idAtivo22">Dasativado</label><input type="radio" name="ativo" id="idAtivo22" value="0">
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
						<legend class="table">Dados Tabela Linha 2</legend>
						<thead class="thead">
							<tr>
								<th>#</th>
								<th>Titulo</th>
								<th>Texto</th>
								<th>Imagem</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($linha2 as $res):	extract($res); ?>
							<tr>
								<td><?php echo $id_linha2; ?></td>
								<td><?php echo $titulo2; ?></td>
								<td><?php echo $texto2; ?></td>
								<td><?php echo "<img src='../../img/uploads/{$img_linha2}' alt='' width='50' >" ?></td>
								<td><?php if($ativo == 1){echo "<a href='../actions/AtendimentoController.php?id=$id_linha2&active=false&table=linha2'><i class='icon-ok'></i></a>";}else{echo "<a href='../actions/AtendimentoController.php?id=$id_linha2&active=true&table=linha2'><i class='icon-off'></i></a>";} ?><?php  ?></td>
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