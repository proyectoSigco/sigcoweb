<?php
include_once '../models/ImportarDao.php';
include_once '../utilities/Conexion.php';
class ImportarFacade{
    private $con;
    private $objDao;

    public function __Construct(){
        $this->con=Conexion::getConexion();
        $this->objDao=new ImportarDao();
    }

    public function importarDatos($archivo, $tabla){
        return $this->objDao->importarDatos($archivo, $tabla, $this->con);
    }

    public function listarTablas(){
        return $this->objDao->listarTablas($this->con);
    }

}