// $(function (){
// 	$(".banner ul").cycle ({
// 		fx: 'fade',
// 		speed: 1000,
// 		timeout: 3000,
// 		pause: '1',
// 	});
// });


// // Função para o carrosel do conteúdo da index

// $(function(){
// 	$("#carrossel").jCarouselLite({
//     	speed : 1000,
//     	btnPrev: '#antes',
// 		btnNext: '#depois',
// 		visible: 4,
// 		scroll: 2,
// 	});
// });

this.orcamento = function (){
	var local = document.getElementById('local').value;
	if(local != 'Escritório'){
		document.getElementById('comodo').style.display = "block";
		document.getElementById('ambiente').style.display = "none";
		document.getElementById('medida').style.display = "block";
		document.getElementById('tipoMedida').style.display = "block";
		document.getElementById('tipoMedida').value="cômodo(s)";
	}else{
		document.getElementById('comodo').style.display = "none";
		document.getElementById('ambiente').style.display = "block";
		document.getElementById('medida').style.display = "block";
		document.getElementById('tipoMedida').style.display = "block";
		document.getElementById('tipoMedida').value="ambiente(s)";
	}
};

function pageRedirectsJs(path){
	window.location.href = path;
}
this.confirmDelete = function (dados){
	var resposta = confirm("Deseja remover esse registro?");
	if (resposta != true)
		return false;
}