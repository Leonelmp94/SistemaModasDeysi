<?php
 
  $ruta="../";  
  session_start();
  include_once($ruta."class/conductor.php");
  $conductor=new conductor;
  include_once($ruta."class/transporte.php");
  $transporte=new transporte;
  include_once($ruta."class/estacionamiento.php");
  $estacionamiento=new estacionamiento;
  include_once($ruta."funciones/funciones.php");
  $lblcode=ecUrl(3898);
  //echo $lblcode;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo=$_SESSION["short"];
      $hd_titulo2=$_SESSION["descripcion"];
      include_once($ruta."includes/head_basico.php");
      include_once($ruta."includes/head_tabla.php");
    ?>
    
</head>
<body>
    <?php
      include_once($ruta."head.php");
    ?>
    <div id="main">
      <div class="wrapper">
        <?php
          $idmenu=1000;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start # f4b00f-->
          <div class="container">
            <div class="section">
              <div class="row" style="background: white; text-align: center; color:#1C2637; font-size: 20px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;"> 
                <div class="col s12 m12 l12" style="background: #BF8A99; text-align: center; color:#1C2637; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                    SISTEMA DE CONTROL ACTIVOS FIJOS RFID
                     </div>
                <div class="col s12 m12 l12">
                 
                 
                
                  
                </div>
                <div class="col s12 m2 l2">
                     <div class="col s12 m12 l12">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar" style="background: #BF8A99;">
                                         <div class="col s12">
                                        <i class="mdi-social-group circle light-blue darken-4"></i>
                                        <span class="collection-header">Usuarios</span>
                                        </div>
                                        <div class="col s12">
                                             <span class="task-cat cyan" style="font-size: 15px;">10</span>
                                        </div>
                                    </li>
                                    <li class="collection-item avatar" style="background: #BF8A99;">
                                         <div class="col s12">
                                        <i class="mdi-image-timer-auto circle light-blue darken-4"></i>
                                        <span class="collection-header">Personal</span>
                                        </div>
                                        <div class="col s12">
                                             <span class="task-cat green">15</span>
                                        </div>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                </div>
                <div class="col s12 m8 l8">
                    <div class="slider">
                    <ul class="slides">
                      <li>
                        <img src="<?php echo $ruta ?>imagenes/slide/SL1.jpg"> <!-- random image -->
                        <!-- random image -->
                      
                      </li>
                      <li> 
                        <img src="<?php echo $ruta ?>imagenes/slide/SL2.jpg" alt="sample">
                         <div class="caption center-align">
                      </div>
                      </li>
                      <li>
                        <img src="<?php echo $ruta ?>imagenes/slide/SL3.jpg"> <!-- random image -->
                        <div class="caption center-align">
                        <h3>SISTEMA</h3>
                        <h5 class="light white-text text-lighten-3">SISTEMA DE CONTROL RFID ACTIVOS FIJOS</h5>
                      </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col s12 m2 l2">
                     <div class="col s12 m12 l12">
                                <ul id="projects-collection" class="collection">
                                  

                                     <li class="collection-item avatar" style="background: #BF8A99;">
                                         <div class="col s12">
                                        <i class="mdi-action-view-module circle light-blue darken-4"></i>
                                        <span class="collection-header">Activos</span>
                                        </div>
                                        <div class="col s12">
                                             <span class="task-cat blue">50</span>
                                        </div>
                                    </li>
                                    <li class="collection-item avatar" style="background: #BF8A99; font-size: 15px;">
                                        
                                        <div class="row col s12">
                                             <span class="task-cat green" style="background: #BF8A99; font-size: 15px;">Vigentes: 40</span>
                                        </div>
                                    </li>
                                    <li class="collection-item avatar" style="background: #BF8A99; font-size: 15px;">
                                        
                                        <div class="row col s12">
                                             <span class="task-cat red" style="background: #BF8A99; font-size: 15px;">Baja: 10</span>
                                        </div>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                </div>
              </div>
              
            </div>
          </div>
          <div id="breadcrumbs-wrapper">
            <div class="container">
             
            </div>
          </div>
          
          <!--start container-->
       
          <!--end container-->
        </section>
      </div>
    </div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
    ?>
    
    <!-- Toast Notification -->
    <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        responsive: true
      });
    });
    // Toast Notification
    $(window).load(function() {
        
        setTimeout(function() {
            Materialize.toast('<span>Bienvenido</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>En el boton izquierdo puede ver tus opciones en el sistema</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>No dudes en consultar al departamento de sistemas</span>', 3000);
        }, 15000);
    });
    </script>
</body>

</html>