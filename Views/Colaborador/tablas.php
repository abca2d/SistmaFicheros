<?php 
include ("../Negocio/Actividades.php");
$clase = new Actividades;
 ?>
<!DOCTYPE html>
<html lang="en">
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

</head>
<body>
	    <div class="container col-lg-12">
        <div class="car-container2 ">
           <h2 style="text-align:center;"><b> Listado de Registros</b></h2>

  <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#1a" data-toggle="tab">Actividades</a></li>
  <li role="presentation"><a href="#2a" data-toggle="tab">Cash Flow</a></li>
  <li role="presentation"><a href="#3a" data-toggle="tab">C. General</a></li>
  <li role="presentation"><a href="#4a" data-toggle="tab">C. Fechas</a></li>
  <li role="presentation"><a href="#5a" data-toggle="tab">C. Contable</a></li>
  <li role="presentation"><a href="#6a" data-toggle="tab">D. Diario</a></li>
  <li role="presentation"><a href="#7a" data-toggle="tab">E. Actividad</a></li>
  <li role="presentation"><a href="#8a" data-toggle="tab">Establecimientos</a></li>
  <li role="presentation"><a href="#9a" data-toggle="tab">E. Variedad</a></li>
  <li role="presentation"><a href="#10a" data-toggle="tab">F. Export Datos</a></li>
  <li role="presentation"><a href="#11a" data-toggle="tab">GestionA</a></li>
  <li role="presentation"><a href="#12a" data-toggle="tab">GestionB</a></li>  
  <li role="presentation"><a href="#13a" data-toggle="tab">Lluvias</a></li>
  <li role="presentation"><a href="#14a" data-toggle="tab">L. Actividad</a></li>
  <li role="presentation"><a href="#15a" data-toggle="tab">Lotes</a></li>
  <li role="presentation"><a href="#16a" data-toggle="tab">M. Base</a></li>
  <li role="presentation"><a href="#17a" data-toggle="tab">M. Objetivo</a></li>
  <li role="presentation"><a href="#18a" data-toggle="tab">Moneda D.</a></li>
  <li role="presentation"><a href="#19a" data-toggle="tab">Movimientos</a></li>
  <li role="presentation"><a href="#20a" data-toggle="tab">P. CuentaContable</a></li>
  <li role="presentation"><a href="#21a" data-toggle="tab">P. Impuestos</a></li>
  <li role="presentation"><a href="#22a" data-toggle="tab">Puesto</a></li>
  <li role="presentation"><a href="#23a" data-toggle="tab">R. Actividades</a></li>
  <li role="presentation"><a href="#24a" data-toggle="tab">Terceros</a></li>
  <li role="presentation"><a href="#25a" data-toggle="tab">T. Actividades</a></li>
  <li role="presentation"><a href="#26a" data-toggle="tab">Variedades</a></li>
</ul>
      <div class="tab-content clearfix" style="text-align:center">
        <div class="tab-pane active" id="1a">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>N° Actividad</th><!--Estado-->
                        <th>Codigo</th>
                         <th>Nombre</th><!--Estado-->
                        <th>Tipo de Codigo</th>
                         <th>Tipo de Actividad</th><!--Estado-->
                        <th>Codigo de Rubro</th>
                         <th>Codigo de Usuario</th><!--Estado-->
                        <th>Inactivo</th>
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
                         <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                  <tbody>
                   <?php 
                     $clase->conexion();
                     $clase->mostrar(); 
                     ?>
                </tbody>
            </table>
        </div>

        <div class="tab-pane " id="2a">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>N° Actividad</th><!--Estado-->
                        <th>Codigo</th>
                         <th>Nombre</th><!--Estado-->
                        <th>Tipo de Codigo</th>
                         <th>Tipo de Actividad</th><!--Estado-->
                        <th>Codigo de Rubro</th>
                         <th>Codigo de Usuario</th><!--Estado-->
                        <th>Inactivo</th>
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
                         <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                  <tbody>
                   <?php 
                     $clase->conexion();
                     $clase->mostrar(); 
                     ?>
                </tbody>
            </table>
        </div>


        <div class="tab-pane" id="3a">
           <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>N° Actividad</th><!--Estado-->
                        <th>Codigo</th>
                         <th>Nombre</th><!--Estado-->
                        <th>Tipo de Codigo</th>
                         <th>Tipo de Actividad</th><!--Estado-->
                        <th>Codigo de Rubro</th>
                         <th>Codigo de Usuario</th><!--Estado-->
                        <th>Inactivo</th>
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
                         <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                  <tbody>
                   <?php 
                     $clase->conexion();
                     $clase->mostrar(); 
                     ?>
                </tbody>
            </table>
          </div>


        <div class="tab-pane" id="4a">
          <h3>Content's background color is the same for the tab</h3>
        </div>

        <div class="tab-pane " id="5a">
          <h3>Content's background color is the same for the tab</h3>
        </div>


        <div class="tab-pane " id="6a">
          <h3>Content's background color is the same for the tab</h3>
        </div>




        <div class="tab-pane " id="7a">
          <h3>Content's background color is the same for the tab</h3>
        </div>


        <div class="tab-pane " id="8a">
          <h3>Content's background color is the same for the tab</h3>
        </div>

   

        <div class="tab-pane " id="9a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane " id="10a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane " id="11a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane " id="12a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane " id="13a">
          <h3>Content's background color is the same for the tab</h3>
        </div>

        <div class="tab-pane " id="14a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane" id="15a">
          <h3>Content's background color is the same for the tab</h3>
        </div>


        <div class="tab-pane " id="16a">
          <h3>Content's background color is the same for the tab</h3>
        </div>
      


        <div class="tab-pane " id="17a">
          <h3>Content's background color is the same for the tab</h3>
        </div>

   

        <div class="tab-pane " id="18a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane " id="19a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane " id="20a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane" id="21a">
          <h3>Content's background color is the same for the tab</h3>
        </div>


        <div class="tab-pane " id="22a">
          <h3>Content's background color is the same for the tab</h3>
        </div>


        <div class="tab-pane " id="23a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane " id="24a">
          <h3>Content's background color is the same for the tab</h3>
        </div>



        <div class="tab-pane " id="25a">
          <h3>Content's background color is the same for the tab</h3>
        </div>


        <div class="tab-pane " id="26a">
          <h3>Content's background color is the same for the tab</h3>
        </div>
      </div>


 <button id="regresar" type="button"   class="btn btn-primary">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>  VOLVER
    </button> 


             </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>