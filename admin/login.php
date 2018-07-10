<?php
include("conexion.php");

if (isset($_POST["cnom"]) && isset($_POST["ccla"]))
{
	$nombre=$_POST["cnom"];
	$nombre= filter_var($nombre,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$clave=$_POST["ccla"];
	$clave= filter_var($clave,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$SQL="SELECT * FROM mk_usuarios where usu like '$nombre' and contra like AES_ENCRYPT('$clave','4b21@s2.7')";
	$resultado=mysql_query($SQL);
		if($resultado==true){
			if($fila=mysql_fetch_array($resultado)){
		   $httponly = true;
		   $session_hash = 'sha512';
           $secure = false;
		   if (in_array($session_hash, hash_algos())) {
			  ini_set('session.hash_function', $session_hash);
		   }
		   ini_set('session.hash_bits_per_character', 6);
		   ini_set('session.use_only_cookies', 1);
			 ini_set('session.cookie_lifetime', 60 * 15);
		   $cookieParams = session_get_cookie_params();
		   session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
		   //session_name($session_name);
		   session_start();
		   session_regenerate_id(true);
				$_SESSION['agent']=sha1($_SERVER['HTTP_USER_AGENT']);
				$_SESSION['entrada']="ok";
				$_SESSION['usuario']=$nombre;
				header("Location:panel-gestor.php");
			}else{
			header("Location:salir.php");
			}
		}
}
else {header("Location:salir.php");}
mysql_close();

?>
