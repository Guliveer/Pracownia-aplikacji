$(document).ready(function()
{
	$(".blok h3").eq(0).addClass("aktywny ");
	$(".blok p").eq(0).show();
	$(".blok h3").click(function() {
		$(this).next("p").slideToggle("slow").siblings("p:visible").slideUp("slow");
		$(this).toggleClass("aktywny ");
		$(this).siblings("h3").removeClass("aktywny ");
	});
});