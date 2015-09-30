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
    <title>Buscar gestión</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
      <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

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

    <!-- FORMVALIDATION -->
    <script type="text/javascript" src="../../plugins/jQuery/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/formValidation.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/framework/bootstrap.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/language/es_ES.js"></script>



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
                    require'../facades/FacadeProducto.php';
                    $facade=new FacadeEmpleado();
                    $facadeProducto=new Facade();
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
                    Gestiones
                    <small>Buscar</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                    <li>Gestión</li>
                    <li class="active">Buscar</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <!-- right column -->
                    <div class="col-md-10">


                        <?php
                        if (isset($_GET['mensaje'])) {
                            ?>
                            <div class="alert
                      <?php if ($_GET['error'] == 1) {
                                echo 'alert-error';
                            } else {
                                echo 'alert-success';
                            } ?>
                      alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i>Resultado del proceso:</h4>
                                <?php echo $mensaje = $_GET['mensaje'] ?>
                            </div>

                            <?php
                            if (isset($_GET['detalleerror']) && $_GET['error'] == 1) {
                                ?>

                                <div class="box box-danger box-solid collapsed-box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Ver detalle del error</h3>

                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                            </button>
                                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <p>
                                            <?php echo $mensaje = $_GET['detalleerror'] ?>
                                        </p>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        Contacte al administrador para corregir el inconveniente: admin@sigco.com
                                    </div>
                                </div><!-- /.box -->
                                <?php
                            }
                        }
                        ?>

                        <!-- general form elements disabled -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Buscar gestiones</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <p>
                                    Use las siguientes opciones para realizar la búsqueda de una Gestión.
                                    Recuerde que en este formulario hay campos obligatorios(*).<br><br>
                                </p>

                            </div>
                        </div>

                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog" >
                                <div class="modal-content" style="border-radius: 5px;">
                                    <div class="modal-header"   style="background-color: #3c8dbc;border-radius: 5px 5px 0px 0px;color:#FFF;text-align: center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Detalle de Gestión</h4>
                                    </div>
                                    <div class="modal-body" class="pull-left col-md-8">
                                        <dl class="dl-horizontal">
                                            <dt>Nit Cliente</dt>
                                            <dd id="Cliente">A description list is perfect for defining terms.</dd>
                                            <dt>Actividad</dt>
                                            <dd id="actividad">A description list is perfect for defining terms.</dd>
                                            <dt>Tema</dt>
                                            <dd id="tema">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                            <dt >Asistentes</dt>
                                            <dd id="asistentes">Etiam porta sem malesuada magna mollis euismod.</dd>
                                            <dt>Obsevaciones</dt>
                                            <dd id="observaciones">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                            <dt>Lugar</dt>
                                            <dd id="lugar"></dd>
                                            <dt>Fecha</dt>
                                            <dd id="fecha"></dd>
                                            <dt>Modificado por:</dt>
                                            <dd id="modificacion"></dd>
                                        </dl>
                                        <!--<p><input type="text" class="input-sm" id="txtfname"/></p>
                                        <p><input type="text" class="input-sm" id="txtlname"/></p>-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->


                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Opciones de búsqueda</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">


                                <form role="form" action="../controllers/ControladorGestion.php?buscar=true" method="post">

                                    <div class="form-group">
                                        <label for="criterio">Seleccione un criterio de búsqueda*</label>
                                        <select class="form-control select2" name="criterio" id="criterio" required tabindex="1" autofocus>
                                            <option value="Gestiones.LugarGestiones" selected>Lugar Gestión</option>
                                            <option value="Gestiones.FechaProgramada" >Fecha</option>
                                            <option value="Gestiones.IdGestion" >código Gestión</option>
                                        </select>
                                    </div>

                                    <label for="comobuscar" class="margin">¿Qué desea encontrar?*</label>
                                    <div class="input-group input-group-sm margin">
                                        <div class="input-group-btn">
                                            <select name="comobuscar" id="comobuscar" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="2">
                                                <option selected value="1">Una búsqueda exacta de</option>
                                                <option value="2">Cualquier coincidencia de</option>
                                            </select>
                                        </div><!-- /btn-group -->
                                        <input type="text" name="busqueda" class="form-control" placeholder="Número Nit | Razón Social | Lugar" required tabindex="3">
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="submit" tabindex="4">Buscar Gestión</button>
                    </span>
                                    </div><!-- /input-group -->

                                </form>

                            </div>
                        </div>

                        <?php
                        if(isset($_GET['encontrados'])&&$_GET['encontrados']=='false') {
                            ?>


                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-exclamation-triangle"></i> Consulta sin coincidencias</h4>

                                <p>No se han encontrado resultados para la consulta de:</p>
                                <p>Criterio: <?php echo $_GET['criterio'] ?></p>
                                <p>Búsqueda: <?php echo $_GET['busqueda'] ?></p>
                            </div>


                            <?php
                        }
                        ?>


                        <?php

                        if(isset($_GET['encontrados'])&&isset($_SESSION['consulta'])) {

                            if ($_GET['encontrados'] == 'true') {
                                ?>

                                <div class="box box-default box-solid collapsed-box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Herramientas de la consulta</h3>

                                        <div class="box-tools pull-right">
                                            <button class="btn btn-default btn-sm" data-widget="collapse"
                                                    data-toggle="tooltip" title="Ampliar información"
                                                    data-original-title="Collapse"><i class="fa fa-plus"></i>
                                            </button>
                                            <button class="btn btn-default btn-sm" data-widget="remove"
                                                    data-toggle="tooltip" title="Quitar información"
                                                    data-original-title="remove"><i class="fa fa-remove"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <dl class="dl-horizontal">
                                            <dt><span class="label label-success">Realizada</span>
                                                <span class="label label-warning">Pendiente</span>

                                            </dt>
                                            <dt><span class="label label-danger">Cancelada</span></dt>
                                            <dd>Cambia el estado de una visita.</dd>
                                            <dt><i class="fa fa-search-plus"></i> </dt>
                                            <dd>Muestra la información detallada de un visita.</dd>
                                            <dt><i class="fa fa-edit"></i></dt>
                                            <dd>Permite editar la información de una visita.</dd>
                                            <dt><span class="label label-default">  <i class="fa fa-file-excel-o"></i>
                                  Exportar consulta completa</span></dt>
                                            <dd>Guardar la consulta con toda la información en formato XLS.</dd>
                                        </dl>
                                    </div>
                                    <!-- /.box-body -->
                                </div><!-- /.box -->

                                <div class="box box-warning">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Resultados de la búsqueda</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <p>
                                            Se han encontrado <span class="badge label-info"><?php echo $_SESSION['conteo']; ?></span>
                                            registros para esta consulta.
                                        </p>
                                        <br>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Actividad</th>
                                                <th>Tema Relacionado</th>
                                                <th>Lugar</th>
                                                <th>Estado</th>
                                                <th>Fecha</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $consulta = $_SESSION['consulta'];
                                            $_SESSION['GestionExportar'] = $consulta;
                                            foreach ($consulta as $respuesta){
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $respuesta['TipoGestiones']; ?>
                                                </td>
                                                <td>
                                                    <?php if(is_numeric( $respuesta['Asunto'])){
                                                        $procut=$facadeProducto->obtenerProducto($respuesta['Asunto']);
                                                        echo $procut['NombreProducto'];
                                                    }
                                                    else{
                                                        echo $respuesta['Asunto'];
                                                    }?>
                                                </td>
                                                <td>
                                                    <?php echo $respuesta['LugarGestiones']; ?>
                                                </td>
                                                <td>
                                                    <span class="label  label-mini "><?php echo $respuesta['EstadoGestiones']; ?></span>
                                                </td>
                                                <td>
                                                    <?php echo $respuesta['FechaProgramada']; ?>
                                                </td>

                                                <td>
                                                    <button data-toggle="tooltip" title="Ver Detalle" class="btn btn-primary btn-xs fa fa-search-plus click" value="<?php echo $respuesta['IdGestion'];?>">

                                                    </button>
                                                    <a data-toggle="tooltip" title="Editar información" href="ModificarGestion.php?id=<?php echo $respuesta['IdGestion'];?>" <?php if(!$_SESSION['datosLogin']['NombreRol']=='Coordinador' or (!$_SESSION['datosLogin']['NombreRol']=='Asesor')){ echo 'hidden=';} ?> >
                                                        <i class="fa fa-fw fa-edit" ></i>
                                                    </a>
                                                </td>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Actividad</th>
                                                <th>Tema Relacionado</th>
                                                <th>Lugar</th>
                                                <th>Estado</th>
                                                <th>Fecha</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="box-footer">
                                        <form role="form" action="../utilities/exportarGestion.php?busqueda=<?php
                                        if(isset($_GET['busqueda'])){echo $_GET['busqueda'];}else{echo'todos';} ?>" method="post">
                                            <button type="submit" class="btn btn-default pull-right" tabindex="14"
                                                    value="exportar" name="exportar" id="todos"><i class="fa fa-file-excel-o"></i>  Exportar consulta completa
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        if (!isset($_GET['todos'])){ ?>
                            <!-- general form elements disabled -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Todos los registros</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <p>
                                        Si desea, puede ver todos los registros usando el botón "Ver todos"
                                        (esta opción puede tardar un poco).
                                    </p>
                                </div>
                                <div class="box-footer">
                                    <form action="../controllers/ControladorGestion.php?listar=todos" method="post">
                                        <button type="submit" class="btn btn-success pull-right" tabindex="14"
                                            > <i class="fa fa-plus-square-o"> </i>   Ver todos
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        ?>


                    </div><!--/.col (right) -->
                </div>   <!-- /.row -->




            </section><!-- /.content -->
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
    <script src="../../plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
  <script type="text/javascript">
      $(document).ready(function() {

          $('.click').click( function () {
              $.post("../controllers/ControladorGestion.php",

                  {
                      detail: $(this).attr("value")
                  },
                  function (data) {
                      var json = $.parseJSON(data);
                      $('#actividad').text(json.TipoGestiones);
                      $('#tema').text(json.Asunto);
                      $('#asistentes').text(json.Asistentes);
                      $('#observaciones').text(json.ObservacionesGestiones);
                      $('#lugar').text(json.LugarGestiones);
                      $('#fecha').text(json.FechaProgramada);
                      $('#modificacion').text(json.CedulaEmpleadoGestiones);
                      $('#Cliente').text(json.NitClienteGestiones);
                      $("#myModal").modal("show");

                  });
          });

          $('#defaultForm').formValidation({
              message: 'This value is not valid',
              icon: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },

              locale: 'es_ES',

              fields: {
                  documento: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es requerido'
                          },
                          integer: {
                              message: 'Solo se permite el ingreso de números'
                          }
                      }
                  },
                  celular: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es requerido'
                          },
                          integer: {
                              message: 'Solo se permite el ingreso de números'
                          }
                      }
                  },
                  nombres: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es requerido'
                          },
                          regexp: {
                              regexp: /^[a-z\sñÑ]+$/i,
                              message: 'Solo se permiten letras'
                          },
                          stringLength: {
                              min: 3,
                              max: 30,
                              message: 'Este campo debe tener mínimo 3 caracteres y máximo 30'
                          }
                      }
                  },
                  apellidos: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es requerido'
                          },
                          regexp: {
                              regexp: /^[a-z\sñÑ]+$/i,
                              message: 'Solo se permiten letras'
                          },
                          stringLength: {
                              min: 3,
                              max: 30,
                              message: 'Este campo debe tener mínimo 3 caracteres y máximo 30'
                          }
                      }
                  },

                  cargo:{
                      validators:{
                          notEmpty:{
                              message: 'Este campo es requerido'
                          }

                      }


                  },


                  email: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es requerido'
                          },
                          emailAddress: {
                              message: 'Ingrese un correo electrónico válido'
                          }
                      }
                  },
                  pass1:{
                      validators:{
                          notEmpty: {
                              message: 'Este campo es requerido'
                          }

                      }

                  },

                  pass2:{
                      validators:{
                          notEmpty: {
                              message: 'Este campo es requerido'
                          },
                          identical: {
                              field: 'pass1',
                              message: 'La contraseña debe ser identica a la anterior'
                          }

                      }

                  },

                  captcha: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es requerido'
                          },
                          integer:{
                              message: 'Solo se permiten números'
                          },
                          callback: {
                              message: 'Respuesta inválida',
                              callback: function(value, validator, $field) {
                                  var items = $('#captchaOperation').html().split(' '),
                                      sum   = parseInt(items[0]) + parseInt(items[2]);
                                  return value == sum;
                              }
                          }
                      }
                  }
              }
          });
      });
      $(document).ready(function() {

          $('span:contains("Pendiente")').addClass('label-warning');
          $('span:contains("Realizada")').addClass('label-success');
          $('span:contains("Cancelada")').addClass('label-danger');
      });

  </script>
  <script type="text/javascript">
      $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false
          });
      });
  </script>
</html>
