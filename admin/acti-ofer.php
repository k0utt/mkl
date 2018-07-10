<?php
session_start();
include("conexion.php");
if ($_SESSION["entrada"]=="ok" && $_SESSION['agent']==sha1($_SERVER['HTTP_USER_AGENT'])){
$sql="SELECT * FROM mk_ofertas where activar_oferta like '1'";
$resultado = mysql_query($sql);
$fila = mysql_fetch_array($resultado);
$oldofer= $fila['id_oferta'];
$SQL="UPDATE mk_ofertas SET activar_oferta='0' WHERE id_oferta=$oldofer";
$resultado = mysql_query($SQL);
if(strlen($_POST["id"])<6){
$id=$_POST["id"];
$id=filter_var($id, FILTER_VALIDATE_INT);
$SQL="UPDATE mk_ofertas SET activar_oferta='1' WHERE id_oferta=$id";
$resultado=mysql_query($SQL);
echo "<script type='text/javascript'>window.location.href = 'panel-gestor.php';</script>";
exit(); }
}else{ header("Location:salir.php"); }?>
