<?php include("admin/conexion.php"); ?>
<?php
  $sql="SELECT * FROM mk_ofertas where activar_oferta like '1'";
  $resultado = mysql_query($sql);
  $fila = mysql_fetch_array($resultado);

  if ($fila['activar_oferta'] != 0) {
?>

<h1>Oferta de la semana</h1>
<hr>

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

<?php }else{ ?>
<p>Esta semana no hay ofertas</p>
<?php } ?>
