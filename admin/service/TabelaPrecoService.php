<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));

	define('TABELA', 'tabela_preco');
	$table = 'tabela_preco';
	$page = 'tabela-preco';

	function validateInsertPriceTable($id, $valorMedida, $valorServico){
		$valorMedida = clearNumber($valorMedida);
		$valorServico = clearNumber($valorServico);
		$array = createArrayPriceTable($valorMedida, $valorServico, 'update');
		$_SESSION['success'] = update(TABELA, $array, "id_tabela_preco = '$id' ");
		pageRedirects('../view/tabela-preco.php');
	}











	$data = @read('tabela_preco');