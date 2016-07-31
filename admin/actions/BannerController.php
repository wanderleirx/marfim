<?php
	include_once '../service/BannerService.php';

	if(isset($_POST['enviar']) && !empty($_POST['nomeBanner']) && $_POST['operacao'] == 'create' && $_FILES['imgBanner']['size'] > 0 ){

		$bannerName = trim($_POST['nomeBanner']);
		$fileSize = $_FILES['imgBanner']['size'];
		$fileType = $_FILES['imgBanner']['type'];
		$tempName = $_FILES['imgBanner']['tmp_name'];
		$originName = $_FILES['imgBanner']['name'];
		validateInsertBannerTable($bannerName, $fileSize, $fileType, $tempName, $originName);
	}
	elseif(isset($_POST['editar']) && !empty($_POST['idBanner']) && !empty($_POST['nomeBanner']) && $_POST['operacao'] == 'edit' && $_FILES['imgBanner']['size'] > 0 ){
		$idBanner = $_POST['idBanner'];
		$bannerName = trim($_POST['nomeBanner']);
		$fileSize = $_FILES['imgBanner']['size'];
		$fileType = $_FILES['imgBanner']['type'];
		$tempName = $_FILES['imgBanner']['tmp_name'];
		$originName = $_FILES['imgBanner']['name'];
		validateEditionBannerTable($idBanner, $bannerName, $fileSize, $fileType, $tempName, $originName);
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/banner.php');
	}