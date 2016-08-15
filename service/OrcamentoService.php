<?php
	session_start();
	include_once('../functions/crud.php');
	include_once('../functions/general.php');

	function budget($email, $phone, $servico, $local, $medida, $tipoMedida){
		$data = queryPriceTable($servico, $local, $tipoMedida);
		foreach ($data as $res):
			extract($res);
			$preco_medida = $valor_medida;
			$preco_servico = $valor_servico;
		endforeach;
		$valorTotal = calculateBudget($medida, $valor_medida, $valor_servico);
		insertBudget($email, $phone, $servico, $local, $tipoMedida, $medida, $preco_medida, $preco_servico, $valorTotal);
		$response = sendEmailBudget($email, $servico, $local, $medida, $tipoMedida, $valorTotal);
		if($response){
			$_SESSION['success'] = 'Orçamento enviado para o seu email. Verifica sua caixa de entrada!';
			pageRedirects('../view/orcamentos.php');
		}
		else{
			$_SESSION['error'] = 'Falha ao enviar o orçamento. Por favos entre em contato conosco pela página contatos ou atraves das redes sociais e ou telefone.';
			pageRedirects('../view/orcamentos.php');
		}

	}

	function queryPriceTable($servico, $local, $tipoMedida){
		$table = 'tabela_preco';
		return read($table, '*', "WHERE tipo_servico = '$servico' AND tipo_local = '$local' AND tipo_medida = '$tipoMedida'");
	}

	function calculateBudget($medida, $preco_medida, $preco_servico){
		return ($medida * $preco_medida) + $preco_servico;
	}

	function insertBudget($email, $phone, $servico, $local, $tipoMedida, $medida, $preco_medida, $preco_servico, $valorTotal){
		$table = 'orcamentos';
		$array = array(
			'email'				=> $email,
			'telefone'			=> $phone,
			'servico'			=> $servico,
			'local'				=> $local,
			'tipo_medida'		=> $tipoMedida,
			'medida'				=> $medida,
			'preco_medida'		=> $preco_medida,
			'preco_servico'	=> $preco_servico,
			'valor_total' 		=> $valorTotal
		);
		create($table, $array);
	}

	function sendEmailBudget($email, $servico, $local, $medida, $tipoMedida, $valorTotal){
		$titulo = 'Resposta de Orçamento';
		$remetente = 'Marfim Dedetizadora <contato@marfimdedetizadora.com.br>';
		$destinatario = $email;
		$assunto = 'Resposta de Orçamento';
		$corpo_do_email = "<h3>$titulo</h3>
		<p><b>Serviço: </b>$servico</p>
		<p><b>Local: </b>$local</p>
		<p><b>$tipoMedida: </b>$medida</p>
		<p><b>*Valor Aproximado: </b>R$$valorTotal,00</p>
		<p><small>*O valor informado pode sofre alterações ao visitarmos o local no qual prestaremos o serviço</small> </p>
		<hr>
		<h4>Marfim Dedetizadora</h4>
		";

		$headers = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: $remetente\r\n"; // remetente
		$headers .= "Return-Path: $remetente \r\n"; // return-path
		$envio = mail($destinatario, $assunto, $corpo_do_email, $headers);
		return $envio;
	}
