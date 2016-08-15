<?php
	include_once('../functions/crud.php');
	include_once('../functions/general.php');

	function sendMail($nome, $email, $telefone, $assunto, $mensagem, $destinatario, $titulo, $data, $hora, $ip){
		$corpo_do_email = '<P>'.$titulo.'</P>
		<p><b>Nome:</b> '.$nome.'
		<p><b>E-Mail:</b> '.$email.'
		<p><b>Telefone:</b> '.$telefone.'
		<p><b>Assunto:</b> '.$assunto.'
		<p><b>Mensagem:</b> '.$mensagem.'</p>
		<p><b>$data:</b> '.$data.'</p>
		<p><b>$hora:</b> '.$hora.'</p>
		<p><b>$ip:</b> '.$ip.'</p>
		<hr>';
		$headers = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: $email\r\n"; // remetente
		$headers .= "Return-Path: $email \r\n"; // return-path
		$envio = mail($destinatario, $assunto, $corpo_do_email, $headers);
		if($envio){
			alert('Email enviado com sucesso!');
			pageRedirects('../view/contatos.php');
		}
		else{
			$_SESSION['error'] = 'Falha ao enviar email. Por favos entre em contato conosco atraves das redes sociais ou telefone enquanto corrigimos o problema. Pedimos desculpas pelos transtornos.';
			pageRedirects('../view/contatos.php');
		}
	}

	function insertSendMail(){
		$array=[
			'nome'      => $nome,
			'email'     => $email,
			'telefone'  => $telefone,
			'mensagem'  => $mensagem,
			'data'		=> $data,
			'hora'		=> $hora,
			'ip'		   => $ip
		];

		inserir('email', $array);
	}




	$contatos = read('contatos');
	$banner = read('banner');
	$linha1 = read('linha1', '*', "WHERE ativo = 1");
	$linha2 = read('linha2');
	$numLinha2 = count($linha2);

	