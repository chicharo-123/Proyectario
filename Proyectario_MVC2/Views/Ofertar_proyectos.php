<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ofertar proyectos</title>

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
                <a href="inicio.php" class="nav-link" >
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Inicio
                    </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="../examples/perfil.php" class="nav-link">
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
            <a href="./Solicitudes.php" class="nav-link" >
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
            <a href="./Ofertar_actividades.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Ofertar actividades
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./Validar_registros.php" class="nav-link">
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
                <h3 class="card-title">Ofertar proyectos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Requisitos</th>
                    <th>N. alumnos</th>
                    <th>P. académico</th>
                    <th>Responsable</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>U</td>
                    <td ></td>
                    <td>-</td>
                    <td>
                      
                      <button onclick="location.href='Actualizar_proyecto.php'" class="menu-icon fa fa-edit btn"></button>
                      <button >X</button>
                    </td>
                  </tr>
                  
                  
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td>419.3</td>
                    <td>A</td>
                    <td>U</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td>522.1</td>
                    <td>A</td>
                    <td>U</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td>420</td>
                    <td>A</td>
                    <td>U</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!--Botón-->
            <style>
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
                  margin-left: 20px;
                  cursor: pointer;
                  transition: .5s;
                  transform: translateY(-150%);
                }
                .bttn:hover{
                  background-position: right;
                }
        
            </style>
            <button onclick="location.href='Agregar_proyecto.php'" type="submit" class="bttn">Agregar</button>
            </div>
            <!-- /.card -->
            
            <br>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  
  <!--footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
</div>
<!-- ./wrapper -->

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
