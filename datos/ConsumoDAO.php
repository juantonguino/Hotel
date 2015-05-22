<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsumoDAO
 *
 * @author MiPc
 */
class ConsumoDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function __construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIONES
    
    public function seleccionar($numeroHabitacion){
        $cosumos= array();
        $sql="select consumo.fecha, consumo.habitacion_numero, consumo.producto, consumo.valor from consumo, habitacion where habitacion.numero=".$numeroHabitacion." and consumo.habitacion_numero= habitacion.numero order by consumo.fecha desc";
        $numeroRegistros=$this->fachadaDB->consultaNumeroRegistros($sql);
        $campos= $this->fachadaDB->consultar($sql);
        while ($numeroRegistros>0){
            $consumo= new Consumo($campos->fecha, $campos->producto, $campos->valor);
            array_push($cosumos, $consumo);
            $numeroRegistros--;
        }
        return $cosumos;
    }
    
    public function agregar($numeroHabitacion,  Consumo $consumo){
        $sql="call agregar_consumo(".$consumo->get_fecha().",'".$consumo->get_producto()."',".$consumo->get_valor().",".$numeroHabitacion.")";;
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
    
    public function borrar($numeroHabitacion, Consumo $consumo){
        $sql="call borrar_consumo(".$consumo->get_fecha().",'".$consumo->get_producto()."',".$consumo->get_valor().",".$numeroHabitacion.")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
}