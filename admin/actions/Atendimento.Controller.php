<?php 
	include_once('../service/AtendimentoService.php');

	if(isset($_POST['enviar']) && !empty($_POST['titulo']) && !empty($_POST['texto']) && $_POST['operacao'] == 'create' && $_FILES['imgAtendimento']['size'] > 0 ){

		$title = trim($_POST['titulo']);
		$text = trim($_POST['texto']);
		$fileSize = $_FILES['imgAtendimento']['size'];
		$fileType = $_FILES['imgAtendimento']['type'];
		$tempName = $_FILES['imgAtendimento']['tmp_name'];
		$originName = $_FILES['imgAtendimento']['name'];
		validateInsertAtendimentoTable($title, $text, $fileSize, $fileType, $tempName, $originName);
	}
	elseif(isset($_POST['editar']) && !empty($_POST['idAtendimento']) && !empty($_POST['titulo']) && !empty($_POST['texto']) && $_POST['operacao'] == 'edit' && $_FILES['imgAtendimento']['size'] > 0 ){

		$idAtendimento = $_POST['idAtendimento'];
		$title = trim($_POST['titulo']);
		$text = trim($_POST['texto']);
		$fileSize = $_FILES['imgAtendimento']['size'];
		$fileType = $_FILES['imgAtendimento']['type'];
		$tempName = $_FILES['imgAtendimento']['tmp_name'];
		$originName = $_FILES['imgAtendimento']['name'];
		validateEditionAtendimentoTable($idAtendimento, $title, $text, $fileSize, $fileType, $tempName, $originName);
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/atendimento.php');
	}