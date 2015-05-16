<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HuespedDAO
 *
 * @author MiPc
 */
class HuespedDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function _construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIONES
    
    public function seleccionar($numeroHabitacion){
        $huespedes=array();
        $sql="select huesped.* from huesped where huesped.habitacion_numero=".$numeroHabitacion." order by huesped.nombre asc;";
        $campos= $this->fachadaDB->consultar($sql);
        while($campos){
            $huesped= new Huesped($campos->direccion, $campos->documento_identificacion, $campos->edad, $campos->nombre, $campos->numero_noches, $campos->telefono, $campos->fecha_ingreso);
            array_push($huespedes, $huesped);
        }
        return $huespedes;
    }
    
    public function agregar($numeroHabitacion, Huesped $huesped){
        $sql="call agregar_huesped('".$huesped->get_direccion()."', ".$huesped->get_documentoIdentificacion().", ".$huesped->get_edad().", '".$huesped->get_nombre()."', ".$huesped->get_numeroNohes().", ".$huesped->get_telefono().", ".$numeroHabitacion.",".$huesped->get_fechaIngreso().")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
    
    public function borrar($numeroHabitacion, Huesped $huesped){
        $sql="call borrar_huesped(".$huesped->get_documentoIdentificacion().",".$numeroHabitacion.")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
}