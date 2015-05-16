<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HabitacionDAO
 *
 * @author MiPc
 */
class HabitacionDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function _construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIOES
    
    public function seleccionar(){
        $habitaciones=array();
        $sql="select habitacion.* from habitacion order by habitacion.numero asc;";
        $campos= $this->fachadaDB->consultar($sql);
        while($campos){
            $habitacion=new Habitacion($campos->estado, $campos->numero, $campos->precio_por_noche, $campos->tipo, $campos->total_valor_consumo);
            array_push($habitaciones, $habitacion);
        }
        return $habitaciones;
    }
    
    public function actualizar(Habitacion $habitacion){
        $sql="call actualizar_habitacion(".$habitacion->get_estado().",".$habitacion->get_numero().",".$habitacion->get_totalValorConsumo().")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
}
