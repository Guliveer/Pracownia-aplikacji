function Spr_wzorzec(){
				var form = document.getElementById('in_form'),
					wzory = {
					'nazwisko' : /^[a-zA-Z]{2,}$/i,
					'email' : /^[0-9a-zA-Z_.-]+@[0-9a-zA-Z.-]+\.[a-zA-Z]{2,3}$/i,
					};
				for (var pole in wzory){
					if (form[pole]){
						if (!wzory[pole].test(form[pole].value)){
							alert('Pole ' + pole + ' ma nieprawidłowa wartość');
							form[pole].style.background = 'yellow';
							return false;
						}
						else
						{
						form[pole].style.background = '';
						}
					}
				}
				alert('Wszystkie pola wypełnione popranie!');
				return true;
			}