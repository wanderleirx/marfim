<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));

	//Declaração de constantes e variáveis
	define('TABELA', 'orcamentos');

	$orcamentos = read(TABELA);