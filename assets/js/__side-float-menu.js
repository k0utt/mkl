$(document).ready(function(){

  if($('#menu-sec').hasClass('hidden')){
    $('.m-sec').css('bottom', '0px');
  }else{
    $('.m-sec').css('bottom', '23px');
  }

  $('#menu-sec-cab').click(function(){
    $('.m-sec__body').toggleClass('hidden');
    $('.m-sec').toggleClass('hidden');

    if($('.m-sec__body').hasClass('hidden')){
      localStorage.mSec = 'hide';
    }else{
      localStorage.mSec = 'show';
    }
  });



  if(localStorage.mSec == 'hide'){
    $('.m-sec__body').addClass('hidden');
    $('#m-sec-arrow').removeClass('fa-chevron-down');
    $('#m-sec-arrow').addClass('fa-chevron-up');

    $('.m-sec__body').addClass('hidden');
    $('.m-sec').addClass('hidden');

  }else if(localStorage.mSec == 'show'){
    $('#m-sec-arrow').removeClass('fa-chevron-up');
    $('#m-sec-arrow').addClass('fa-chevron-down');

    $('.m-sec').removeClass('hidden');
    $('.m-sec__body').removeClass('hidden');
  }



  var mq = window.matchMedia("(max-width:700px)");

  if(mq.matches){
    
    $('#menu-sec').css('bottom', '0px');
    $('.m-sec__body').addClass('hidden');
    $('.m-sec').addClass('hidden');

    if(!$('#menu-sec').hasClass('hidden')){
      $('.m-sec').css('bottom', '0px');
    }

  }
});
