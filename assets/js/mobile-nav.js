function changeAccordion(evt, selectedAcc){
 var currentContent, currentButton;

 currentButton  =  evt.currentTarget;
 currentContent =  document.getElementById(selectedAcc);

 currentButton.classList.toggle('active');
 currentContent.classList.toggle('active');
}


$(document).ready(function(){

  //Menu burguer
  $('#mobile-nav-button').click(function(e){
    e.preventDefault();
    $('.mobile-nav').toggleClass('mobile-nav--open');
  });
  $('.menu-mobile--close').click(function(e){
    e.preventDefault();
    $('.mobile-nav').removeClass('mobile-nav--open');
  });

  $('#mobile-nav').click(function(event){
      event.stopPropagation();
  });

  $('#mobile-nav-button').click(function(event){
      event.stopPropagation();
  });


  $(window).click(function() {
    if($('#mobile-nav').hasClass('mobile-nav--open')){
      $('.mobile-nav').removeClass('mobile-nav--open');
    }
  });




    //Lang Selector
    $("body").click(function(e) {
      if (e.target.id == "select-idiomas" || $(e.target).parents("#select-idiomas").length) {
        $(".select-idiomas__desplegar").toggleClass("active");
      } else {
        $('.select-idiomas__desplegar').removeClass('active');
      }
    });
});
