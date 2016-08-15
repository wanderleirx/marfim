<?php 
	include_once('../service/OrcamentosService.php');
   include_once('../include/head.php');
   include('../include/header.php');
?>
<section id="content">
	<div class="row-fluid">
		<div class="span10 offset1">
			<table class="table table-striped table-bordered table-crud">
				<legend class="table">Dados Tabela Orçamentos</legend>
				<thead class="thead">
					<tr>
						<th>#</th>
						<th>Email</th>
						<th>Telefone</th>
						<th>Serviço</th>
						<th>Local</th>
						<th colspan="3">Cômodos/Ambientes - Quantidade - Preço</th>
						<th>Preço Serviço</th>
						<th>Valor Total</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($orcamentos as $res):	extract($res); ?>
					<tr>
						<td><?= $id_orcamento; ?></td>
						<td><?= $email; ?></td>
						<td><?= $telefone; ?></td>
						<td><?= $servico; ?></td>
						<td><?= $local; ?></td>
						<td><?= $tipo_medida; ?></td>
						<td><?= $medida; ?></td>
						<td><?= $preco_medida; ?></td>
						<td><?= $preco_servico; ?></td>
						<td><?= $valor_total; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?php include_once('../include/footer.php') ?>