<?php 
 session_start();
include("../lib/conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();
    
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> SICON | Administración </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    

    


    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="../assets/img/sidebar-4.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://www.siconecuador.com" class="simple-text">
                    
                <IMG SRC="../img/Logo.png" WIDTH=110 HEIGHT=40 ALT="">

                </a>
            </div>

             <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Inicio </p>
                    </a>
                </li>
                <li>
                    <a href="itingresosolicitud.php">
                        <i class="pe-7s-user"></i>
                        <p>Solicitud de Servicio </p>
                    </a>
                </li>
                <li>
                    <a href="casoscerrados.php">
                        <i class="pe-7s-note2"></i>
                        <p>Servicios Cerrados</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Registro </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md"> Distribuidores </p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                                Bienvenido(a)




                   <?php


                             $email=$_SESSION['sesion'];
                             $sql= "select * from usuarios where  NOMBRE_USUARIO='".$email."'";
                             $result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error()); 
                              $numero_filas = mysql_num_rows($result); 

                           
                             while ($fila = mysql_fetch_array($result, MYSQL_ASSOC)) {
                              $nombre=$fila['NOMBRE_APELLIDO_USUARIO'];
                         
                              
                            }

                            ?>
                
                            Nombre :  <?php echo $nombre;?>



                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="../login">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Gestión de Servicio</h4>
                                <p class="category">Bienvenido</p>
                            </div>
                            
                            <h3 > Nombre :  <?php echo $nombre;?> </h3>   
                            
                            <br>

                            </div>
                        </div>
                    </div>
                    
                    
  

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.siconecuador.com">Sicon</a>
                </p>
            </div>
        </footer>


    </div>
</div>
            
            
<style type="text/css">
    
.mi-iframe {
  width: 100px;
  height: 50px;
}

/* CSS pantallas de 320px o superior */
@media (min-width: 320px) {

  .mi-iframe {
    width: 300px;
    height: 300px;
  } 

}

/* CSS pantalla 768px o superior */
@media (min-width: 768px) {

  .mi-iframe {
    width: 820px;
    height: 500px;
  } 

}


</style>



<script>
                          function mostrarmodal(x) {
 
         
		                                $.ajax({
			                                url :'lib/rrhhverhoja.php',		//pagina q me traera los datos
			                                data: { id: x},
			                                type : 'GET',
			                                dataType : 'json',
			                                success : function(json) {
                                                            
                                                            

			                                    document.getElementById('ID_REG_EMPLEADOS').innerText = json.ID_REG_EMPLEADOS;
			                                    document.getElementById('NOMBRE_EMP').innerText = json.NOMBRE_EMP;
                                                            document.getElementById('TELEFONO_EMP').innerText = json.TELEFONO_EMP;
			                                    document.getElementById('TELEFONO_CEL_EMP').innerText = json.TELEFONO_CEL_EMP;
			                                    document.getElementById('PAIS_EMP').innerText = json.PAIS_EMP;
			                                    document.getElementById('CIUDAD_EMP').innerText = json.CIUDAD_EMP;
			                                    document.getElementById('EMAIL_EMP').innerText = json.EMAIL_EMP;
			                                    document.getElementById('EDAD_EMP').innerText = json.EDAD_EMP;
			                                    document.getElementById('HOBBIE').innerText = json.HOBBIE;
                                                            
                                                            document.getElementById('DESCRIPCION_EMP').innerText = json.DESCRIPCION_EMP;
			                                    document.getElementById('CARGO').innerText = json.CARGO;
			                                    document.getElementById('SITUACION_LABORAL').innerText = json.SITUACION_LABORAL;
			                                    document.getElementById('PORQUE_EMP').innerText = json.PORQUE_EMP;
                                                           
			                                    document.getElementById('FECHA_INGRESO').innerText = json.FECHA_INGRESO;
                                                            document.getElementById('ESTUDIOS').innerText = json.ESTUDIOS;
                                                            
                                                             document.getElementById('HOJA_VIDA').innerText = json.HOJA_VIDA;

			                                },
			                                error : function(jqXHR, status, error) {
			                                    alert(error); //Si ocurre un error
			                                }
		                                });
	                                };
                                    </script>

            
        <style>
            .contenedor {
                margin: 60px auto;
                width: 100px;
                font-family: sans-serif;
                font-size: 15px;
            }

            table {
                width: 100%;
                box-shadow: 0 0 10px #ddd;
                text-align: left;
            }

            th {
                padding: 5px;
                background: #555;
                color: #fff;
            }

            td {
                padding: 5px;
                border: solid #ddd;
                border-width: 0 0 1px;
            }

            .editable span {
                display: block;
            }

                .editable span:hover {
                    background: url(images/edit.png) 90% 50% no-repeat;
                    cursor: pointer;
                }

            td input {
                height: 24px;
                width: 200px;
                border: 1px solid #ddd;
                padding: 0 5px;
                margin: 0;
                border-radius: 6px;
                vertical-align: middle;
            }

            a.enlace {
                display: inline-block;
                width: 24px;
                height: 24px;
                margin: 0 0 0 5px;
                overflow: hidden;
                text-indent: -999em;
                vertical-align: middle;
            }

            .guardar {
                background: url(images/save.png) 0 0 no-repeat;
            }

            .cancelar {
                background: url(images/cancel.png) 0 0 no-repeat;
            }

            .mensaje {
                display: block;
                text-align: center;
                margin: 0 0 20px 0;
            }

            .ok {
                display: block;
                padding: 10px;
                text-align: center;
                background: green;
                color: #fff;
            }

            .ko {
                display: block;
                padding: 10px;
                text-align: center;
                background: red;
                color: #fff;
            }



        </style>
            
                              
                            <div class="modal fade" id="myModal3" role="dialog">
                                <div class="modal-dialog modal-lg">
                                
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h1 align="center" class="modal-title">Hoja de Vida Postulantes</h1>
   
                                    </div>
                                    <div class="modal-body" >
     

                                               
                                    <h3>Información Básica</h3>
                                    
                                    <table>
                                           <tr>
                                              <td>ID: <label id="ID_REG_EMPLEADOS"  name="ID_REG_EMPLEADOS" > </label>  </td>
                                              <td>NOMBRE: <label id="NOMBRE_EMP" name="NOMBRE_EMP" > </label></td>    
                                            </tr>
                                             <tr>
                                              <td>TELÉFONO: <label id="TELEFONO_EMP" name=TELEFONO_EMP' ></label></td>  
                                              <td>CELULAR: <label id="TELEFONO_CEL_EMP" name=TELEFONO_CEL_EMP' ></label></td>
                                              </tr>
                                               <tr>
                                                 <td>PAIS: <label id="PAIS_EMP" > </label> </td>
                                                  <td>CIUDAD: <label id="CIUDAD_EMP"  ></label></td>
                                              </tr>
                                              <tr>
                                              <td>EMAIL: <label id="EMAIL_EMP" ></label></td>
                                              <td>EDAD: <label id="EDAD_EMP"  ></label></td>
                                              </tr>
                                              
                                             
                                    </table>
                                    
                                     <h3>Descripción</h3>

                                     <table >
                                         <tr>
                                               <td>HOBBIE : <label id="HOBBIE" > </label> </td>
                                              <td>DESCRIPCION_EMP: <label id="DESCRIPCION_EMP"  ></label></td>
                                              </tr>
                                              
                                             <tr>
                                              <td>CARGO: <label id="CARGO" ></label></td>
                                              <td>SITUACION LABORAL: <label id="SITUACION_LABORAL"  ></label></td>
                                             </tr> 
                                        
                                             <tr>
                                              <td>PORQUE: <label id="PORQUE_EMP" > </label> </td>
                                              <td>ESTUDIOS: <label id="ESTUDIOS" ></label></td>
                                            </tr>
                                            
                                        </table>
                                     
                                     
                                     <h4>FECHA DE INGRESO: <label id="FECHA_INGRESO" ></label></h4>
                                     
                                    HOJA DE VIDA: <label id="HOJA_VIDA"></label>  
                                    
                                     <button id="theId" onclick="doSomething()">Descargar</button>
                                        
                                           <script>
                                           function doSomething(){
                                              
                                              var s = document.getElementById("HOJA_VIDA").innerHTML;
                                              location.href=s;
                                       
                                           }</script>
                                        
                                           
                                           <script type="text/javascript">
                                                document.write(s);
                                          </script>
                                        
                                        <center> 
                                         
                                         <button  type="button" class="btn btn-danger" onclick="enviarpdf3()"> Descartar </button>
                                         <button  type="button" class="btn" > Salir </button>
                                         
                                            </center>

                           



                                           <br>


                                     </div>
                                  </div>
                                  
                                </div>
                              </div>
            
                    



</body>


    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
 

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>


</html>