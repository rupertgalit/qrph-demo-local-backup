const loginForm = document.querySelector('form.login');
const pinInput = document.querySelector('.input-pin');
const pinUI = document.querySelectorAll('.pin-ui li');
let numChars = 0;
let acceptInput = true;

pinInput.addEventListener('keydown',function(e){
	if(!acceptInput){
		e.preventDefault();
	}else{
		if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keycode >= 96 && e.keyCode <= 105)){
			// let it through
			numChars++;
		}else{
			e.preventDefault();
		}
	}
});

pinInput.addEventListener('keypress',function(){
	
	pinUI.forEach(function(el, i){
		if(numChars > i){
			el.classList.add('on');
		}else{
			el.classList.remove('on');
		}
	});
	
	if(numChars === 4){
		loginForm.querySelector('input.submit').click();
	}
});

loginForm.addEventListener('submit',function(e){
	e.preventDefault();
	
	acceptInput = false;
	
	pinInput.blur();
	
	document.querySelector('.mask').classList.add('visible');

	pinUI.forEach(function(el, i){
		setTimeout(function(){
			el.classList.add('animate');
		}, 300*i);
	});
	
	setTimeout(function(){
		document.querySelector('.login').classList.add('hide');
	}, 2000);
	
});

document.querySelector('.reset').addEventListener('click',function(e){
	e.preventDefault();
	resetAll();
});

function resetAll(){
	pinUI.forEach(function(el, i){
		el.classList.remove('on','animate');
	});
	numChars = 0;
	acceptInput = true;
	pinInput.value = "";
	document.querySelector('.mask').classList.remove('visible');
	document.querySelector('.login').classList.remove('hide');
}

pinInput.focus();
document.addEventListener('click',function(){
	pinInput.focus();
});