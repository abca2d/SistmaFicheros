<?php 

         $host="mysql4.000webhost.com";
         $usuario="a4774899_cosecha";
         $password="a2d12345";
           $dataBase="a4774899_cosecha";
      


			$conexion = mysql_connect($host, $usuario, $password);
			$seleccion = mysql_select_db($dataBase, $conexion);

 $nombre_completo =$_POST['nombre'] ;
 $apellido_completo= $_POST['apellido'] ;
 $rol=$_POST['rol'] ;
 $email=$_POST['email'] ;
 echo " ".$nombre_completo;
 mysql_query("insert into usuario(nombre_completo,apellido_completo,rol,email) 
 values('".$nombre_completo."','".$apellido_completo."','".$rol."','".$email."')");
 


$destinatario ="a.rodriguez@udla.edu.co,a2driancho@outlook.es";
$asunto ="Tienda GrowEgresados.com";
$cabeceras="From: ".$email. "\r\n";
$cabeceras=$cabeceras."X-Mailer:PHP/".phpversion()."\n";
$cabeceras=$cabeceras."MIME-Version: 1.0\r\n";
$cabeceras=$cabeceras."Content-Type: text/html; charset=UTF-8\r\n";

$mensage="<html>
<head>
  <title> Sistema de Almacenamiento Archivos Online</title>
</head>
<body>
  <table>
    <tr>
      <th></th>
    </tr>
    <tr>
      <td>Nombre: </td>
      <td>".$_POST['nombre']."</td>
    </tr>
      <tr>
      <td>Apellido: </td>
      <td>".$_POST['apellido']."</td>
    </tr>
  </table>
</body>
</html>";


mail($destinatario,$asunto,$mensage,$cabeceras);
header('Location:../Views/Admin/inicio.php');

 ?>