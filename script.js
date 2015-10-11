$(document).ready(function() {

	$("#moremenu").hide();
	$("li").css('cursor', 'pointer');
	$("li").click(function(){
		$("#moremenu").toggle(300);
	});

	$(window).resize(function() {
		if($(window).width() < 735){
			$(".title").addClass("whiteText");
		}
		else{
			$(".title").removeClass("whiteText");
		}
	})
});

