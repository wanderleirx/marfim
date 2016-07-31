<?php
	include_once('../service/MyUserService.php');

	if(isset($_POST['enviar']) && !empty($_POST['nome']) && !empty($_POST['userName']) && !empty('id')){
		
		$id = $_POST['id'];
		$nome = trim($_POST['nome']);
		$userName = trim($_POST['userName']);
		$password = trim($_POST['password']);
		updateUserData($id, $nome, $userName, $password);
	}
	else{
		$_SESSION['error'] = "Todos os campos devem ser preenchidos!";
		pageRedirects('../view/my-user.php');
	}