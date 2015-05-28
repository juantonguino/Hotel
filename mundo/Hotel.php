<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Caja.php';
include_once 'datos/HabitacionDAO.php';
include_once 'datos/CajaDAO.php';
include_once 'Habitacion.php';
/**
 * Description of Hotel
 *
 * @author MiPc
 */
class Hotel {
    
    //ATRIBUTOS
    
    private $_caja;
    
    private $_habitaciones;
    
    private $_cajaDAO;
    
    private $_habitacionDAO;
    
    private static $_instancia;
    
    //CONSTRUCTOR
    
    private function __construct(){
        $this->_caja= new Caja(0, 0);
        $this->_habitaciones=array();
        $this->_cajaDAO= new CajaDAO();
        $this->_habitacionDAO= new HabitacionDAO();
        $this->cargarInformacion();
    }
    
    //CARGA DE DATOS
    
    private function cargarInformacion(){
        $this->_caja=$this->_cajaDAO->seleccionar();
        $this->_habitaciones=$this->_habitacionDAO->seleccionar();
        $numeroHabitaciones=  sizeof($this->_habitaciones);
        for($i=0;$i<$numeroHabitaciones;$i++){
            $miHabitacion= $this->_habitaciones[$i];
            $miHabitacion->set_huespedes($miHabitacion->get_huespedDAO()->seleccionar($miHabitacion->get_numero()));
            $miHabitacion->set_consumos($miHabitacion->get_consumoDAO()->seleccionar($miHabitacion->get_numero()));
            $miHabitacion->set_reservas($miHabitacion->get_reservaDAO()->seleccionar($miHabitacion->get_numero()));
        }
    }

    //SINGLETON
    
    public static function get_isntancia(){
        if(!isset(self::$_instancia)){
            self::$_instancia= new Hotel();
        }
        return self::$_instancia;
    }


    //GETTERS AND SETTERS
    
    function get_caja() {
        return $this->_caja;
    }

    function get_habitaciones() {
        return $this->_habitaciones;
    }

    function get_cajaDAO() {
        return $this->_cajaDAO;
    }

    function get_habitacionDAO() {
        return $this->_habitacionDAO;
    }

    function set_caja($_caja) {
        $this->_caja = $_caja;
    }

    function set_habitaciones($_habitaciones) {
        $this->_habitaciones = $_habitaciones;
    }

    function set_cajaDAO($_cajaDAO) {
        $this->_cajaDAO = $_cajaDAO;
    }

    function set_habitacionDAO($_habitacionDAO) {
        $this->_habitacionDAO = $_habitacionDAO;
    }
    
    //REQUERIMIENTOS
    
    public function agregarReserva($numeroHabitacion, $reserva){
        $habitacion= $this->buscarHabitacionPorNumero($numeroHabitacion);
        $reservas=$habitacion.get_reservas();
        array_push($reservas, $reserva);
        $habitacion->get_reservaDAO()->agregar($numeroHabitacion, $reserva);
    }
    
    public function eliminarReserva($numeroHabitacion, $reserva){
        
    }
    
    public function agregarHuesped($numeroHabitacion, Huesped $huesped){
        $buscada=  $this->buscarHabitacionPorNumero($numeroHabitacion);
        if($buscada!=null){
            $listaHuespedes=$buscada->get_huespedes();
            if(sizeof($listaHuespedes)==0){
                $buscada->set_estado("Ocupada");
                $ingresar= $buscada->get_precioPorNoche()+$buscada->get_totalValorConsumo();
                $buscada->set_totalValorConsumo($ingresar);
                $this->_caja->set_valorPendiente($this->_caja->get_valorPendiente()+$buscada->get_precioPorNoche());
            }
            array_push($listaHuespedes, $huesped);
            $this->_habitacionDAO->actualizar($buscada);
            $buscada->get_huespedDAO()->agregar($buscada->get_numero(), $huesped);
            $this->_cajaDAO->actualizar($this->_caja);
        }		
    }
    
    public function buscarHabitacionPorNumero($numero){
        $retorno=null;
        $numeroH= sizeof($this->_habitaciones);
        for($i=0;$i<$$numeroH;$i++){
            $temporal=  $this->_habitaciones[$i];
            if($temporal->get_numero()==$numero){
                $retorno= $temporal;
            }
        }
        return $retorno;
    }
    
    public function realizarCheckOut($numero){
        $buscada=  $this->buscarHabitacionPorNumero($numero);
        if($buscada!=null){
            $this->_caja->set_valorRecaudado($buscada->get_totalValorConsumo()+$this->_caja->get_valorRecaudado());
            $this->_caja->set_valorPendiente( $this->_caja->get_valorPendiente()-$buscada->get_totalValorConsumo());
            $buscada->set_totalValorConsumo(0);
            $buscada->set_estado("Desocupada");
            
            $this->_cajaDAO->actualizar($this->_caja);
            $this->_habitacionDAO->actualizar($buscada);
            
            $listaHuespedes= $buscada->get_huespedes();
            for($i=0;$i<sizeof($listaHuespedes);$i++){
                $huesped=$listaHuespedes[$i];
                $buscada->get_huespedDAO()->borrar($buscada->get_numero(), $huesped);
            }
            
            $listaConsumos= $buscada->get_consumos();
            for($i=0;$i<sizeof($listaConsumos);$i++){
                $consumo=$listaConsumos[$i];
                $buscada->get_consumoDAO()->borrar($buscada->get_numero(), $consumo);
            }
            
            $buscada->set_consumos(array());
            $buscada->set_huespedes(array());
        }
    }
    
    public function agregarConsumo($numeroHabitacion, $consumo){
        
    }
    
    public function buscarReserva($nombre){
        
    }
    
    public function eliminarHesped($numeroHabitacion, $idententificacion){
        
    }
    
    public function buscarHuesped($nombre){
        
    }
    
    public function bucarHabitacionPorDisponibilidad($fecha){
        
    }
    
    public function buscarHabitacionPorTipo($tipo){
        
    }
}