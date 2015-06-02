<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'FachadaDB.php';
include_once '../mundo/Habitacion.php';
/**
 * Description of HabitacionDAO
 *
 * @author MiPc
 */
class HabitacionDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function __construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIOES
    
    public function seleccionar(){
        $habitaciones=array();
        $sql="select habitacion.* from habitacion order by habitacion.numero asc;";
        $numeroRegistros=$this->fachadaDB->consultaNumeroRegistros($sql);
        $registros= $this->fachadaDB->consultar($sql);
        for($i=0;$i<$numeroRegistros;$i++){
            $habitacion=new Habitacion($registros[$i]['estado'], $registros[$i]['numero'], $registros[$i]['precio_por_noche'], $registros[$i]['tipo'], $registros[$i]['total_valor_consumo']);
            array_push($habitaciones, $habitacion);
        }
        return $habitaciones;
    }
    
    public function seleccionarHabitacionesDisponibles($fecha){
        $habitacionesNumero= array();
        $sql="SELECT habitacion.* FROM habitacion, reserva WHERE '".$fecha."'<reserva.fecha_estadia and '".$fecha."'>DATE_ADD(reserva.fecha_estadia, INTERVAL reserva.numero_dias DAY) and reserva.habitacion_numero=habitacion.numero;";
        $numeroRegistros=$this->fachadaDB->consultaNumeroRegistros($sql);
        $registros= $this->fachadaDB->consultar($sql);
        for($i=0;$i<$numeroRegistros;$i++){
            $numero=$registros[$i]['numero'];
            array_push($habitacionesNumero, $numero);
        }
        return $habitacionesNumero;
    }


    public function actualizar(Habitacion $habitacion){
        $sql="call actualizar_habitacion('".$habitacion->get_estado()."',".$habitacion->get_numero().",".$habitacion->get_totalValorConsumo().")";
        $this->fachadaDB->agregarModificarEliminar($sql);
    }
}
