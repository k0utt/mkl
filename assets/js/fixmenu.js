//Seleccionamos el elemento con el id menu

var menu 		= document.getElementById('menu'),
	logo 		= document.getElementById('logo');

var altura = menu.offsetTop;//1
window.addEventListener('scroll', function(){//2
	if(window.pageYOffset > altura){
		menu.classList.add('stick');
	}else{
		menu.classList.remove('stick');
	}
});





var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){

		 $('#menu').css('top','-74px');
		 
   } else if(st < lastScrollTop && $('#menu').hasClass('stick')){

		$('#menu').css('top','0px');

   }else{
		$('#menu').css('top','auto');
   }
   lastScrollTop = st;
});
