<?php 
/**
* 
*/

session_start();

class Subida 
{


	public function conexion(){
    
         $host="mysql4.000webhost.com";
         $usuario="a4774899_cosecha";
         $password="a2d12345";
           $dataBase="a4774899_cosecha";
			

			$conexion = mysql_connect($host, $usuario, $password);
			$seleccion = mysql_select_db($dataBase, $conexion);
		
	}

 public function insertarsubida($carpeta,$nombre_a){
 	$cadena=$carpeta."/".$nombre_a;
 mysql_query("insert into subidas(usuario,Nombre_archivo,fecha_subida,hora_subida) values('". $_SESSION['username']."','".$cadena."',curdate(),curtime())");
 }

 public function mostrarsubida(){
			$sql = mysql_query("SELECT * FROM subidas");
			$item = 0;
			
			if(mysql_num_rows($sql)>0){
				while($mostrar = mysql_fetch_array($sql)){
						
					            echo '<tr>
								<td>'.$mostrar['numero_subida'].'</td>
								<td>'.$mostrar['usuario'].'</td>
								<td>'.$mostrar['Nombre_archivo'].'</td>
								<td>'.$mostrar['fecha_subida'].'</td>
								<td>'.$mostrar['hora_subida'].'</td>
						        <td width="3px"><input type="button" value="Eliminar" class="btn btn-danger" onClick="verDetalle(/'.$mostrar['cod_asistencia'].'/)"></td>
							</tr>';
				}
			}else{
				echo '<tr><td colspan="5">No se encontraron registros...</td></tr>';
			}
		}
 public function mostrarsubidaC(){
			$sql = mysql_query("SELECT * FROM subidas");
			$item = 0;
			
			if(mysql_num_rows($sql)>0){
				while($mostrar = mysql_fetch_array($sql)){
						
					            echo '<tr>
								<td>'.$mostrar['numero_subida'].'</td>
								<td>'.$mostrar['usuario'].'</td>
								<td>'.$mostrar['Nombre_archivo'].'</td>
								<td>'.$mostrar['fecha_subida'].'</td>
								<td>'.$mostrar['hora_subida'].'</td>
						    	</tr>';
				}
			}else{
				echo '<tr><td colspan="5">No se encontraron registros...</td></tr>';
			}
		}



function listar_archivos($carpeta){
    if(is_dir($carpeta)){
        if($dir = opendir($carpeta)){
            while(($archivo = readdir($dir)) !== false){
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
            
             echo "<div class='container  carpetas'>";
             echo '<li><a target="_blank" href="'.$carpeta.'/'.$archivo.'">'.$archivo.'</a></li>';
             echo"<br>";
             echo '</div>';
                }
            }
            closedir($dir);
        }
    }
  }
}

 ?>