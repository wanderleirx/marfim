


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_POST['valor'])):
			$valor = $_POST['valor'];
			$resul = stripos($valor, ',');
			if($resul > 0){
				echo '<br/>'.$valor;
				$resul = str_replace(',', '', $valor);
				echo '<br/>'.$resul;
			}
			else
				echo '<br/>Nao encontrou!';
		endif
	 ?>
	<form action="" method="post" accept-charset="utf-8">
		<input type="text" name="valor" value="" placeholder="">
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>