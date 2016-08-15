<?php 
	include_once('../service/AtendimentoService.php');

	if(isset($_POST['editar']) && !empty($_POST['idLinha1']) && !empty($_POST['titulo1']) && !empty($_POST['texto1'])  && !empty($_POST['ativo']) && $_FILES['imgLinha1']['size'] > 0 ){

		$idLinha1 = $_POST['idLinha1'];
		$title1 = trim($_POST['titulo1']);
		$text1 = trim($_POST['texto1']);
		$ativo = $_POST['ativo'];
		$fileSize = $_FILES['imgLinha1']['size'];
		$fileType = $_FILES['imgLinha1']['type'];
		$tempName = $_FILES['imgLinha1']['tmp_name'];
		$originName = $_FILES['imgLinha1']['name'];
		validateEditionLinha1Table($idLinha1, $title1, $text1, $ativo, $fileSize, $fileType, $tempName, $originName);
	}
	elseif(isset($_POST['editar']) && !empty($_POST['idLinha2']) && !empty($_POST['titulo2']) && !empty($_POST['texto2'])  && !empty($_POST['ativo']) && $_FILES['imgLinha2']['size'] > 0 ){

		$idLinha2 = $_POST['idLinha2'];
		$title2 = trim($_POST['titulo2']);
		$text2 = trim($_POST['texto2']);
		$ativo = $_POST['ativo'];
		$fileSize = $_FILES['imgLinha2']['size'];
		$fileType = $_FILES['imgLinha2']['type'];
		$tempName = $_FILES['imgLinha2']['tmp_name'];
		$originName = $_FILES['imgLinha2']['name'];
		validateEditionLinha2Table($idLinha2, $title2, $text2, $ativo, $fileSize, $fileType, $tempName, $originName);
	}
	elseif(isset($_GET['id']) && $_GET['active'] == 'false'){
		$id = $_GET['id'];
		$table = $_GET['table'];
		setFalseActive($id, $table);
	}
	elseif(isset($_GET['id']) && $_GET['active'] == 'true'){
		$id = $_GET['id'];
		$table = $_GET['table'];
		setTrueActive($id, $table);
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/atendimento.php');
	}
