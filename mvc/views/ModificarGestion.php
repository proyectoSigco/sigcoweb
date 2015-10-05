<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
session_start();
if ($_SESSION['datosLogin']==null || $_SESSION['datosLogin']['EstadoPersona']=="Inactivo") /*|| $_SESSION['rol']['rol']!=3)*/{
    header('location: Invalido.php');
}
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Modificar gestión</title>
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
    <link href="../../plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="../../dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/style.css" rel="stylesheet" type="text/css" />

    <!-- FORMVALIDATION -->
    <script type="text/javascript" src="../../plugins/jQuery/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/formValidation.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/framework/bootstrap.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/language/es_ES.js"></script>
    <script type="text/javascript" src="../../plugins/select2/select2.js"></script>



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
                    Visitas
                    <small> Formulario de modificación</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                    <li><a href="#">Gestiones</a></li>
                    <li class="active">Modificar</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <?php $idviejo=$_GET['id'];?>
                    <!-- right column -->
                    <div class="col-md-10">
                        <form id="defaultForm" action="../controllers/ControladorGestion.php?idv=<?php echo $idviejo ?>" method="post">

                            <div class="box box-info box-solid collapsed-box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Modificar Gestión</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                        </button>
                                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <p>
                                            Por favor diligencie el siguiente formulario para actualizar la información
                                            de una Gestión.<br><br>
                                            Recuerde que este formulario contiene campos obligatorios(*).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- general form elements disabled -->
                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Registrar Visita</h3>
                                </div>

                                <div class="box-body">

                                    <div class="form-group">

                                        <label for="cc">Nit*</label>
                                        <select class="form-control select2" name="idCliente" id="idCliente" >
                                            <?php
                                            require_once '../facades/FacadeGestion.php';
                                            require_once '../facades/FacadeProducto.php';
                                            $empresa = new FacadeGestion();
                                            $id=$_GET['id'];
                                            $empresas = $empresa->obtenerGestion($id);
                                            $factory=$empresa->obtenerEmpresas();

                                            ?>
                                            <?php foreach($factory as $f){ ?>
                                                <option value="<?php  echo $f['Nit']; ?>" <?php if($empresas['NitClienteGestiones']==$f['Nit']) {echo 'selected';} ?>><?php echo $f['Nit']; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="names">Nombre del cliente:</label>
                                        <input class="form-control" name="cliente" id="cliente" type="text" value="<?php echo $f['RazonSocial']; ?>"  readonly>

                                    </div>
                                    <div class="form-group">
                                        <label for="apellido">Tipo visita*</label>
                                        <select class="form-control select2" name="tipoVisita" id="tipoVisita">

                                            <option value="Asesoría"<?php if($empresas['TipoGestiones']=='Asesoría') {echo 'selected';} ?>> ASESORIA</option>
                                            <option value="Capacitación" <?php if($empresas['TipoGestiones']=='Capacitación') {echo 'selected';}?>>CAPACITACIÓN</option>

                                        </select>

                                    </div>
                                    <div class="form-group" id="producto">
                                        <label for="cargo">Producto*</label>
                                        <select  class="form-control select2" name="temaproducto">
                                            <?php
                                            $producto = new Facade();
                                            $productos = $producto->getProductos();
                                            foreach($productos as $iterator2) { ?>
                                                <option value="<?php echo $iterator2['IdProducto'];?>" <?php if(is_numeric($empresas['Asunto'])&&$empresas['Asunto']==$iterator2['IdProducto'] ){ echo' selected';} ?>><?php echo $iterator2['NombreProducto']; ?></option>
                                                <?php
                                            }?>
                                        </select>
                                    </div>
                                    <div class="form-group" id="tema">
                                        <label for="email" >Tema*</label>
                                        <input class="form-control" name="tema" value="<?php echo $empresas['Asunto']  ?>" type="text" maxlength="20" placeholder="Desengrasantes">
                                    </div>

                                    <div class="form-group">
                                        <label for="pass1">Asistentes*</label>
                                        <input class="form-control" name="asistentes" value="<?php echo $empresas['Asistentes']  ?>" id="asistentes" type="number" placeholder="" min="1">
                                    </div>

                                    <div class="form-group">
                                        <label for="pass2">Descripccion*</label>
                                        <textarea class="form-control" name="observaciones" id="observaciones"   type="text" maxlength="100" placeholder="" rows="5"><?php  echo $empresas['ObservacionesGestiones']?> </textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="pass1">Fecha*</label>
                                        <input class="form-control" name="fechaVisita" id="fechaVisita" value="<?php echo $empresas['FechaProgramada']?>" type="date" maxlength="20" placeholder="2010-08-12">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass1">Lugar*</label>
                                        <input class="form-control" name="lugar" id="lugar" value="<?php echo $empresas['LugarGestiones']?>" type="text" maxlength="20">
                                    </div>
                                    <?php if($_SESSION['datosLogin']['NombreRol']=='Coordinador'){?>
                                    <div class="form-group">
                                        <label for="imagen">Estado de visita</label>
                                        <select class="form-control select2" name="estado" type="text"  id="lugar" placeholder="Carrera 15 # 24 10" required>
                                            <option value="PENDIENTE" <?php if($empresas['EstadoGestiones']=='Pendiente'){ echo 'selected'; }  ?> >PENDIENTE</option>
                                            <option value="CANCELADA" <?php if($empresas['EstadoGestiones']=='Cancelada'){ echo 'selected'; }  ?>>CANCELADA</option>
                                            <option value="REALIZADA"<?php if($empresas['EstadoGestiones']=='Realizada'){ echo 'selected'; }  ?>>REALIZADA</option>
                                        </select>
                                    </div>
                                   <?php } ?>
                                    <div class="box-footer">

                                        <input type="button" class="btn btn-warning pull-right" tabindex="15"
                                               onclick="location.href='buscarGestion.php'" value="Cancelar"/>
                                        <button type="submit" class="btn btn-success" tabindex="14"
                                                value="registrar" name="modificar" id="guardar">Guardar Gestión
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

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
         
                locale: 'es_ES',

        fields: {
            cedula: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            meta: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },


        }
    });
});
$(".select2").select2();
$( function () {
    if($('#tipoVisita').val()=='Capacitación'){
        $('#tema').hide();
        $('#producto').show();
    }else{
        $('#producto').hide();
        $('#tema').show();

    }

});
</script>
  <script>

      $('#idCliente').on('change', function () {
          $.post("../controllers/ControladorGestion.php",
              {
                  reload: $('#idCliente').val()
              },
              function (data) {
                  $('#cliente').val(data);
              });

      });
      $('#tipoVisita').on('change',function(){
          if($('#tipoVisita').val()=='Capacitación'){
              $('#tema').hide();
              $('#producto').show();
          }else{
              $('#producto').hide();
              $('#tema').show();

          }
      });
 </script>
</html>
