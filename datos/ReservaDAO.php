<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../mundo/Reserva.php';

/**
 * Description of ReservaDAO
 *
 * @author MiPc
 */
class ReservaDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function _construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIONES
    
    public function seleccionar($numeroHabitacion){
        $reservas=array();
        $sql= "select reserva.* from reserva where reserva.habitacion_numero= ".$numeroHabitacion." order by reserva.fecha_estadia desc";
        $campos= $this->fachadaDB->consultar($sql);
        while ($campos){
            $reserva=  new Reserva($campos->fecha_estadia, $campos->nombre, $campos->numero_identificacion, $campos->numero_dias);
            array_push($reservas, $reserva);
        }
        return $reservas;
    }
    
    public function agregar($numeroHabitacion, Reserva $reserva){
        $sql="call agregar_reserva('".$reserva->get_fecahaEstadia()."', '".$reserva->get_nombre()."', ".$reserva->get_numeroIdentificacion().", ".$reserva->get_numeroDias().", ".$numeroHabitacion.")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
    
    public function borrar($numeroHabitacion, Reserva $reserva){
        $sql="call borrar_reserva('".$reserva->get_fecahaEstadia()."', '".$reserva->get_nombre()."', ".$reserva->get_numeroIdentificacion().", ".$reserva->get_numeroDias().", ".$numeroHabitacion.")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
}
