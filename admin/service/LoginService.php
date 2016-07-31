<?php 
	session_start();
	include_once('../functions/include_directory_functions.php');
	includePhpExtension(array('crud', 'general'));

	function checkLogin($user, $senha){
		$data = read('usuario', '*', "WHERE user_name = '$user' AND senha = '$senha'");
		if($data){
			startSession($data);
			pageRedirects('../view/home.php');
		}else{
			pageRedirects('../view/index.php?error=1');
		}
	}



