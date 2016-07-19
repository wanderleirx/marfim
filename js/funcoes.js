$(function (){
	$(".banner ul").cycle ({
		fx: 'shuffle',
		speed: 1000,
		timeout: 3000,
		pause: '1',
	});
});


// Função para o carrosel do conteúdo da index

$(function(){
	$("#carrossel").jCarouselLite({
    	speed : 1000,
    	btnPrev: '#antes',
		btnNext: '#depois',
		visible: 4,
		scroll: 2,
	});
});

