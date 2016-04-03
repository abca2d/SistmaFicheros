<?php 
/**
* 
*/

class Actividades
{
	
	public function conexion(){
		   $host="mysql4.000webhost.com";
	       $usuario="a4774899_cosecha";
	       $password="a2d12345";
           $dataBase="a4774899_cosecha";
		/*	
            $host="localhost";
	         $usuario="root";
	         $password="administracion";
             $dataBase="cosechac";
*/
			$conexion = mysql_connect($host, $usuario, $password);
			$seleccion = mysql_select_db($dataBase, $conexion);
		
		}

	public function mostrar(){
			$sql = mysql_query("SELECT * FROM actividad");
			$item = 0;
			
			if(mysql_num_rows($sql)>0){
				while($mostrar = mysql_fetch_array($sql)){
							$item = $item+1;
					               echo '<tr>
								<td>'.$item.'</td>
								<td>'.$mostrar['codigo'].'</td>
								<td>'.$mostrar['nombre'].'</td>
								<td>'.$mostrar['tipo_codigo'].'</td>
								<td>'.$mostrar['tipo_actividad'].'</td>
								<td>'.$mostrar['codigo_rubro'].'</td>
								<td>'.$mostrar['codigo_usuario'].'</td>
								<td>'.$mostrar['Inactivo'].'</td>
								<td width="5px"><input type="button" value="Detalle" class="btn btn-success" onClick="verDetalle(/'.$mostrar['cod_asistencia'].'/)"></td>
							    <td width="5px"><input type="button" value="Eliminar" class="btn btn-danger" onClick="verDetalle(/'.$mostrar['cod_asistencia'].'/)"></td>
							</tr>';
				}
			}else{
				echo '<tr><td colspan="5">No se encontraron registros...</td></tr>';
			}
		}


	}

 ?>