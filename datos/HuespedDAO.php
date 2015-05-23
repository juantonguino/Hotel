<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'FachadaDB.php';
/**
 * Description of HuespedDAO
 *
 * @author MiPc
 */
class HuespedDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function __construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIONES
    
    public function seleccionar($numeroHabitacion){
        $huespedes=array();
        $sql="select huesped.* from huesped where huesped.habitacion_numero=".$numeroHabitacion." order by huesped.nombre asc;";
        $numeroRegistros=$this->fachadaDB->consultaNumeroRegistros($sql);
        $registros= $this->fachadaDB->consultar($sql);
        for($i=0;$i<$numeroRegistros;$i++){
            $huesped= new Huesped($registros[$i]['direccion'], $registros[$i]['documento_identificacion'], $registros[$i]['edad'], $registros[$i]['nombre'], $registros[$i]['numero_noches'], $registros[$i]['telefono'], $registros[$i]['fecha_ingreso']);
            array_push($huespedes, $huesped);
        }
        return $huespedes;
    }
    
    public function agregar($numeroHabitacion, Huesped $huesped){
        $sql="call agregar_huesped('".$huesped->get_direccion()."', ".$huesped->get_documentoIdentificacion().", ".$huesped->get_edad().", '".$huesped->get_nombre()."', ".$huesped->get_numeroNohes().", ".$huesped->get_telefono().", ".$numeroHabitacion.",'".$huesped->get_fechaIngreso()."')";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
    
    public function borrar($numeroHabitacion, Huesped $huesped){
        $sql="call borrar_huesped(".$huesped->get_documentoIdentificacion().",".$numeroHabitacion.")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
}