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
<title>Área de gestión - Bienvenida</title>
<link rel="stylesheet" href="styles.css">
<script>
	function enviar(form){
		 if (confirm('¿Estas seguro de eliminar esta oferta?')){
	 	 form.submit();
		}
	}
	function enviar2(form){
 		form.submit();
	}
</script>
</head>

<body>
	<section>
	<h1 style="border-bottom:solid 1px #eee; padding-bottom:15px;">Listado de ofertas</h1>

	<p><a href="anadir-oferta.php">Nueva oferta</a></p>


		<?php
			$sql="SELECT * FROM mk_ofertas where activar_oferta like '1'";
			$resultado=mysql_query($sql);
		?>


		<div style="background:#eee; overflow:auto;">
			<h2 style="border-bottom:solid 1px #ccc;">Oferta activa</h2>
			<?php while ($fila = mysql_fetch_array($resultado)) { ?>

				<h3 style="font-style:italic;">
					<?php
					 $titular = iconv('ISO-8859-1//TRANSLIT','UTF-8',$fila['titular_oferta']);
	         echo utf8_decode($titular);
          ?>
				</h3>

				<p style="font-style:italic;">
					<?php
	           $texto = iconv('ISO-8859-1//TRANSLIT','UTF-8',$fila['texto_oferta']);
	           echo utf8_decode($texto);
	         ?>
				</p>

      <?php }?>
			<br><br>
		</div>



		<hr style="margin:60px 0px;">



		<div style="background:#eee; overflow:auto;">
			<h2 style="border-bottom:solid 1px #ccc;">Mis ofertas</h2>
			<?php
				$sql="SELECT * FROM mk_ofertas order by id_oferta DESC";
				$resultado=mysql_query($sql);



				while ($fila = mysql_fetch_array($resultado)) { ?>

        <div style="margin:60px 0px;">
					<h3>
						<?php
						 $titular = iconv('ISO-8859-1//TRANSLIT','UTF-8',$fila['titular_oferta']);
						 echo utf8_decode($titular);
						?>
					</h3>

					<p>
						<?php
							 $texto = iconv('ISO-8859-1//TRANSLIT','UTF-8',$fila['texto_oferta']);
							 echo utf8_decode($texto);
						 ?>
					</p>


					<form method="post" name="ip<?php echo $fila['id_oferta'];  ?>" action="acti-ofer.php">
						<input type="hidden"  name="id" value="<?php echo $fila['id_oferta'];  ?>">
					</form>
					<a href="javascript:enviar2(ip<?php echo $fila['id_oferta'];  ?>);">
             Activar oferta
          </a>



					<form method="post" name="ipm<?php echo $fila['id_oferta'];  ?>" action="eli-ofer.php">
						<input type="hidden"  name="id" value="<?php echo $fila['id_oferta'];  ?>">
					</form>
          <a href="javascript:enviar(ipm<?php echo $fila['id_oferta'];  ?>);">
             Eliminar oferta
          </a>


				</div>

        <?php }?>
		</div>

	</section>

</body>
</html>
<?php }else{
	header("Location:salir.php");
	}?>
