<?php

class ImportarDao
{

    public function importarDatos($archivo, $tabla, PDO $cnn){
        $mensaje = "";
        try{
            $query=$cnn->prepare("LOAD DATA INFILE ? INTO TABLE ".$tabla." FIELDS TERMINATED BY ';' ESCAPED BY '/'");
            $query->bindParam(1, $archivo);
            $query->execute();
            $mensaje="Datos cargados exitosamente a la tabla '".$tabla."' de la base.&error=false";
        }catch (Exception $ex){
            $mensaje = '&detalleerror='.$ex->getMessage().'&error=true&mensaje=La información NO ha sido registrada en la base de datos.';
        }
        $cnn = null;
        return $mensaje;
    }

    public function listarTablas(PDO $cnn){
        try{
            $query = $cnn->prepare("show tables");
            $query->execute();
            $_SESSION['conteo'] = $query->rowCount();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo '&detalleerror='.$ex->getMessage();
        }
        $cnn=null;
    }


}