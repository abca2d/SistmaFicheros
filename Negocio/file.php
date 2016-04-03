<?php 

include ("../../Negocio/subida.php");
 $clase = new subida;

if ($_FILES['archivo']["error"] > 0)
	  {
	  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
	  }
	else
	  {
    $clase->conexion();
	  $clase->insertarsubida();
	 	move_uploaded_file($_FILES['archivo']['tmp_name'],
	  "../Datos/" . $_FILES['archivo']['name']);
    	//<em id="__mceDel"> </em>
	  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
	  echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
	  echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
	  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
	  /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/


	  header('Location:../index.php');
 }
 ?>