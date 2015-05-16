<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../mundo/Caja.php';
/**
 * Description of CajaDAO
 *
 * @author MiPc
 */
class CajaDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function _construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIONES
    
    public function seleccionar(){
        $caja;
        $sql= "select caja.valor_pendiente, caja.valor_recaudado from caja";
        //$campos= $this->fachadaDB->consultar($sql);
        $conexion = mysqli_connect("localhost", "root", "admin", "hotel");
        $consulta = $conexion->query($sql);
        while ($campos=$campos= mysqli_fetch_object($consulta)){
            $caja=new Caja($campos->valor_recaudado, $campos->valor_pendiente);
        }
        return $caja;
    }
    
    public function actualizar(Caja $caja){
        $sql="call actualizar_caja(".$caja->get_valorPendiente().",".$caja->get_valorRecaudado().")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
}
