'use strict';
 
(function(){
	var show = document.getElementById('hamburger__show');
	var hide = document.getElementById('hamburger__hide');
	
	show.addEventListener('click',function(){
		document.body.className = 'hamburger__menu-open';
	});
	
	hide.addEventListener('click',function(){
		document.body.className = '';
    //アコーディオンを強制終了
    document.getElementsByClassName('is-open')[0].classList.remove('is-open');
	});
})();