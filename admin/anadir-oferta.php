<?php
session_start();
include("conexion.php");
if ($_SESSION["entrada"]=="ok" && $_SESSION['agent']==sha1($_SERVER['HTTP_USER_AGENT'])){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-Frame-Options" content="deny">
<title>Área de gestión - Añadir Oferta</title>
<link rel="stylesheet" href="css/materialize.css" media="screen" title="no title">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style media="screen">
    body{
      font-family: sans-serif;
    }
  </style>
</head>

<body>

	<?php
	if($_POST["titular"]){
		$titular=$_POST["titular"];
		$titular= filter_var($titular,FILTER_SANITIZE_STRING);
		$texto=$_POST["texto"];
		$texto= filter_var($texto,FILTER_SANITIZE_STRING);
		 $SQL="INSERT INTO mk_ofertas (titular_oferta,texto_oferta) VALUES ('$titular','$texto')";
		$resultado=mysql_query($SQL);
    echo "<script type='text/javascript'>window.location.href = 'panel-gestor.php';</script>";
    exit();
		}?>


	<section>

		<h1>Añadir nueva oferta</h1>

		<form enctype="multipart/form-data" method="post" action="anadir-oferta.php">
			<p class="mayus">Titular (* Obligatorio)</p>
			<input type="text" name="titular"><br>
			<textarea cols="15" rows="5" name="texto" ></textarea>
			<br><br>
			<button class="btn" type="submit">A&ntilde;adir</button>
		</form>


	</section>

</body>
</html>
<?php }else{
	header("Location:salir.php");
	}?>
