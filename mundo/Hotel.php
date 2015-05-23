<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    
    private $_instancia;
    
    //CONSTRUCTOR
    
    private function __construct(){
        $this->_caja= new Caja(0, 0);
        $this->_habitaciones=array();
        $this->_cajaDAO= new CajaDAO();
        $this->_habitacionDAO= new HabitacionDAO();
    }
    
    //SINGLETON
    
    public static function get_isntancia(){
        if($this->_instancia==null){
            $this->_instancia=new Hotel();
        }
        return $this->_instancia;
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
}
