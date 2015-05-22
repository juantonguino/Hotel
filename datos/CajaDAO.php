<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'FachadaDB.php';
/**
 * Description of CajaDAO
 *
 * @author MiPc
 */
class CajaDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function __construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIONES
    
    public function seleccionar(){
        $caja;
        $sql= "select caja.valor_pendiente, caja.valor_recaudado from caja";
        $numeroRegistros=$this->fachadaDB->consultaNumeroRegistros($sql);
        echo $numeroRegistros;
        $campos= $this->fachadaDB->consultar($sql);
        while ($numeroRegistros>0){
            $caja=new Caja($campos->valor_recaudado, $campos->valor_pendiente);
            $numeroRegistros--;
        }
        return $caja;
    }
    
    public function actualizar(Caja $caja){
        $sql="call actualizar_caja(".$caja->get_valorPendiente().",".$caja->get_valorRecaudado().")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
}