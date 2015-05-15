<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Huesped
 *
 * @author MiPc
 */
class Huesped {
    
    //ATRIBUTOS
    
    private $_direccion;
    
    private $_documentoIdentificacion;
    
    private $_edad;
    
    private $_nombre;
    
    private $_numeroNohes;
    
    private $_telefono;
    
    //CONTRUCTOR
    
    private function _construct($_direccion, $_documentoIdentificacion, $_edad, $_nombre, $_numeroNohes, $_telefono){
        $this->_direccion=$_direccion;
        $this->_documentoIdentificacion=$_documentoIdentificacion;
        $this->_edad=$_edad;
        $this->_nombre=$_nombre;
        $this->_numeroNohes=$_numeroNohes;
        $this->_telefono=$_telefono;
    }
    
    //GETTERS AND SETTERS
    
    function get_direccion() {
        return $this->_direccion;
    }

    function get_documentoIdentificacion() {
        return $this->_documentoIdentificacion;
    }

    function get_edad() {
        return $this->_edad;
    }

    function get_nombre() {
        return $this->_nombre;
    }

    function get_numeroNohes() {
        return $this->_numeroNohes;
    }

    function get_telefono() {
        return $this->_telefono;
    }

    function set_direccion($_direccion) {
        $this->_direccion = $_direccion;
    }

    function set_documentoIdentificacion($_documentoIdentificacion) {
        $this->_documentoIdentificacion = $_documentoIdentificacion;
    }

    function set_edad($_edad) {
        $this->_edad = $_edad;
    }

    function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    function set_numeroNohes($_numeroNohes) {
        $this->_numeroNohes = $_numeroNohes;
    }

    function set_telefono($_telefono) {
        $this->_telefono = $_telefono;
    }


}
