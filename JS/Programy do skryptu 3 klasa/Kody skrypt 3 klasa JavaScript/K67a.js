$(document).ready(function()
{
	$("ul#menu li").hover(
		function(){
			$(this).addClass('wybor');
		},
		function(){
			$(this).removeClass('wybor');
		});
});