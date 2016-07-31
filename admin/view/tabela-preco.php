<?php 
	include_once('../service/TabelaPrecoService.php');
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
	// Tabela com os dados do BD
	-->
	<div class="row-fluid">
	   <div class="span12">
	      <div class="row-fluid">
				<div class="span10 offset1">
					<table class="table table-striped table-bordered table-crud">
						<legend class="table">Dados Tabela Preço</legend>
						<thead class="thead">
							<tr>
								<th>#</th>
								<th>Serviço</th>
								<th>Local</th>
								<th>Medida</th>
								<th>Valor Medida</th>
								<th>Valor Serviço</th>
								<th>Excluir</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data as $res):	extract($res); ?>
							<tr>
								<td><?= $id_tabela_preco ?></td>
								<td><?= $tipo_servico ?></td>
								<td><?= $tipo_local ?></td>
								<td><?= $tipo_medida ?></td>
								<td><?= $valor_medida ?></td>
								<td><?= $valor_servico ?></td>
								<td><?php	echo"<a href='../actions/ExcluirController.php?id=$id_tabela_preco&table=$table&idName=id_tabela_preco&page=$page'onclick='return confirmDelete();' class='btn btn-warning'><i class='icon-remove-sign'></i></a>";?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
      </div>
   </div>
	<!--
	 // Formulário para Incluir dados natabela
	 -->
	<div class="row-fluid">
   	<div class="span5 offset1">
			<legend class="legend-form">Editar Serviço</legend>
			<form class="form form-crud"  name="form" action="../actions/TabelaPrecoController.php" method="post" enctype="multipart/form-data" >
				<div class="controls">
						<select class="span12" name="id" id="id" required="required">
							<option value="" selected="selected" disabled="disabled">Escolha o ID</option>
							<?php foreach($data as $res):	extract($res); ?>
								<option value=" <?= $id_tabela_preco; ?> "> <?= $id_tabela_preco ?> </option>
							<?php endforeach; ?>
						</select>
					</div>
				<label class="control-label" for="valorMedida">Valor Medida</label>
				<div class="controls">
					<input type="number" class="span12" name="valorMedida" id="valorMedida" pattern="[0-9]+" placeholder="Valor da medida..." value="" required>
				</div>
				<label class="control-label" for="valorServico">Valor Servico</label>
				<div class="controls">
					<input type="number"  class="span12" name="valorServico" id="valorServico" placeholder="Valor do servico..." value="" required>
				</div>
				<input type="hidden" name="operacao" value="update">
				<div class="controls">
					<input type="submit" class="btn btn-inverse" name="editar" value="Editar">
				</div>
			</form>
   	</div>
   </div>
</section>
<?php include_once('../include/footer.php') ?>