<?php
	include_once('../service/OrcamentoService.php');

	if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['tipo']) && !empty($_POST['local']) && !empty($_POST['medida']) && !empty($_POST['tipoMedida'])){

		$email = trim($_POST['email']);
		$phone = trim($_POST['phone']);
		$tipoServico = trim($_POST['tipo']);
		$local = trim($_POST['local']);
		$medida = trim($_POST['medida']);
		$tipoMedida = trim($_POST['tipoMedida']);
		budget($email, $phone, $tipoServico, $local, $medida, $tipoMedida);
	}
