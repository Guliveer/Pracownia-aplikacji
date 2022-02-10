function Sprawdz(form){
				if (form.nazw.value ==''){
					alert('Pole Nazwisko musi być wypełnione');
					form.nazw.focus();
					return false;
				}
				if (form.imie.value ==''){
					alert('Pole Imię musi być wypełnione');
					form.imie.focus();
					return false;
				}
				if (form.zawod.value ==''){
					alert('Pole Zawód musi być wypełnione');
					form.zawod.focus();
					return false;
				}
				return true;
			}