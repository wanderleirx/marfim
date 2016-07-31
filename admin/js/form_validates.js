this.validateFormBannerInclude = function (){
	var arrayExtesion = ['jpg', 'jpeg', 'png', 'gif'];
	var imagem = new Image();
	var fileSize = document.getElementById("arquivo").files[0].size;
	var pathImage = document.getElementById('arquivo').value;
	var getExtension = pathImage.indexOf('.');
	if(getExtension != -1){
		var extension = pathImage.substr(getExtension + 1);
		if(arrayExtesion.indexOf(extension) == -1){
			alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif !');
			return false;
		}
		if(fileSize > 1048576){ //MAX_FILE_SIZE = 1048576 Bytes
			alert("TAMANHO DO ARQUIVO EXCEDE O PERMITIDO (1MB)!");
			return false;
		}
	}
	else{
		alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif !');
		return false;
	}
};

this.validateFormBannerEdit = function (){
	var arrayExtesion = ['jpg', 'jpeg', 'png', 'gif'];
	var imagem = new Image();
	var fileSize = document.getElementById("arquivo2").files[0].size;
	var pathImage = document.getElementById('arquivo2').value;
	var getExtension = pathImage.indexOf('.');
	if(getExtension != -1){
		var extension = pathImage.substr(getExtension + 1);
		if(arrayExtesion.indexOf(extension) == -1){
			alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif !');
			return false;
		}
		if(fileSize > 1048576){ //MAX_FILE_SIZE = 1048576 Bytes
			alert("TAMANHO DO ARQUIVO EXCEDE O PERMITIDO (1MB)!");
			return false;
		}
	}
	else{
		alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif !');
		return false;
	}
};

this.validateFormContatoInclude = function (){
	var arrayExtesion = ['jpg', 'jpeg', 'png', 'gif', 'icon'];
	var fileSize = document.getElementById("arquivo").files[0].size;
	var pathImage = document.getElementById('arquivo').value;
	var getExtension = pathImage.indexOf('.');
	if(getExtension != -1){
		var extension = pathImage.substr(getExtension + 1);
		if(arrayExtesion.indexOf(extension) == -1){
			alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif, icon !');
			return false;
		}
		if(fileSize > 524288){ 
			alert("TAMANHO DO ARQUIVO EXCEDE O PERMITIDO (500kb)!");
			return false;
		}
	}
	else{
		alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif, icon !');
		return false;
	}
};

this.validateFormContatoEdit = function (){
	var arrayExtesion = ['jpg', 'jpeg', 'png', 'gif', 'icon'];
	var imagem = new Image();
	var fileSize = document.getElementById("arquivo2").files[0].size;
	var pathImage = document.getElementById('arquivo2').value;
	var getExtension = pathImage.indexOf('.');
	if(getExtension != -1){
		var extension = pathImage.substr(getExtension + 1);
		if(arrayExtesion.indexOf(extension) == -1){
			alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif, icon !');
			return false;
		}
		if(fileSize > 524288){ //MAX_FILE_SIZE = 1048576 Bytes
			alert("TAMANHO DO ARQUIVO EXCEDE O PERMITIDO (500KB)!");
			return false;
		}
	}
	else{
		alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif, icon !');
		return false;
	}
};

this.validateformPriceTableInclude = function (){

};

function moeda(z){
	v = z.value;
	v=v.replace(/\D/g,"") // permite digitar apenas numero
	v=v.replace(/(\d{1})(\d{14})$/,"$1.$2") // coloca ponto antes dos ultimos digitos
	v=v.replace(/(\d{1})(\d{11})$/,"$1.$2") // coloca ponto antes dos ultimos 11 digitos
	v=v.replace(/(\d{1})(\d{8})$/,"$1.$2") // coloca ponto antes dos ultimos 8 digitos
	v=v.replace(/(\d{1})(\d{5})$/,"$1.$2") // coloca ponto antes dos ultimos 5 digitos
	v=v.replace(/(\d{1})(\d{1,2})$/,"$1,$2") // coloca virgula antes dos ultimos 2 digitos
	z.value = v;
}


function IsEmail(email){
    var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
    var check=/@[w-]+./;
    var checkend=/.[a-zA-Z]{2,3}$/;
    if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){return false;}
    else {return true;}
}

this.validateUserForm = function () {
	var name = document.getElementById('nomeUsuario').value;
	var email = document.getElementById('emailUsuario').value;
	var userName = document.getElementById('userName').value;
	var password = document.getElementById('senhaUsuario').value;
	var level = document.getElementById('nivelUsuario').value;

	//variaveis que arnazena expressões regulares para validação de email usuario e senha
	var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
	var check=/@[w-]+./;
	var checkend=/.[a-zA-Z]{2,3}$/;
	var userNameCheck =/[a-zA-Z0-9]{8,12}$/;
	var passwordCheck =/[a-zA-Z0-9]{6,8}$/;

	if(name.length < 3){
		alert('Digite um nome válido');
		document.getElementById('nomeUsuario').focus();
		return false;
	}
	if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){
		alert('Digite um nome válido');
		document.getElementById('emailUsuario').focus();
		return false;
	}
	if(userName.length < 8 && userName.length > 12){
		alert('Digite um nome de usuário válido');
		document.getElementById('userName').focus();
		return false;
	}
	if(password.length < 6 && password.length > 8 ){
		alert('Digite uma senha válida');
		document.getElementById('senhaUsuario').focus();
		return false;	
	}
	if(level != '1' && level != '2'){
		alert('Escolha um valor de Nivel do usuário');
		document.getElementById('nivelUsuario').focus();
		return false;	
	}

};

this.validateUserEditForm = function () {
	var userName = document.getElementById('userName').value;
	var password = document.getElementById('senhaUsuario').value;

	//variaveis que arnazena expressões regulares para validação de email usuario e senha
	var userNameCheck =/[a-zA-Z0-9]{8,12}$/;
	var passwordCheck =/[a-zA-Z0-9]{6,8}$/;

	if(userName.length < 8 && userName.length > 12){
		alert('Digite um nome de usuário válido');
		document.getElementById('userName').focus();
		return false;
	}
	if(password.length < 6 && password.length > 8 ){
		alert('Digite uma senha válida');
		document.getElementById('senhaUsuario').focus();
		return false;	
	}
};