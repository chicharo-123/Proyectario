<?php
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $nacimiento = $_POST['nacimiento'];
        $telefono_c = $_POST['telefono_c'];
        $institucion = $_POST['institucion'];
        $puesto = $_POST['puesto'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registro</title>


  <link rel="stylesheet" href="../Assets/css/style3.css">

  <link rel="stylesheet" type="text/css" href="../Assets/css/style.css">
  <!-- Theme style -->
  <!--<link rel="stylesheet" href="dist/css/adminlte.min.css">-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <script src='../Assets/js/jquery-2.1.4.min.js'></script>
  <script src='../Assets/js/javascript.js'></script>


</head>


<body style="overflow-y: scroll;">

                                    <style>
                                        #divPadre {
                                            
                                            text-align:center;
                                            background-color:blue;
                                        }
                                        #divHijo {
                                            
                                            width:400px;
                                            margin:0px auto;
                                            grid-template-columns: repeat(2, 1fr);

                                            /*overflow:auto; */
                                            /*background-color:red;*/
                                        }

                                        .form-control input {                                            
                                            display: block;  
                                        }

                                        .form-control i{
                                            position: absolute;
                                            top: 40px;
                                            right: 10px;
                                        }
                                        .form-control small {
                                            
                                            position: absolute;
                                            bottom: 0;
                                            left: 0;
                                        }
                                       
                                    </style>

    <img class="wave" src="../Assets/css/img/wave3.png">
    <?php require '../partials/header.php' ?>
    <div class="login-content"> 
        <h2 class="title" style="text-align: left; padding: 15px 155px 20px;">Registrarse</h2>
    </div>                                                        
        <form method="POST" action="#" class="login-content" style="margin:0px auto;"  id="form">
            <div class="login-content" style=" margin:0px auto;">
                <div class="row justify-content-center pt-.5 mt-.5 m-1" id="divHijo" style="width:750px;">
                    <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario" style=" height:850px;">
                        
                                
                                

                                <!-- Nombre -->
                                    <div class="form-control"> 
                                        <h6 class="text-light" style="width:600px; padding:1em; text-align:left;">Nombre:</h6>
                                        <input type="text" id="nombre" name="nombre" class="form-control" style="width:670px;   padding: 8px10px 50px 20px; " placeholder="Ingresa tu nombre completo">                                   
                                        <small id="small">Error: </small>
                                    </div>


                                <!-- Teléfono-->
                                        <div class="form-control" style="float: left; padding: 1em;  text-align:left;  height:130px;">
                                            <h6 class="text-light">Teléfono:</h6>
                                            <!--<input maxlength="10" minlength="10" type="text" name="telefono" required="" pattern="[0-9]+" class="form-control" placeholder="Ingresa un número de teléfono">-->
                                            <input type="text" id="telefono" name="telefono"  placeholder="Ingresa un número de teléfono">
                                            <i class="fas da-exclamation-circle"></i>
                                            <small id="small">Error: </small>
                                            
                                        </div>

                                <!-- Correo -->
                                        <div class="form-control" style="  float: right; padding: 1em;  text-align:left; height:130px;"> 
                                            <h6 class="text-light">Correo:</h6>
                                            <input type="text" id="correo" name="correo" placeholder="Ingresa un correo">
                                            <small id="small">Error: </small>
                                        </div> 

                                <!-- Fecha de nacimiento -->
                                    <div class="form-control" style="float: left; padding: 1em;  text-align:left;  height:130px;">
                                        <h6 class="text-light">Fecha de nacimiento</h6>
                                        <input type="date" id="nacimiento" name="nacimiento" style="height:60px; width:300px; color: white;  margin-top: 20px; padding: 1em; font-size: 16px; "  placeholder=" ">
                                        <small id="small">Error: </small>
                                    </div>

                                <!-- Contacto de referencia -->
                                    <div class="form-control" style="float: right; padding: 1em;  text-align:left;  height:130px;">
                                        <h6 class="text-light">Contacto de referencia en UPIIZ:</h6>
                                        <input type="text" id="telefono_c" name="telefono_c"  placeholder="Ingresa teléfono de contacto">
                                        <small id="small">Error: </small>
                                    </div>

                                <!-- Institución de procedencia -->    
                                    <div class="form-control" style="float: left; padding: 1em;  text-align:left;  height:130px;"> 
                                        <h6 class="text-light">Institución de procedencia:</h6>
                                        <input type="text" id="institucion" name="institucion"  placeholder="Ingresa institución de procedencia">
                                        <small id="small">Error: </small>
                                    </div>

                                <!--Puesto que ocupa en la institución -->
                                    <div class="form-control" style="float: right; padding: 1em;  text-align:left;  height:130px;">
                                        <h6 class="text-light">Puesto que ocupa en la institución:</h6>
                                        <input type="text" id="puesto" name="puesto"  placeholder="Ingresa el puesto">
                                        <small id="small">Error: </small>
                                    </div>

                                <!-- Usuario -->
                                    <div class="form-control" style="float: left; padding: 1em;  text-align:left; height:130px;">
                                        <h6 class="text-light">Usuario:</h6>
                                        <input type="text" id="usuario" name="usuario"  placeholder="Ingresa un usuario">
                                        <small id="small">Error: </small>
                                    </div>

                                <!-- Contraseña -->
                                    <div class="form-control" style="float: right; padding: 1em;  text-align:left; height:130px;">
                                        <h6 class="text-light">Connntraseña:</h6>
                                        <input type="password" id="password" name="password"  placeholder="Ingresa una contraseña">
                                        <small id="small">Error: </small>
                                    </div>
                                   <br>
                                   <br>
                                    <input id="submit" type="submit" style="margin-left: 50%; transform: translate(-50%, 35%); width: 500px; " name="submint"   class="btn" value="Registrar">
                                    <a href="http://localhost/Proyectario_MVC/">Iniciar sesi&oacute;n</a>
                                <!--<div>-->
                                <!--Todas las opciones FIN-->

                       
                    </div>
                </div>
            </div>
        </form>
    

        <script src="../Assets/js/validarcampos7.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>