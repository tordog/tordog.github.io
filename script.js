$(document).ready(function() {

	$("#moremenu").hide();
	$("li").css('cursor', 'pointer');
	$("li").click(function(){
		$("#moremenu").toggle(300);
	});
});

