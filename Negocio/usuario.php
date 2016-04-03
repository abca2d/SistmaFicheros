<?php 
/**
* 
*/
class Usuario 
{
	
 	public function conexion(){
    $host="mysql4.000webhost.com";
         $usuario="a4774899_cosecha";
         $password="a2d12345";
           $dataBase="a4774899_cosecha";
			
               
			$conexion = mysql_connect($host, $usuario, $password);
			$seleccion = mysql_select_db($dataBase, $conexion);
		
	}


   public function validar($usuario,$pass){
   $csql1=mysql_query("SELECT * FROM usuario WHERE usuario='".$usuario."' AND password='".$pass."' and rol='Administrador'");
   $csql2=mysql_query("SELECT * FROM usuario WHERE usuario='".$usuario."' AND password='".$pass."' and rol='Colaborador'");
   $numrows1=mysql_num_rows($csql1);
   $numrows2=mysql_num_rows($csql2);
  
    if($numrows1!=0){
        $valor="Administrador";
    }
    if($numrows2!=0){
        $valor="Colaborador";
    }

   return $valor; 
	}

	public function registrar_usuarios($nombre,$apellido,$password,$rol,$email,$genero){
       mysql_query("INSERT INTO USUARIO VALUES('".$nombre."','".$apellido."','".$password."','".$rol."','".$email."','".$genero."')");
	}

  public function Listar_usuario_Todo(){
   $csql="select * from usuario";
   return $this->sql($csql);
	}

}
 ?>