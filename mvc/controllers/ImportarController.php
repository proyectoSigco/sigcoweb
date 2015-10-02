<?php
session_start();
require_once '../facades/ImportarFacade.php';
$fachada = new ImportarFacade();
if(isset($_GET['controlar'])) {
    $accion = $_GET['controlar'];
    switch ($accion) {
        case 'importar':
            $completo=$_FILES['Archivo'];
            $archivo=$_FILES['Archivo']['tmp_name'];
            $mensaje=$fachada->importarDatos($archivo,$_POST['Tabla']);
            header("Location: ../views/importarDatos.php?mensaje=" . $mensaje);
            break;
        default:
            echo 'Valor incorrecto enviado por el método get a la variable controlar';
    }
}
