<?php 

//========= Tabela Contatos =================//

function createArrayContactsTable ($nm_contato, $ds_contato, $icon_contato, $crud) {
	if(!isset($nm_contato, $ds_contato, $icon_contato))
		die("Um ou mais parametro esta como indefinido");

	if($crud == 'create'){	
		$array = array(
				'nm_contato'   => $nm_contato,
				'ds_contato'   => $ds_contato,
				'icon_contato' => $icon_contato
			);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
			'nm_contato'   => $nm_contato,
			'ds_contato'   => $ds_contato,
			'icon_contato' => $icon_contato
		);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != null)
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("createArrayContactsTable")');
};

//========= Tabela Atendimento =================//

function createArrayLinha1Table ($titulo1, $texto1, $img_linha1, $ativo, $crud) {
	if(!isset($titulo1, $texto1, $ativo, $img_linha1))
		die("Um ou mais parametro esta com indefinido");

	if($crud == 'create'){	
		$array = array(
				'titulo1'    => $titulo1,
				'texto1'     => $texto1,
				'img_linha1' => $img_linha1,
				'ativo'      => $ativo
			);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
				'titulo1'    => $titulo1,
				'texto1'     => $texto1,
				'img_linha1' => $img_linha1,
				'ativo'      => $ativo
			);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != null)
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("createArrayAtendimentoTable")');
};

function createArrayLinha2Table ($titulo2, $texto2, $img_linha2, $ativo, $crud) {
	if(!isset($titulo2, $texto2, $ativo, $img_linha2))
		die("Um ou mais parametro esta com indefinido");

	if($crud == 'create'){	
		$array = array(
				'titulo2'    => $titulo2,
				'texto2'     => $texto2,
				'img_linha2' => $img_linha2,
				'ativo'      => $ativo
			);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
				'titulo2'    => $titulo2,
				'texto2'     => $texto2,
				'img_linha2' => $img_linha2,
				'ativo'      => $ativo
			);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != null)
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("createArrayAtendimentoTable")');
};


//========= Tabela Serviços =================//

function createArrayPriceTable  ($valor_medida, $valor_servico, $crud) {
	if(!isset($valor_medida, $valor_servico))
		die("Um ou mais parametro esta com indefinido");

	if($crud == 'create'){	
		$array = array(
				'valor_medida'  => $valor_medida,
				'valor_servico' => $valor_servico
			);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
				'valor_medida'  => $valor_medida,
				'valor_servico' => $valor_servico
			);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != null)
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("createArrayServicesDescriptionTable")');
};

//========= Tabela Contatos =================//

function createArrayUserTable ($nome, $email, $userName, $senha, $nivel, $crud) {
	if(!isset($nome, $email, $userName, $senha, $nivel, $crud))
		die("Um ou mais parametro esta como indefinido");

	if($crud == 'create'){	
		$array = array(
			'nome'		 => $nome,
			'email'		 => $email,
			'user_name'  => $userName,
			'senha'		 => $senha,
			'nivel'		 => $nivel
		);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
			'nome'		 => $nome,
			'email'		 => $email,
			'user_name'  => $userName,
			'senha'		 => $senha,
			'nivel'		 => $nivel
		);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != '')
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("createArrayUserTable")');
};

function createArrayBannerTable ($nm_banner, $img_banner, $crud) {
	if(!isset($nm_banner, $img_banner))
		die("Um ou mais parametro esta como indefinido");

	if($crud == 'create'){	
		$array = array(
				'nm_banner'   => $nm_banner,
				'img_banner'   => $img_banner
			);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
				'nm_banner'   => $nm_banner,
				'img_banner'   => $img_banner
			);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != null)
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("createArrayContactsTable")');
};