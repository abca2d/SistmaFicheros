<?php 

include ("../../Negocio/subida.php");

 $clase = new subida;


$nombre2=$_POST['nombre'];

if ($_FILES['archivo']["error"] > 0)
	  {
	  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
	  }
	else
	  {
      $clase->conexion();
   
	  mkdir('../../Views/Datos/'.$nombre2);
    
      move_uploaded_file($_FILES['archivo']['tmp_name'],
	   "../Datos/".$nombre2."/".$_FILES['archivo']['name']);
    	  $clase->insertarsubida($nombre2,$_FILES['archivo']['name']);
    	//<em id="__mceDel"> </em>
       /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/

	  header('Location:inicio.php');
 }
 ?>