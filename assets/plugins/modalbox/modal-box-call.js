/* ----- ACTIVAR MODAL ----- */
$(document).ready(function () {
  $(".form-trigg").click(function(event){
    event.preventDefault();
  });


  $("#mod-form").wgModal({
      triggerElement: '.form-trigg',
      onAfterClose: function(){
        $('#aviso').html("");
      }
  });

});

