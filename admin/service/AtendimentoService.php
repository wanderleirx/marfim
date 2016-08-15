<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));

	//Declaração de constantes e variáveis
	define('TABELA1', 'linha1');
	define('TABELA2', 'linha2');

	function validateEditionLinha1Table($idLinha1, $title, $text, $ativo, $fileSize, $fileType, $tempName, $originName){
		$folder = '../../img/uploads';
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
		$maximumSize = 1024 * 1024;
		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getFileExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArraylinha1Table($title, $text, $response, $ativo, 'update');
				$_SESSION['success'] = update(TABELA1, $array, "id_linha1 = '$idLinha1'");
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

	function validateEditionLinha2Table($idLinha2, $title, $text, $ativo, $fileSize, $fileType, $tempName, $originName){
		$folder = '../../img/uploads';
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
		$maximumSize = 1024 * 1024;
		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getFileExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayLinha2Table($title, $text, $response, $ativo, 'update');
				$_SESSION['success'] = update(TABELA2, $array, "id_linha2 = '$idLinha2'");
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

	function setTrueActive($id, $table){
		$queryUpdate = "UPDATE $table SET ativo = 1 WHERE id_{$table} = '$id'";
		list( , $link) = executeQuery($queryUpdate);	
		$_SESSION['success'] = mysqli_affected_rows($link).' Registros atualizados com sucesso ';
		pageRedirects('../view/atendimento.php');
	}

	function setFalseActive($id, $table){
		$queryUpdate = "UPDATE $table SET ativo = 0 WHERE id_{$table} = '$id'";
		list( , $link) = executeQuery($queryUpdate);	
		$_SESSION['success'] = mysqli_affected_rows($link).' Registros atualizados com sucesso ';
		pageRedirects('../view/atendimento.php');
	}

	$linha1 = read('linha1');
	$linha2 = read('linha2');