<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reserva
 *
 * @author MiPc
 */
class Reserva {
    
    //ATRIBUTOS
    
    private $_fecahaEstadia;
    
    private $_nombre;
    
    private $_numeroIdentificacion;
    
    private $_numeroDias;
    
    //CONSTRUCTOR
    
    public function _construct($_fecahaEstadia, $_nombre, $_numeroIdentificacion, $_numeroDias){
        $this->_fechaEstadia=$_fecahaEstadia;
        $this->_nombre=$_nombre;
        $this->_numeroIdentificacion=$_numeroIdentificacion;
        $this->_numeroDias=$_numeroDias;
    }
    
    //GETTERS AND SETTERS
    
    function get_fecahaEstadia() {
        return $this->_fecahaEstadia;
    }

    function get_nombre() {
        return $this->_nombre;
    }

    function get_numeroIdentificacion() {
        return $this->_numeroIdentificacion;
    }

    function get_numeroDias() {
        return $this->_numeroDias;
    }

    function set_fecahaEstadia($_fecahaEstadia) {
        $this->_fecahaEstadia = $_fecahaEstadia;
    }

    function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    function set_numeroIdentificacion($_numeroIdentificacion) {
        $this->_numeroIdentificacion = $_numeroIdentificacion;
    }

    function set_numeroDias($_numeroDias) {
        $this->_numeroDias = $_numeroDias;
    }
}
