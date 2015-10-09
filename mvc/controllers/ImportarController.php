<?php
session_start();
require_once '../facades/ImportarFacade.php';
$fachada = new ImportarFacade();
if(isset($_GET['controlar'])) {
    $accion = $_GET['controlar'];
    switch ($accion) {
        case 'importar':
            $file = $_FILES['Archivo']['name'];
            $ext = explode(".",$file);
            $ext2=strtolower(end($ext));
            $pathTemp=$_FILES['Archivo']['tmp_name'];
            $rutaPdf='../../loads/pdf/';
            $rutaImg='../../loads/img/';
            $rutaCsv='../../loads/csv/';
            $rutaOtr='../../loads/otros/';
            if($ext2=='pdf'){
                move_uploaded_file($_FILES['Archivo']['tmp_name'], $rutaPdf.$file);
                $mensaje='Archivo con extensión '.$ext2.' guardado en '.$rutaPdf.$file;
            }elseif($ext2=='jpg'||$ext2=='png'||$ext2=='jpeg'||$ext2=='gif'){
                move_uploaded_file($_FILES['Archivo']['tmp_name'], $rutaImg.$file);
                $mensaje='Archivo con extensión '.$ext2.' guardado en '.$rutaImg.$file;
            }elseif($ext2=='csv'||$ext2=='txt'){
                $mensaje=$fachada->importarDatos($pathTemp,$_POST['Tabla']);
                move_uploaded_file($_FILES['Archivo']['tmp_name'], $rutaCsv.$file);
            }else{
                move_uploaded_file($_FILES['Archivo']['tmp_name'], $rutaOtr.$file);
                $mensaje='Archivo con extensión '.$ext2.' guardado en '.$rutaOtr.$file;
            }
            header("Location: ../views/importarDatos.php?mensaje=" . $mensaje);
            break;
        default:
            echo 'Valor incorrecto enviado por el método get a la variable controlar';
    }
}
