<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));

	//Declaração de constantes e variáveis
	define('TABELA', 'banner');
	$table = 'banner';
	$page = 'banner';

	function validateInsertBannerTable($nameBanner, $fileSize, $fileType, $tempName, $originName){
		$folder = '../../img/uploads';
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
		$maximumSize = 1024 * 1024 * 2;
		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getFileExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayBannerTable($nameBanner, $response, 'create');
				$_SESSION['success'] = create(TABELA, $array);
				pageRedirects('../view/banner.php');
			}
			else{
				$_SESSION['error'] = "Falha ao mover o arquivo";
				pageRedirects('../view/form-banner.php');
			}
		}
		else{
			$_SESSION['error'] = $response;
			pageRedirects('../view/form-banner.php');
		}
	}

	function validateEditionBannerTable($idBanner, $bannerName, $fileSize, $fileType, $tempName, $originName){
		$folder = '../../img/uploads';
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
		$maximumSize = 1024 * 1024 * 2;
		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getFileExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayBannerTable($bannerName, $response, 'update');
				$_SESSION['success'] = update(TABELA, $array, "id_banner = '$idBanner'");
				pageRedirects('../view/banner.php');
			}
			else{
				$_SESSION['error'] = "Falha ao mover o arquivo";
				pageRedirects('../view/banner.php');
			}
		}
		else{
			$_SESSION['error'] = $response;
			pageRedirects('../view/banner.php');
		}
	}

	$data = @read('banner');