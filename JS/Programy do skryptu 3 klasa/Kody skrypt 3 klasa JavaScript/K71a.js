$(document).ready(function(){
				$("#blok").mouseover(function(){
					$(this).animate({
						width: "+=300px", height: "+=300px", left: "250px",opacity: "0.5",
					}, 1500 );
				});
					$("#blok").mouseout(function(){
					$(this).animate({
						width: "100px", height: "100px", left: "10px",opacity: "1",
					}, 1500 );
				});
			});