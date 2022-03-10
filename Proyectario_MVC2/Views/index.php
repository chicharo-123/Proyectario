
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>


  <link rel="stylesheet" href="Assets/css/style2.css">
  <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
  <!-- Theme style -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

  <!-- Banner -->
  	<link rel="stylesheet" href="Assets/css/pogo-slider.min.css">  
    <link rel="stylesheet" href="Assets/css/responsive.css">
    

	<meta name="viewport" content="width=device-width, initial-scale=1">

  <script src='<?php echo base_url;?>Assets/js/jquery-2.1.4.min.js'></script>
  <script src='<?php echo base_url;?>Assets/js/javascript.js'></script>
</head>


<body style="overflow-y: scroll; overflow-x: hidden;" >


<img class="wave" src="<?php echo base_url;?>Assets/css/img/wave3.png">
  <?php require 'partials/header.php' ?>
	<div class="container">

  <!-- Start Banner -->
	<div style="margin-top: 80px;">
		<div class="container-fluid" >
			<div class="row" >
				<div class="pogoSlider" id="js-main-slider" style="height: 500px";>

        
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(<?php echo base_url;?>Assets/css/img/ipn_ch.png);">
						<div class="lbox-caption pogoSlider-slide-element">	
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(<?php echo base_url;?>Assets/css/img/upiiz_ch.png);">
						<div class="lbox-caption pogoSlider-slide-element">
						</div>
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->


    <div class="login-content"> 
      <form action="index.html" id="form">
          <img src="<?php echo base_url;?>Assets/css/img/logo_login.svg">
				      <h2 class="title">Iniciar sesión</h2>


              <div class="row justify-content-center pt-.5 mt-.5 m-1" >
                <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                  <form action="login.php" method="POST">
                    
                              <style>
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
                              </style>

                            <div class="select">    
                              <select id='select' name='select'>
                                <option selected disabled>Seleccione</option>
                                <option value='div1'>Interno</option>
                                <option value='div2'>Externo</option>
                                <option value='div3'> Administrador</option>
                              </select>
                            </div>
                        
                            <br>
                            <!--Todas las opciones-->
                            <div id='pai'>


                                  <!--Interno-->
                                  <div id='div1'>
                                      <!--RFC-->
                                      <section class="form-control" style="background: none">
                                          <h6 class="text-light">RFC:</h6>
                                          <input type="text" id="rfc_log" name="RFC" class="from-control" placeholder="Ingresa tu RFC" style="background: rgba(0,0,0,.3);">
                                          <small id="small" style="transform: translateX(-50%);display: inline-block;"></small>
                                      </section>

                                      <!--botón--> 
                                      <input type="submit" class="btn" value="Login" style="margin: 20px 1em 0 auto;">
                                  </div>
                                  <!--Interno FIN-->

                                  <!--Externo-->
                                  <div id='div2'>
                                      <!--Usuario externo-->
                                      <section class="form-control">
                                          <h6 class="text-light">Usuario:</h6>
                                          <input type="text" id="usuarioE" name="usuarioE" placeholder="Ingresa tu usuario" style="background: rgba(0,0,0,.3);">
                                          <small id="small"></small>
                                      </section> 

                                      <!--Contraseña externo-->
                                      <section class="form-control">
                                          <h6 class="text-light">Contraseña:</h6>
                                          <input type="password" id="passwordE" name="passwordE"  placeholder="Ingresa tu contraseña" style="background: rgba(0,0,0,.3);">
                                          <small id="small"></small>
                                      </section>

                                      <!--Botón-->
                                      <input type="submit" class="btn" value="Login" style="margin: 15px 1em 0 auto; backgrond:none;">          
                                      <a href="<?php echo base_url;?>Views/Registro.php" >Registrarse </a>
                                  </div>
                                  <!--Ecterno FIN-->


                                  <!--Admin-->
                                  <div id='div3'>
                                      <!--Usuario Admin-->
                                      <section class="form-control">
                                        <h6 class="text-light">Usuario:</h6>
                                        <input type="text" id="usuarioA"name="usuarioA" placeholder="Ingresa tu usuario" style="background: rgba(0,0,0,.3);">
                                        <small id="small"></small>
                                      </section>

                                      <!--Contraseña Admin-->
                                      <section class="form-control">
                                        <h6 class="text-light">Contraseña:</h6>
                                        <input type="password" id="passwordA" name="passwordA"  placeholder="Ingresa tu contraseña" style="background: rgba(0,0,0,.3);">
                                        <small id="small"></small>
                                      </section>
                                  
                                      <!--Botón-->
                                      <input id="submit" type="submit" class="btn" value="Login">
                                  </div> 
                                  <!--Admin FIN-->


                            </div>
                            <!--Todas las opciones FIN-->

                  </form>
                </div>
              </div>
      </form>
      
    </div>
</div>


<script src="<?php echo base_url;?>Assets/js/validarcampos8.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- ALL JS FILES -->
<script src="assets/js/jquery.min.js"></script>

    <!-- ALL PLUGINS -->

  <script src="<?php echo base_url;?>Assets/js/jquery.pogo-slider.min.js"></script> 
	<script src="<?php echo base_url;?>Assets/js/slider-index.js"></script>
	<script src="<?php echo base_url;?>Assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url;?>Assets/js/form-validator.min.js"></script>

</body>
</html>