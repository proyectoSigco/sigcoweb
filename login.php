
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<title>Sigco | Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/theme.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
	<!--[if gte IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<div class="loader">
	<div class="spinner">
		<div class="double-bounce1"></div>
		<div class="double-bounce2"></div>
	</div>
</div>

<div class="nav-container">
	<nav class="top-bar overlay-bar">
		<div class="container">

			<div class="row utility-menu">
				<div class="col-sm-12">
					<div class="utility-inner clearfix">
						<span class="alt-font"><i class="icon icon_pin"></i> Calle 68 # 93 - 52 Bogotá - Colombia </span>
						<span class="alt-font"><i class="icon icon_mail"></i> servicioalcliente@mapcompanysas.com</span>

						<div class="pull-right">
							<a href="login.php" class="btn btn-primary login-button btn-xs">Ingreso</a>
							<!--<a href="#" class="btn btn-primary btn-filled btn-xs">Signup</a>-->
							<a href="#" class="language"><img alt="English" src="img/english.png"></a>
							<a href="#" class="language"><img alt="English" src="img/denmark.png"></a>
						</div>
					</div>
				</div>
			</div><!--end of row-->


			<div class="row nav-menu">
				<div class="col-sm-3 col-md-2 columns">
					<a href="index.html">
						<img class="logo logo-light" alt="Logo" src="img/logo-light.png">
						<img class="logo logo-dark" alt="Logo" src="img/logo-dark.png">
					</a>
				</div>

				<div class="col-sm-9 col-md-10 columns">
					<ul class="menu">
						<li class="has"><a href="index.html">Inicio</a>
						</li>
						<li class="has-dropdown"><a href="institucional.html">Institucional</a>
							<ul class="subnav">
								<li><a href="institucional.html">Misión</a></li>
								<li><a href="institucional.html">Visión</a></li>
								<li><a href="institucional.html">Historia</a></li>
							</ul>
						</li>
						<li class="has-dropdown"><a  href="productos.html">Productos</a>
							<div class="subnav subnav-halfwidth">
								<div class="col-sm-6">
									<ul class="subnav">
										<li><a href="productos.html">Mantenimiento</a></li>
										<li><a href="productos.html">Tratamiento de aguas</a></li>
										<li><a href="productos.html">Tratamientos biológicos</a></li>
									</ul>
								</div>

								<div class="col-sm-6">
									<ul class="subnav">
										<li><a href="productos.html">Aerosoles</a></li>
										<li><a href="productos.html">Productos innovadores</a></li>
										<li><a href="productos.html">Tratamientos químicos</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="has-dropdown"><a href="servicios.html">Servicios</a>
							<ul class="subnav">
								<li><a href="servicios.html">Asesoría</a></li>
								<li><a href="servicios.html">Desarrollo</a></li>
								<li><a href="servicios.html">Servicio técnico</a></li>
								<li><a href="servicios.html">Capacitaciones</a></li>
								<li><a href="servicios.html">Cubrimiento</a></li>
							</ul>
						</li>
						<li class="has"><a href="contacto.html">Contacto</a>
						</li>
					</ul>

					<ul class="social-icons text-right">
						<li>
							<a href="https://www.facebook.com/pages/MAP-Company-SAS/428360660600448" target="_blank">
								<i class="icon social_facebook"></i>
							</a>
						</li>
					</ul>
				</div>
			</div><!--end of row-->

			<div class="mobile-toggle">
				<i class="icon icon_menu"></i>
			</div>

		</div><!--end of container-->
	</nav>
</div>
<div class="main-container">
	<section class="no-pad login-page fullscreen-element">

		<div class="background-image-holder">
			<img class="background-image" alt="Poster Image For Mobiles" src="img/hero6.jpg">
		</div>

		<div class="container align-vertical">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
					<h1 class="text-white">Inicie sesión para continuar</h1>
					<div class="photo-form-wrapper clearfix">
						<form action="mvc/controllers/controladorLogin.php?login=true" method="post">
							<input class="form-email" type="text" name="email" placeholder="Usuario">
							<input class="form-password" type="password" name="clave" placeholder="Contraseña">
							<input class="login-btn btn-filled" type="submit" value="Iniciar sesión">
						</form>
					</div><!--end of photo form wrapper-->


					<?php
        if (isset($_GET['login'])){
            ?>
					<script type="text/javascript">
						swal({   title: "Datos de ingreso invalidos",   text: "Por favor intentelo de nuevo",   type: "error",   showCancelButton: false,   confirmButtonColor: "#1B0092",   confirmButtonText: "Regresar",   closeOnConfirm: true }, function(){ });
					</script>
					<?php
        }
        ?>

					<?php
        if (isset($_GET['correo'])){
            ?>
					<script type="text/javascript">
						swal({   title: "Usuario inválido",   text: "El usuario no existe, verifique e intente de nuevo",   type: "error",   showCancelButton: false,   confirmButtonColor: "#1B0092",   confirmButtonText: "Regresar",   closeOnConfirm: true }, function(){ });
					</script>
					<?php
        }
        ?>

					<?php
        if (isset($_GET['sent'])){
            if ($_GET['sent']==false){
                ?>
					<script type="text/javascript">
						swal({   title: "ERROR",   text: "No se proceso la solicitud, intentelo de nuevo o contacte al administrador",   type: "error",   showCancelButton: false,   confirmButtonColor: "#1B0092",   confirmButtonText: "Regresar",   closeOnConfirm: true }, function(){ });
					</script>
					<?php


            }else{
            ?>
					<script type="text/javascript">
						swal({   title: "Restablecer contraseña",   text: "Por favor siga las instruccines enviadas a su correo electrónico",   type: "info",   showCancelButton: false,   confirmButtonColor: "#1B0092",   confirmButtonText: "Regresar",   closeOnConfirm: true }, function(){ });
					</script>
					<?php
            }}
        ?>

					<a href="#modal1" class="text-white">Olvide mi contraseña</a>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>
</div>
<style>
	.modalmask {
		position: fixed;
		font-family:  , sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}
	.modalmask:target {
		opacity:1;
		pointer-events: auto;
	}
	.modalbox{
		border: 10px solid black;
		width: 400px;
		position: relative;
		padding: 5px 20px 13px 20px;
		background: #fff;
		color: #000;
		border-radius:9px;
		-webkit-transition: all 500ms ease-in;
		-moz-transition: all 500ms ease-in;
		transition: all 500ms ease-in;

	}

	.movedown {
		margin: 0 auto;
	}

	.modalmask:target .movedown{
		margin:10% auto;
	}

	.close {
		background: black;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: 1px;
		text-align: center;
		top: 1px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		border-radius:3px;
		font-size:16px;
	}

	.close:hover {
		background: #FAAC58;
		color:#222;
	}

</style>
<div id="modal1" class="modalmask">
	<div class="modalbox movedown">
		<a href="#close" title="Close" class="close">X</a>
		<div class="login-box-body">
			<div class="login-logo">
				<a ><b>Restablecer contraseña</b></a>
			</div>
			<h4 class="login-box-msg">Por favor ingrese su usuario</h4>
			<form action="mvc/controllers/controladorLogin.php?forget=true" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Usuario" name="usuario" required />
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="col-md-12 text-center">
					<button id="test" type="submit" class="btn btn-primary">Restablecer Contraseña</button>
				</div>
			</form>
			<br><br>
		</div>

	</div>
</div>
<div class="footer-container"></div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.plugin.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/scrollReveal.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/twitterFetcher_v10_min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
				