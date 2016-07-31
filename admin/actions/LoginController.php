<?php
	include_once '../service/LoginService.php';
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('general'));

	if(isset($_POST['entrar']) && !empty($_POST['user']) && !empty($_POST['senha'])){
		$user  = addslashes(trim($_POST['user']));
		$senha = addslashes(trim($_POST['senha']));
		checkLogin($user, $senha);
	}elseif(isset($_GET['logof']) && $_GET['logof'] == true){
		closeSession();
		pageRedirects('../view/index.php');
	}
	else{
		pageRedirects('../index.php');
	}

		
