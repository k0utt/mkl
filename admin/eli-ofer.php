<?php
session_start();
include("conexion.php");
if ($_SESSION["entrada"]=="ok" && $_SESSION['agent']==sha1($_SERVER['HTTP_USER_AGENT'])){
if(strlen($_POST["id"])<6){
$id=$_POST["id"];
$id=filter_var($id, FILTER_VALIDATE_INT);
$SQL="DELETE FROM mk_ofertas WHERE id_oferta=$id";
$resultado=mysql_query($SQL);
echo "<script type='text/javascript'>window.location.href = 'panel-gestor.php';</script>";
exit(); }
}else{ header("Location:salir.php"); }?>
