<?php

session_start();

include ('../Negocio/usuario.php');
$clase = new Usuario;
$variable;



if(!empty($_POST['inputEmail']) && !empty($_POST['inputPassword'])) {
$username=$_POST["inputEmail"];
$password=$_POST['inputPassword'];
$clase->conexion();
$variable=$clase->validar($username,$password);


if(strcmp ($variable , "" ) == 0){
header('Location:../index.php');
}else{
   	$_SESSION['loggedin'] = true;
	 $_SESSION['username'] = $username;
	 $_SESSION['start'] = time();
	 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;	 
//echo "Bienvenido ".$_SESSION['username'];

if(strcmp ($variable , "Administrador" ) == 0){
header('Location:Admin/inicio.php');
}
if(strcmp ($variable , "Colaborador" ) == 0){
header('Location:Colaborador/inicio.php');
}

}
//header('Location: ../index.php');
}else{
echo "datos incorrectos   user".$username." password ".$password;
}
 ?>