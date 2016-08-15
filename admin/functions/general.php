<?php 

function printBr() {
	echo "<br/><br/>";
}

/*
	======= Funções de Javascript via php =======
 */

function pageRedirects($path){
	echo "<script>location.href='{$path}';</script>";
}

function alert($text='Alert') {
	echo "<script>alert('$text')</script>";
}


/*
	======= Funções de conversões =======
 */

function clearNumber($valor){
	$check = stripos($valor, ',');
	if($check > 0){
		$valor = str_replace(',', '', $valor);
		$check = stripos($valor, '.');
		if($check > 0){
			$valor = str_replace(',', '', $valor);
			return $valor;
		}
		return $valor;	
	}
	return $valor;	
}


function startSession ($data) {
	foreach ($data as $res){
		extract($res);
		$_SESSION['user_name'] = $user_name;
		$_SESSION['nivel'] = $nivel;
		$_SESSION['email'] = $email;
		$_SESSION['nome'] = $nome;
		$_SESSION['id_usuario'] = $id_usuario;
	}
}

function closeSession () {
	unset($_SESSION['user_name']);
	unset($_SESSION['nome']);
	unset($_SESSION['email']);
	unset($_SESSION['nivel']);	
	unset($_SESSION['id_usuario']);
	session_destroy();
}

function updateStartionSession ($id, $user, $senha){
	$data = read('usuario', '*', "WHERE user_name = '$user' AND senha = '$senha'");
	startSession($data);
}