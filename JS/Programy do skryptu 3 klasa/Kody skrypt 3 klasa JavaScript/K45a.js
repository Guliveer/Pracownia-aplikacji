var timerID = null;
var timerRunning = false;
function stopclock(){		
	if(timerRunning)
	clearTimeout(timerID)
	timerRunning = false;	
}
			
function startclock(){
	stopclock();
	showtime();	
}
function showtime(){
	var data_n = new Date();
	var godz = data_n.getHours();
	var min = data_n.getMinutes();
	var sek = data_n.getSeconds();
				
	var czas = "" + ( godz);
	czas += ((min < 10) ? ":0" : ":") + min;
	czas += ((sek < 10) ? ":0" : ":") + sek;
	
	document.getElementById('zegar').innerHTML = czas;
	timerID = setTimeout("showtime()",1000);
	timerRunning = true;
}