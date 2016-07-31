<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));

	//Declaração de constantes e variáveis
	define('TABELA', 'atendimento');
	$table = 'atendiemnto';
	$page = 'atendimento';

	function validateInsertAtendimentoTable($title, $text, $fileSize, $fileType, $tempName, $originName){
		$folder = '../../img/uploads';
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
		$maximumSize = 1024 * 1024;
		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getFileExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayAtendimentoTable($title, $text, $response, 'create');
				$_SESSION['success'] = create(TABELA, $array);
				pageRedirects('../view/atendiemnto.php');
			}
			else{
				$_SESSION['error'] = "Falha ao mover o arquivo";
				pageRedirects('../view/atendimento.php');
			}
		}
		else{
			$_SESSION['error'] = $response;
			pageRedirects('../view/atendimento.php');
		}
	}

	function validateEditionAtendimentoTable($idAtendimento, $title, $text, $fileSize, $fileType, $tempName, $originName){
		$folder = '../../img/uploads';
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
		$maximumSize = 1024 * 1024;
		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getFileExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayAtendimentoTable($title, $text, $response, 'update');
				$_SESSION['success'] = update(TABELA, $array, "id_atendimento = '$idAtendimento'");
				pageRedirects('../view/atendimento.php');
			}
			else{
				$_SESSION['error'] = "Falha ao mover o arquivo";
				pageRedirects('../view/atendimento.php.php');
			}
		}
		else{
			$_SESSION['error'] = $response;
			pageRedirects('../view/atendimento.php');
		}
	}

	$data = @read('atendimento');