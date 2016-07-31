<?php 
	include_once('../service/TabelaPrecoService.php');

	if(isset($_POST['editar']) && !empty($_POST['id']) && !empty($_POST['valorMedida']) && !empty($_POST['valorServico']) && $_POST['operacao'] == 'update'){

		$id = $_POST['id'];
		$valorMedida = $_POST['valorMedida'];
		$valorServico = $_POST['valorServico'];
		validateInsertPriceTable($id, $valorMedida, $valorServico);
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/tabela-preco.php');
	}