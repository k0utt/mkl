function env(e){

  e.preventDefault();

  var nom      =  document.getElementById('nom'),
      ema      =  document.getElementById('ema'),
      men      =  document.getElementById('men'),
      captRes  =  grecaptcha.getResponse();

if(nom.value==""){
    $('#nom').addClass('invalid');
    $('#nom').focus();
    $('#aviso').html("<i class='fa fa-exclamation-triangle'></i> Por favor, indique su nombre.");

    $('#nom').keyup(function(){
      $('#aviso').html("");
      $('#nom').removeClass('invalid');
    });

  }else if(ema.value.indexOf("@")==-1 || ema.value.indexOf(".")==-1){
      $('#ema').addClass('invalid');
      $('#ema').focus();
      $('#aviso').html("<i class='fa fa-exclamation-triangle'></i> Por favor, indique un email de contacto válido.");
      $('#aviso').css('opacity','1');

      $('#ema').keyup(function(){
        $('#aviso').html("");
        $('#ema').removeClass('invalid');
      });


    }else if(men.value==""){
      $('#men').addClass('invalid');
      $('#men').focus();
      $('#aviso').html("<i class='fa fa-exclamation-triangle'></i> Por favor, indíquenos cual es su consulta.");
      $('#aviso').css('opacity','1');
      $('#men').keyup(function(){
        $('#aviso').html("");
        $('#men').removeClass('invalid');
      });

    }else if(captRes.length === 0 ){

      $('#aviso').html("<i class='fa fa-exclamation-triangle'></i> Por favor rezlice la validación por reCaptcha.");

  }else{
    document.formWeb.action="enviar.php";
    document.formWeb.submit();
  }
}
