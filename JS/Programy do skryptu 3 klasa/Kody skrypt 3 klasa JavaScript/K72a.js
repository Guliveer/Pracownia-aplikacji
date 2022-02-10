$(document).ready(function()
{
	$(".menu a").hover(function(){
		$(this).next("p").animate({opacity: "show", top: "-75"}, "slow");
	}, function(){
		$(this).next("p").animate({opacity: "hide", top: "-85"}, "fast");
	});
});