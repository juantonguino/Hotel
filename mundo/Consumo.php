<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Consumo
 *
 * @author MiPc
 */
class Consumo {
    
    //ATRIBUTOS
    
    private $_fecha;
    
    private $_producto;
    
    private $_valor;
    
    //CONSTRUCTORES
    
    public function _construct($_fecha, $_producto, $_valor){
        $this->_fecha=$_fecha;
        $this->_producto=$_producto;
        $this->_valor=$_valor;
    }
    
    //GETTERS AND SETTERS
    
    function get_fecha() {
        return $this->_fecha;
    }

    function get_producto() {
        return $this->_producto;
    }

    function get_valor() {
        return $this->_valor;
    }

    function set_fecha($_fecha) {
        $this->_fecha = $_fecha;
    }

    function set_producto($_producto) {
        $this->_producto = $_producto;
    }

    function set_valor($_valor) {
        $this->_valor = $_valor;
    }
}
