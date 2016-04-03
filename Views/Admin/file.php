<?php 

include ("../../Negocio/subida.php");
 $clase = new subida;

$nombre1=$_POST['nombre'];

if ($_FILES['archivo']["error"] > 0)
	  {
	  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
	  }
	else
	  {
    $clase->conexion();
	   mkdir('../../Views/Datos/'.$nombre1);
       move_uploaded_file($_FILES['archivo']['tmp_name'],
	  "../Datos/".$nombre1."/".$_FILES['archivo']['name']);
    	 $clase->insertarsubida($nombre1,$_FILES['archivo']['name']);
    	//<em id="__mceDel"> </em>
	  /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/


	  header('Location:inicio.php');
 }
 ?>