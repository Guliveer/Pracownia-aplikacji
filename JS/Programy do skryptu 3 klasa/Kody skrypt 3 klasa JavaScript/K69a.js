﻿$(document).ready(function(){
			$("button").click(function(){
				$("#p1").css("color","red")
					.slideUp(2000)
					.slideDown(2000);
			});
		});