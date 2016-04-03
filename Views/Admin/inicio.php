<?
if(!empty($_SESSION['username'])){
  header('Location:../../index.php');
}else{
include ("../../Negocio/subida.php");
 $clase = new subida;
 session_start();

} ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pagina Principal</title>
  <link rel="stylesheet" href="../Resources/css/style.css">
  <link rel="stylesheet" href="../Resources/css/demo_table.css">
  <link rel="stylesheet" href="../Resources/bootstrap/css/bootstrap.css"  >
  <link rel="stylesheet" href="../Resources/bootstrap/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../Resources/bootstrap/css/bootstrap-theme.css" >
  <link rel="stylesheet" href="../Resources/bootstrap/css/bootstrap-theme.min.css">
 
  <script src="../Resources/js/jquery.js"></script>
  <script src="../Resources/js/myjava.js"></script>
  <script src="../Resources/js/funciones.js"></script>
  <script src="../Resources/js/jslistadopaises.js"></script>
  <script src="../Resources/js/jquery.dataTables.js"></script>
  <script src="../Resources/bootstrap/js/bootstrap.min.js"></script>
  <script src="../Resources/bootstrap/js/bootstrap.js"></script>
  <script src="../Resources/js/jquery.easing.js" type="text/javascript"></script>
  <script src="../Resources/js/jqueryFileTree.js" type="text/javascript"></script>
  <link href="../Resources/js/jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen" />
    
  <script>
$(document).ready(function(){ 
    //fill data to tree  with AJAX call

  $('#tree-container').fileTree({ root: '../Datos/', script: 'jqueryFileTree.php' }, function(file) { 
         $('#descargar').click(function() {
            window.location.href=""+file;
         });    
         $('#Eliminar').click(function() {
           alert(" El nombre del archivo es "+file);
         });    
        });
});
  </script>
</head>
<body>
	    <div class="container">
        <div class="car-container ">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
  <div class="row"style="text-align:right">
  <b><?php 
 echo  $_SESSION['username'];
     ?> </b>   <br/>
    <label ><a href="../../index.php">Cerrar Sesion</a></label>
  </div>
  <section>
    <h2 style="text-align:center;"><b> Historial de Subidas</b></h2>
    <br />
    <div class="row">
    <button id="nuevaAsistencia" type="button"   class="btn btn-primary">
     <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>  SUBIR ARCHIVO
    </button> 
    <button id="b_archivo" type="button"  class="btn btn-primary">
     <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>  BAJAR ARCHIVO
    </button>

      <button id="b_user" type="button"  class="btn btn-primary">
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  CREAR USUARIO
   </button> 
      </div>
  <br/>
  <div class="row">
       <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>N° de Archivo</th><!--Estado-->
                        <th> Realizada por Usuario</th>
                         <th> Nombre Archivo</th>
                         <th>Fecha de Cambio</th><!--Estado-->
                        <th>Hora de Cambio</th>
                        <th>  Eliminar Archivos  </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                         <th></th>
                         <th></th>
                         <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                  <tbody>
                   <?php 
                     $clase->conexion();
                     $clase->mostrarsubida(); 
                     ?>
                </tbody>
            </table>
  </div>

</section>

 <div class="modal fade" id="modalAsistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="text-align:center;"><b>SELECCIONE EL ARCHIVO ACCESS</b></h4>
            </div>
            <div class="modal-body" id="datosAqui">
                   <form action="file.php" method="post" enctype="multipart/form-data">
                   <div class="row">
           <label class="col-lg-3">Nombre para la carpeta:</label> 
            <input id="nombre" name="nombre" class="col-lg-5" type="text"  required/> 
            <label id="hidden1" class="col-lg-4" style="color:red">  Debe digitar un nombre</label> 
            <br/> <br/>
               </div>
               <div id="row">
               <input class="col-lg-7" type="file" name="archivo" accept=".smt" id="archivo"></input>
              <label id="hidden2" class="col-lg-5" style="color:red"> Seleccionar un archivo</label>
               </div>
           
              <br/>
              <div class="row ">
                <button id="guardar"  class="btn btn-primary">
          <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>  GUARDAR ARCHIVO
      </button> 
              </div>
         
          </form>
            </div>
          </div>
       </div>
   </div>   
</div>

 <div class="modal fade" id="modalformato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="text-align:center;"><b>SELECCIONE EL ARCHIVO A DESCARGAR</b></h4>
            </div>
            <div class="modal-body" id="datosAqui">
    <div class="roww">
     <div id="tree-container" class="demo">
       
     </div>
    </div>
     <div class="container row">
     <button id="descargar" type="button"  class="btn btn-primary">
     <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>  DESCARGAR FICHERO
    </button>
     <button id="Eliminar" type="button"  class="btn btn-danger">
     <span class="glyphicon glyphicon-delete" aria-hidden="true"></span>  ELIMINAR FICHERO
    </button>

            </div>
            </div>
          </div>
       </div>
   </div>   

 

 <div class="modal fade" id="modalcreauser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="text-align:center;"><b>CREACION DE USUARIOS</b></h4>
            </div>
   <form class="form-horizontal" action="../../Negocio/Correo.php" method="post">
    <div class="form-group">
        <label class="control-label col-xs-4">Nombre(s):</label>
        <div class="col-xs-7">
            <input type="text" name="nombre" class="form-control" id="inputEmail"
             placeholder="Nombre(s)" required>
        </div>
           <div id="error_nombre" style="display:none;color:red;font-size:24px;">
         <b>X</b> 
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Apellido(s):</label>
        <div class="col-xs-7">
            <input type="text" name="apellido" class="form-control" id="inputPassword" 
            placeholder="Apellidos(s)" required>
        </div>
           <div id="error_apellido" style="display:none;color:red;font-size:24px;">
           <b>X</b> 
        </div>
    </div>

      <div class="form-group">
        <label class="control-label col-xs-4" >Rol:</label>
        <div class="col-xs-7">
            <select class='form-control'>
            <option class='form-control' value='Administrador' selected>Administrador</option>
            <option class='form-control' value='Colaborador' >Colaborador</option>
          </select>
        </div>
    </div>
 

    <div class="form-group">
        <label class="control-label col-xs-4">Email</label>
        <div class="col-xs-7">
            <input type="email" id="email" name="email" class="form-control" placeholder="email"
            required/>
           </div>
              <div id="error_email" style="display:none;color:red;font-size:24px;">
         <b>X</b> 
        </div>
    </div>
 
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" id="enviar" value="Enviar">
            <input type="reset" class="btn btn-default" value="Limpiar">
        </div>
    </div>
</form>
             </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>