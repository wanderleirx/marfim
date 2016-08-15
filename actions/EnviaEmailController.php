<?php
	include_once('../service/EnviaEmailService.php');
	// Recebe dados do formulario de envio de email do cliente
	if(isset($_POST['nome']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['mensagem']))
	{

		$nome=trim($_POST['nome']);
		$email=trim($_POST['email']);
		$telefone=trim($_POST['phone']);
		$assunto=trim($_POST['assunto']);
		$mensagem=trim($_POST['mensagem']);
		$destinatario = 'contato@marfimdedetizadora.com.br';
		$titulo = 'Email enviado pelo site.';

		date_default_timezone_set("Brazil/East");
		$data = date("Y-m-d");
		$hora = date("H:i:s");
		//pega o ip do usuário
		$ip = $_SERVER['REMOTE_ADDR'];
		sendMailSite($nome, $email, $telefone, $assunto, $mensagem, $destinatario, $titulo, $data, $hora, $ip);
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/tabela-preco.php');
	}
