<?php 
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));

	//Declaração de constantes e variáveis
	define('TABELA', 'usuario');
	$table = 'usuario';
	$page = 'my-user';

	function updateUserData($id, $nome, $userName, $password){
		$array = array(
			'nome'      => $nome,
			'user_name' => $userName,
			'senha'     => $password 
			);
		$_SESSION['success'] = update(TABELA, $array, "id_usuario = '$id' ");
		updateStartionSession($id, $userName, $password);
		pageRedirects('../view/my-user.php');
	}

	$idUser = $_SESSION['id_usuario'];
	$userName = $_SESSION['user_name'];
	$nome = $_SESSION['nome'];
	$id_user = $_SESSION['id_usuario'];