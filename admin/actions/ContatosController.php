<?php
	include_once '../service/ContatosService.php';
	
	if(isset($_POST['enviar']) && !empty($_POST['nomeContato']) && !empty($_POST['descricaoContato']) && $_POST['operacao'] == 'create' && $_FILES['iconContato']['size'] > 0 ){

		$contactName = $_POST['nomeContato'];
		$descriptionContact = $_POST['descricaoContato'];
		$fileSize = $_FILES['iconContato']['size'];
		$fileType = $_FILES['iconContato']['type'];
		$tempName = $_FILES['iconContato']['tmp_name'];
		$originName = $_FILES['iconContato']['name'];
		validateInsertContactsTable($contactName, $descriptionContact, $fileSize, $fileType, $tempName, $originName);
	}
	elseif(isset($_POST['editar']) && !empty($_POST['idContato']) && !empty($_POST['nomeContato']) && !empty($_POST['descricaoContato']) && $_POST['operacao'] == 'edit' && $_FILES['iconContato']['size'] > 0 ){
		$id = $_POST['idContato'];
		$contactName = $_POST['nomeContato'];
		$descriptionContact = $_POST['descricaoContato'];
		$fileSize = $_FILES['iconContato']['size'];
		$fileType = $_FILES['iconContato']['type'];
		$tempName = $_FILES['iconContato']['tmp_name'];
		$originName = $_FILES['iconContato']['name'];
		validateEditionContactsTable($id, $contactName, $descriptionContact, $fileSize, $fileType, $tempName, $originName);
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/contatos.php');
	}
	 	