
<div id="mod-form">
  <form  action="enviar.php" name="formWeb" method="post">
    <div class="row"> <!-- Campos form -->
        <input type="text" name="nom" id="nom" placeholder="Nombre" value=""><br><br>
        <input type="text" name="ema" id="ema" placeholder="Email" value=""><br><br>
        <textarea name="men" id="men" placeholder="Mensaje" rows="8" cols="80"></textarea><br><br>
    </div>
  
    <div class="row"> <!-- Checkbox -->
      <div class="col s1 no-padd" style="width:5.33333%;">
        <input type="checkbox" id="polpriv" name="polpriv" value="1">
      </div>
      <div class="col s11 no-padd">
        <p class="aviso-pp__c">  He leído y acepto la <a class="c-second" href="politica-privacidad.php" target="_blank">Política de Privacidad</a></p>
      </div>
    </div>
  
  
      <div class="row">
        <div class="col s11 no-padd" style="width:5.33333%;">
          <input type="checkbox" id="auto" name="auto" value="2">
        </div>
        <div class="col s11 no-padd">
          <p class="aviso-pp__c">Autorizo al envío de comunicaciones electrónicas informativas relativas a las actividades, productos o servicios por correo electrónico o cualquier otro medio electrónico equivalente.</p><br>
        </div>
      </div>
  
  
  
      <div class="row"></div><!-- reCaptcha -->
  
  
  
  
      <div class="row">
  
        <div class="col l5 m5 s12 no-padd"><!-- Boton -->
          <button name="" onclick="env(event)" class="btn-text--main">ENVIAR</button>
        </div>
  
  
        <div class="col l7 m7 s12"><!-- Mensajes al usuario -->
          <span id="aviso">
            <?php if ($_GET['envio'] == 'si') {?>
              <div class="success">
                <i class="fa fa-check-circle"></i> El mensaje se envió con éxito.
              </div>
            <?php }else if ($_GET['envio'] == 'no') {?>
                <i class='fa fa-exclamation-triangle'></i>  Error al enviar el mensaje. Por favor, asegúrese de haber aceptado los términos de nuestra política de privacidad.
          <?php }else if ($_GET['envio'] == 'captcha') {?>
              <i class='fa fa-exclamation-triangle'></i> Error al verificar el captcha. Por favor, vuelva a intentarlo.
            <?php } ?>
          </span>
        </div>
  
      </div>
  
  
    </form>
</div>
