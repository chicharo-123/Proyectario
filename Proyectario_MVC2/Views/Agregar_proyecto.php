<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agregar proyecto</title>

  <!--<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="css/style.css">-->


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Assets/css/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../Assets/css/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Assets/css/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../Assets/css/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Assets/css/adminlte.min.css">
</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-image: url('../Assets/css/img/barr5.png'); text-color: #fff;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" style="color:#fff;" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio.php" class="brand-link" style="background-image: url('../Assets/css/img/barr5.png');" >
      <img src="../Assets/css/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PROYECTARIO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

       <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header" style="background-color: gray; color:#fff"> MENU</li>
            <br>
            <li class="nav-item">
                <a href="inicio.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Inicio
                    </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="./perfil.php" class="nav-link" >
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Perfil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Ofertar_proyectos.php" class="nav-link active" style="background-color: #8E1F4C;">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Ofertar proyecto
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tables/Solicitudes.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Solicitudes
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../mailbox/chat.php" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Chat
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tables/Ofertar_actividades.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Ofertar actividades
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tables/Validar_registros.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Validar registros
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/Proyectario_MVC/" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Cerrar sesión
                </p>
            </a>
          </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
            <h1 class="m-0" style="text-align: center;">PROYECTARIO</h1>
            <hr size="2px" color="black" /> 
            <br>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar proyecto</h3>
                </div>

                <!---------------------------------------------FORMULARIO-------------------------------------->
                    <style>
                        
                        .login-content{
                            display: flex;
                            justify-content: flex-start;
                            align-items: center;
                            text-align: center;
                        }
                        /* cuadro transparente principal*/
                        
                        .formulario{
                            background: rgba(0,0,0,.2);
                            padding: 20px;
                            border-radius: 10px;
                            box-shadow: 0 0 30px rgba(0,0,0,.568);
                            color: white;
                            margin: 0;
                            width: 900px;
                            
                            
                        }
                        /*secciones o campos*/
                        .foorm-control {
                            margin-bottom: 10px;
                            padding-bottom: 20px;
                            position: relative;
                            background: none;
                        }

                        .foorm-control label{
                            display: inline-block;
                            margin-bottom: 5px;
                        }

                        .foorm-control label{
                            display: inline-block;
                            margin-bottom: 5px;
                        }
                        .foorm-control input{
                            border:1px solid #f0f0f0;
                            background: rgba(0,0,0,.3);
                            transition: 0.5s ease-in;
                            outline: none;
                            box-shadow: none;
                        }
                        .foorm-control input::placeholder{
                            color: white;
                        }

                        .foorm-control input:focus{
                            background: none;
                            outline: none;
                            box-shadow: none;
                        }

                        .foorm-control.error input{
                            border-color: #ce1e0b;
                        }

                        .foorm-control.success input{
                            border-color: #079e6cf8;  
                        }

                        .foorm-control i {
                            position: absolute;
                            top: 40px;
                            right: 10px;
                            visibility: hidden;
                        }
                        .foorm-control button{
                                display: block;
                                width: 150px;
                                height: 40px;
                                border-radius: 5px;
                                outline: none;
                                border: none;
                                background-image: linear-gradient(to right, #8E1F4C, #330d1c,#681937);
                                background-size: 200%;
                                font-size: 1.2rem;
                                color: #fff;
                                font-family: 'Poppins', sans-serif;
                                /*text-transform: uppercase;*/
                                margin-right: 0;
                                cursor: pointer;
                                transition: .5s;
                          }
                          .foorm-control.hover button{
                            background-position: right;
                          }

                        .foorm-control.error i.fa-exclamation-circle {
                            color: #ce1e0b;
                            visibility: visible;
                        }

                        .foorm-control small {
                            position: relative;
                            /*top: 115px;*/
                            float: left; 
                            /*padding: 1em; */ 
                            text-align:left;
                            visibility: hidden;
                        }

                        .foorm-control.error small{
                            color: #ce1e0b;
                            /*background-color: none;*/
                            visibility: visible;
                        }
                        .bttn{
                          display: block;
                          width: 150px;
                          height: 40px;
                          border-radius: 5px;
                          outline: none;
                          border: none;
                          background-image: linear-gradient(to right, #8E1F4C, #330d1c,#681937);
                          background-size: 200%;
                          font-size: 1.2rem;
                          color: #fff;
                          font-family: 'Poppins', sans-serif;
                          /*text-transform: uppercase;*/
                          margin-right: 0;
                          cursor: pointer;
                          transition: .5s;
                        }
                        .bttn:hover{
                          background-position: right;
                        }

                        /*Estilo del select*/
                        select {
                                    -webkit-appearance:none;
                                    -moz-appearance:none;
                                    -ms-appearance:none;
                                    appearance:none;
                                    outline:0;
                                    box-shadow:none;
                                    border:0!important;
                                    background: #878888;
                                    background-image: none;
                                    flex: 1;
                                    padding: 0 1.5em;
                                    color:#fff;
                                    cursor:pointer;
                                    font-size: 1em;
                                    /*font-family: 'Catamaran', sans-serif;*/

                                  }
                                  select::-ms-expand {
                                    display: none;
                                  }
                                  .select {
                                    position: relative;
                                    display: flex;
                                    width: 20em;
                                    height: 3em;
                                    line-height: 3;
                                    background: #bbccc8;
                                    overflow: hidden;
                                    border-radius: .25em;
                                  }
                                  .select::after {
                                    content: '\25BC';
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    padding: 0 1em;
                                    background: #6c6d6d;
                                    cursor:pointer;
                                    pointer-events:none;
                                    transition:.25s all ease;
                                  }
                                  .select:hover::after {
                                    color: #8E1F4C;
                                  }
                                  
                                  .select::selection {
                                      background-color: #E1D8CF;
                                      color: #8E1F4C;
                                  }
        
                                  .select::-moz-selection {
                                      background-color:#E1D8CF;
                                      color: #8E1F4C;
                                  }
                                  #footer {
                                    background-color: #8C898B;
                                    position: absolute;
                                    display: inline-block;
                                    bottom: 0;
                                    width: 100%;
                                    height: 40px;
                                    color: white;
                                    align-items: right;
                                  }

                        #contenedor{
                            display: flex;
                            flex-direction: row;
                            
                            flex-wrap: wrap;
                        }

                        #contenedor > div {
                            width: 20%;
                        }

                    </style>

                                                                      
                        <form method="POST" action="#" class="login-content" style="margin:20px;"  id="form">
                          <div class="row justify-content-center pt-.5 mt-.5 m-1" style="width:100%;">
                              <div class="formulario" style=" height:750px;"  id="contenedor"> 
                                    
                                      <div style="width:100%;"></div>
                                      
                                      <!-- Título -->
                                        <div class="foorm-control"> 
                                            <h6 class="text-dark" style="margin: 10px;"><b>Título:</b></h6>
                                        </div>

                                        <div class="foorm-control" style="width:65%;">
                                            <input type="text" id="titulo" class="foorm-control" name="titulo" style="width:100%;" placeholder="Ingresa el título del proyecto">                                   
                                            <small id="small">Error: </small>
                                        </div>

                                      <!-- Categoría-->
                                        <div class="foorm-control">
                                            <h6 class="text-dark" style="margin: 10px;"><b>Categoría:</b></h6>    
                                        </div>

                                        <div class="select">
                                        <select id='categoria' name='categoria'>
                                          <option selected disabled>Seleccione</option>
                                          <option value='ss'>SS</option>
                                          <option value='tt'>TT</option>
                                          <option value='pt'>PT</option>
                                          <option value='et'>ET</option>
                                          <option value='uae'>UAE</option>
                                        </select>
                                            <small id="small">Error: </small>
                                        </div>

                                        <!-- Descripción-->
                                        <div class="foorm-control">
                                            <h6 class="text-dark" style="margin: 10px;"><b>Descripción:</b></h6>    
                                        </div>

                                        <div class="foorm-control" style="width:40%;">
                                            <input type="text" id="descripcion" class="foorm-control" style="width:100%;"name="descripcion"  placeholder="Descripción">
                                            <small id="small">Error: </small>
                                        </div>
                                        
                                        <!-- Requisitos -->
                                        <div class="foorm-control"> 
                                            <h6 class="text-dark" style="margin: 10px;"><b>Requisitos:</b></h6>
                                        </div>

                                        <div class="foorm-control" style="width:80%;">
                                            <input type="text" id="requisitos" class="foorm-control" name="requisitos" style="width:100%;" placeholder="Ingresa el título del proyecto">                                   
                                            <small id="small">Error: </small>
                                        </div>

                                        <!-- Num de alumnos -->
                                        <div class="foorm-control" style="width:50%; align-items: left;"> 
                                            <h6 class="text-dark" style="width:50%;"><b>Número de alumnos:</b></h6>
                                            <input type="number" style="width:50%;" id="n_alumnos" class="foorm-control" name="n_alumnos" style="; width:25%;" placeholder="0">                                   
                                            <small id="small" style="width:60%; margin-left: 110px;">Error: </small>
                                        </div>

                                        <!-- Agregar alumnos -->
                                        <div class="foorm-control" style="width:50%;"> 
                                            <h6 class="text-dark" style="margin: 10px; width:50%;"><b>Agregar alumnos:</b></h6>
                                            <button id="regresar" type="button" style="margin-left: 70px; width:50%"  name="regresar" class="foorm-control" data-toggle="modal" data-target="#modal-primary" onclick = "identificaActualizar">Agregar alumnos</button>                            
                                            <small id="small">Error: </small>
                                        </div>

                                        <div  style="width:25%;"></div>

                                        <div  style="width:25%;"></div>
                                        <div  style="width:25%;">
                                          <input id="agregar" type="submit" style="margin-left: 70px;  " name="agregar" class="bttn" value="Agregar">
                                        </div>
                                        <div  style="width:25%;">
                                          <button id="regresar" type="button" style="margin-left: 70px;  " name="regresar" class="bttn" onclick="location.href='Ofertar_proyectos.php'">Regresar</button>
                                        </div>
                                        
                          </div>
                      </div>
                                                
                                                    

                                                    
                    
                        </form>





            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Ventana de Agregar Alumnos -->
      <div class="modal  fade" id="modal-primary" > <!--uno-->
        <div class="row" >
          <div class="modal-dialog"  >
            <div class="modal-content" style="width: 550px; height: 600px;">
              <div class="modal-header"  style="background-image: url('../Assets/css/img/barr5.png');";>
                  <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>-->
                    <h1>
                      <font color="#fff">
                        Agregar alumnos
                      </font>
                    </h1>
                    <button type="button" class="close" name="guardar" data-dismiss="modal" style=" 60px; color: #fff;">X</button>
              </div>
              <br>
                <!-- Seleccionar carrera y cantidad -->
                
                <section id="contenedor">
                  <!-- Categoría-->
                    <div class="select" style="width:50%">
                      <select id='carrera' name='carrera'>
                          <option selected disabled>Programa académico</option>
                          <option value='ss'>Sistemas Computacionales</option>
                          <option value='tt'>Mecatrónica</option>
                          <option value='pt'>Alimentos</option>
                          <option value='et'>Ambiental</option>
                          <option value='uae'>Metalúrgica</option>
                      </select>
                      <small id="small">Error: </small>
                    </div>

                  <!-- Cantidad de alumnos de esa carrera-->
                      <div class="foorm-control" style="width:30%;">
                        <input type="number" style="width:50%; background: rgba(0,0,0,.3); padding: 10px;" id="c_alumnos" class="foorm-control" name="c_alumnos" style="; width:25%;" placeholder="0">                                   
                        <small id="small">Error: </small>
                      </div>
                                        
                  <!-- Botón -->
                      <div style="width:20%;"> 
                      <button type= "button" class="menu-icon fa fa-edit btn" style="width:50%;" data-toggle="modal" data-target="#modal-primary" onclick = "identificaActualizar"></button>
                      </div>

                </section>
        
                <section class="content" >
                  <section class="content">
                       
                    <!--div class="col-xs-12"-->
                      <div class="box">
                        <div class="box-header">
                        </div>
                        
                        <!-- /.box-header -->
                        <div class="table-responsive"> 
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr> 
                                <th style="text-align:center;">Nombre</th>
                                <th style="text-align:center;">Funcion</th>
                                <th style="text-align:center;">Acciones</th>
                                <!--th style="text-align:center;">Acciones</th-->

                              </tr>
                            </thead>
                     
                           <tbody style="cursor:pointer;">
                                
                              <tr>
                                <td>Ambiental</td>
                                <td>3</td>
                                <td>
                                  <button class="menu-icon fa fa-edit btn" data-toggle="modal" data-target="#modal-secu" onclick = "identificaActualizar"></button>
                                  <button >X</button>
                                </td>
                              </tr>

                            </tbody>


                          </table>
                        </div>
                            
                        <!-- /.box-body -->                                             
                  <!-- /.row -->
                  </section>

                  <section id="footer" style="padding-left: 400px;">
                    <footer>
                      <button type="submit" class="bttn" name="cerrar" data-dismiss="modal" style=" 60px;">Cerrar</button>
                    </footer>
                  </section>
                  
                </section> 
            </div>
          </div>
        </div>
      </div>

      <!-- Ventana de Editar Alumnos -->
      <div class="modal  fade" id="modal-secu" > <!--uno-->
        <div class="row" >
          <div class="modal-dialog"  >
            <div class="modal-content" style="width: 550px; height: 300px; transform: Translate(35%, 50%);">
              <div class="modal-header"  style="background-image: url('../Assets/css/img/barr5.png');";>
                  <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>-->
                    <h1>
                      <font color="#fff">
                        Editar alumnos
                      </font>
                    </h1>
                    <button type="button" class="close" name="guardar" data-dismiss="modal" style=" 60px; color: #fff;">X</button>
              </div>
              <br>
                <!-- Seleccionar carrera y cantidad -->
                
                <section id="contenedor">
                  <!-- Categoría-->
                    <div class="select" style="width:50%">
                      <select id='carrera' name='carrera'>
                          <option selected disabled>Programa académico</option>
                          <option value='ss'>Sistemas Computacionales</option>
                          <option value='tt'>Mecatrónica</option>
                          <option value='pt'>Alimentos</option>
                          <option value='et'>Ambiental</option>
                          <option value='uae'>Metalúrgica</option>
                      </select>
                      <small id="small">Error: </small>
                    </div>

                  <!-- Cantidad de alumnos de esa carrera-->
                      <div class="foorm-control" style="width:30%;">
                        <input type="number" style="width:50%; background: rgba(0,0,0,.3); padding: 10px;" id="c_alumnos" class="foorm-control" name="c_alumnos" style="; width:25%;" placeholder="0">                                   
                        <small id="small">Error: </small>
                      </div>
                                        
                  <!-- Botón -->
                      <div style="width:20%;"> 
                      <button type= "button" class="menu-icon fa fa-edit btn" style="width:50%;" data-toggle="modal" data-target="#modal-primary" onclick = "identificaActualizar"></button>
                      </div>

                </section>
        
                <section class="content" >
                  <section id="footer" style="padding-left: 400px;">
                    <footer>
                      <button type="submit" class="bttn" name="cerrar" data-dismiss="modal" style=" 60px;">Cerrar</button>
                    </footer>
                  </section>
                  
                </section> 
            </div>
          </div>
        </div>
      </div>
</div>

<!-- ./wrapper -->
<script src="../Assets/js/validar_agregarP.js"></script>

<!-- jQuery -->
<script src="../Assets/css/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Assets/css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../Assets/css/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Assets/css/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Assets/css/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../Assets/css/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../Assets/css/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../Assets/css/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../Assets/css/plugins/jszip/jszip.min.js"></script>
<script src="../Assets/css/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../Assets/css/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../Assets/css/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../Assets/css/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../Assets/css/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../Assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Assets/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
