<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
session_start();
if ($_SESSION['rol']['rol']!=3){
    header('location: Prohibido.php');
}
if ($_SESSION['datosLogin']['EstadoPersona']=="Inactivo" or !isset($_SESSION['datosLogin'])){
    header('location: Invalido.php');
}
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrar producto</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="../../dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../plugins/select2/select2.css"/>

    <!-- FORMVALIDATION -->
    <script type="text/javascript" src="../../plugins/jQuery/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/formValidation.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/framework/bootstrap.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/language/es_ES.js"></script>
    <script type="" src="../../plugins/select2/select2.min.js" ></script>



    <link rel="stylesheet" href="../../date/jquery-ui.css">
  <script src="../../date/jquery-ui.js"></script>
  <script src="../../date/jquery-ui.theme.css"></script>
<!--  <link rel="stylesheet" href="/resources/demos/style.css">-->

    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
    <!-- FORMVALIDATION -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>S</b>GC</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>SI</b>GCO</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The iterator image in the navbar-->
                                <img src="../../dist/img/<?php echo $_SESSION['datosLogin']['RutaImagenPersona'] ?>" class="user-image" alt="User Image" />
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs"><?php echo $_SESSION['datosLogin']['Nombres'].' '.$_SESSION['datosLogin']['Apellidos'] ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The iterator image in the menu -->
                                <li class="user-header">
                                    <img src="../../dist/img/<?php echo $_SESSION['datosLogin']['RutaImagenPersona'] ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $_SESSION['datosLogin']['Nombres'].' '.$_SESSION['datosLogin']['Apellidos'] ?>
                                        <small><?php echo $_SESSION['datosLogin']['NombreRol']?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../controllers/controladorCerrarSesion.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar iterator panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../dist/img/<?php echo $_SESSION['datosLogin']['RutaImagenPersona'] ?>" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $_SESSION['datosLogin']['Nombres'].' '.$_SESSION['datosLogin']['Apellidos'] ?></p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['datosLogin']['NombreRol']?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">Menu</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="active"><a href="index.php"><i class="fa fa-desktop"></i> <span>Inicio</span></a></li>
                    <?php
                    require'../facades/FacadeEmpleado.php';
                    $facade=new FacadeEmpleado();
                    $titulos=$facade->obtenerMenu($_SESSION['rol']['rol']);
                    foreach ($titulos as $menu ) {?>
                        <li class="treeview">
                            <a href="#"><i class="<?php echo $menu['Icono']?>"></i> <span><?php echo $menu['Nombre']?></span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <?php
                                $subtitulos=$facade->obtenerSubMenu($menu['IdCategoria'],$_SESSION['rol']['rol']);
                                foreach ($subtitulos as $submenu ) { ?>
                                    <li><a href="<?php echo $submenu['Url']?>"><?php echo $submenu['NombrePagina']?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>

                        <?php
                    }
                    ?>
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

      <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Formulario de Creación
                    <small>Productos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li class="active">Registrar</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <!-- right column -->
                    <div class="col-md-10">
                        <form id="defaultForm" action="../controllers/ControladorProducto.php" method="post" enctype="multipart/form-data">

                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Nuevo producto</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <div class="form-group">
                                        <p>
                                            Por favor diligencie el siguiente formulario para registrar un nuevo
                                            producto.<br><br>
                                            Recuerde que este formulario contiene campos obligatorios(*).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- general form elements disabled -->


                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Modificar Producto</h3>
                                </div>

                                <div class="box-body">


                                    <div class="form-group">
                                        <label for="names">Nombre de producto*</label>
                                        <input class="form-control" name="nombreProducto" id="names" type="text" placeholder="Map-234556" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="apellido">Descripción*</label>
                                        <textarea class="form-control" name="descriptionProducto" id="descriptionProducto" type="text" maxlength="200" placeholder="" rows="5"></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label for="cargo">IVA*</label>
                                        <select class="form-control select2" name="ivaProducto" id="cargo">
                                            <option value="">Seleccionar</option>
                                            <?php
                                            require '../facades/FacadeProducto.php';

                                            $producto = new Facade();
                                            $Productos = $producto->obtenerImpuestosProducto();
                                            foreach($Productos as $iterator) { ?>
                                                <option value="<?php echo $iterator['IdIva']; ?>"><?php echo $iterator['PorcentajeIva']; ?></option>
                                                <?php
                                            }?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="pass1">Valor*</label>
                                        <input class="form-control" name="valorProducto" id="pass1" type="number" maxlength="20" required title="Este campo es requerido">
                                    </div>

                                    <div class="form-group">
                                        <label for="imagen">Imágen</label>
                                        <input  name="ImagenProducto" id="imagen"  type="file" multiple=true class="file"  title="Este campo es requerido">
                                    </div>
                                    <div class="form-group">
                                        <label for="presentacionProducto">Presentación producto*</label>
                                        <select class="form-control select2" name="presentacionProducto" id="cargo">
                                            <option value="">Selecionar </option>
                                            <?php

                                            $producto = new Facade();
                                            $Productos = $producto->obtenerPresentacionProducto();
                                            foreach($Productos as $iterator) { ?>
                                                <option value="<?php echo $iterator['IdPresentacion']; ?>"><?php echo $iterator['NombrePresentacion']; ?></option>
                                                <?php
                                            }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoriaProducto">Categoria producto*</label>
                                        <select class="form-control select2" name="categoriaProducto" id="cargo">
                                            <option value="">Seleccionar</option>
                                            <?php
                                            $producto = new Facade();
                                            $Productos = $producto->obtenerCategoriaProducto();
                                            foreach($Productos as $iterator) { ?>
                                                <option value="<?php echo $iterator['IdCategoria']; ?>"><?php echo $iterator['NombreCategoria']; ?></option>
                                                <?php
                                            }?>
                                        </select>
                                    </div>
                                    <div class="box-footer">
                                        <input type="button" class="btn btn-warning" tabindex="15"
                                               onclick="location.href='index.php'" value="Cancelar"/>
                                        <button type="submit" class="btn btn-success pull-right" tabindex="14"
                                                value="guardar" name="guardar" id="guardar">Guardar producto
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>

                    <!-- /.box -->
                </div>
        </div>

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->

        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">SIGCO</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
  <script type="text/javascript">
$(document).ready(function() {   

    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function generateCaptcha() {
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    }

    generateCaptcha(); 
    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },


        fields: {
            nombreProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            descriptionProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            ivaProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            valorProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                        }
                    }
                },
                presentacionProducto:{
                    validators: {
                        notEmpty: {
                            message: 'Este campo es requerido'
                            }
                        }
                    },
            categoriaProducto:{
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            }

        }
    });
});
      $('.select2').select2();
</script>
</html>
