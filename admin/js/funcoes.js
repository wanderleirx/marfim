function sticky_footer() {
	var mFoo = $("footer");
	if ((($(document.body).height() + mFoo.outerHeight()) < $(window).height() && mFoo.css("position") == "fixed") || ($(document.body).height() < $(window).height() && mFoo.css("position") != "fixed")) {
		mFoo.css({ position: "fixed", bottom: "0px", width: "100%" });
	} else {
		mFoo.css({position: "static"});
	}
}

jQuery(document).ready(function($){
	sticky_footer();
	$(window).scroll(sticky_footer);
	$(window).resize(sticky_footer);
	$(window).load(sticky_footer);
});

this.filePathCreate = function (){
	document.getElementById('uploadFile').value = document.getElementById('arquivo').value;
};

this.filePathEdit = function (){
	document.getElementById('uploadFile2').value = document.getElementById('arquivo2').value;
};

function pageRedirectsJs(path){
	window.location.href = path;
}

this.confirmDelete = function (dados){
	var resposta = confirm("Deseja remover esse registro?");
	if (resposta != true)
		return false;
}

