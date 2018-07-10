<?php
if($_POST){
$secreto="6Le3e18UAAAAACclxDKe4wVSSDOHllxpdKCU5urF";
$captcha=$_POST["g-recaptcha-response"];
$resultado= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secreto&response=$captcha");
	$array= json_decode($resultado,TRUE);

		$nombre=$_POST["nom"];
		$email=$_POST["ema"];
		$mensaje=$_POST["men"];
		$polpriv=$_POST["polpriv"];
		$auto=$_POST["auto"];

			if($polpriv==true && $auto==true){
				$para='koutt919@gmail.com';
				$mensaje = '
				<html>
				<head>
				<title>Formulario de contacto</title>

				<style media="screen">
				  body{font-family:sans-serif;}
				  .logo-email{margin:auto;display:block;padding:40px 0px 0px 0px;}
				  .ema-container{margin:auto;width:87%;padding:40px 0px 0px 0px;}
				  h1{color:#ccc; text-transform:uppercase; margin-bottom:50px; letter-spacing:2px; font-weight:200; font-size:20px;}
				  h2{color:#333; font-size:19px;}
				  p{font-size:15px; font-weight:300; line-height:23px;}
				  .mens-container{width:50%; margin:auto;}

				  @media screen and (max-width: 800px){
				    h1{font-size:17px!important;}
				    h2{font-size:17px!important;}
				    p{font-size:15px!important;}
				    .ema-container{width:100%!important;}
				    .mens-container{width:100%!important;}
				  }
				</style>

				</head>

				<body>

				  <img style="margin:auto; display:block; padding:40px 0px 0px 0px;" class="logo-email" src="https://www.herza.net/web/doilan/assets/img/comun/logo.png">

				  <div class="ema-container" style="margin:auto;width:87%;padding:40px 0px 0px 0px;">

				    <div class="mens-container" style="width:50%; margin:auto;">
				      <h1 style="color:#ccc; text-transform:uppercase; margin-bottom:50px; letter-spacing:2px; font-size:20px; font-weight:200; text-align:center;">Mensaje desde formulario web</h1>
				    </div>



				    <div class="mens-container" style="width:50%; margin:auto;">
				      <h2 style="color:#333; font-size:19px;">Nombre:</h2>
				      <p style="font-size:15px; font-weight:300; line-height:35px;">'. $nombre.'</p>
				    </div>


				    <div class="mens-container" style="width:50%; margin:auto;">
				      <h2 style="color:#333; font-size:19px;">Email contacto:</h2>
				      <p style="font-size:15px; font-weight:300; line-height:35px;">'. $email.' </p>
				    </div>


				    <div class="mens-container" style="width:50%; margin:auto;">
				      <h2 style="color:#333; font-size:19px;">Mensaje</h2>
				      <p style="font-size:15px; font-weight:300; line-height:23px;">'. $mensaje.' </p>
				    </div>

				  </div>

				</body>
				</html>
				';

				$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				mail($para, 'Formulario de contacto web', utf8_decode($mensaje) , $cabeceras);
				header('location:contacto.php?envio=si&#auto');

		}else{
			header('location:contacto.php?envio=no&#auto');
		}
}


?>
