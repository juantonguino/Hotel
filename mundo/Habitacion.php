<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Habitacion
 *
 * @author MiPc
 */
class Habitacion {
    
    //ATRIBUTOS
    
    private $_estado;
    
    private $_numero;
    
    private $_precioPorNoche;
    
    private $_tipo;
    
    private $_totalValorConsumo;
    
    //CONSTRUCTOR
    
    public function _construct($_estado, $_numero, $_precioPorNoche, $_tipo, $_totalValorConsumo){
        $this->_estado=$_estado;
        $this->_numero=$_numero;
        $this->_precioPorNoche=$_precioPorNoche;
        $this->_tipo=$_tipo;
        $this->_totalValorConsumo=$_totalValorConsumo;
    }
    
    //GETTERS AND SETTERS
    
    function get_estado() {
        return $this->_estado;
    }

    function get_numero() {
        return $this->_numero;
    }

    function get_precioPorNoche() {
        return $this->_precioPorNoche;
    }

    function get_tipo() {
        return $this->_tipo;
    }

    function get_totalValorConsumo() {
        return $this->_totalValorConsumo;
    }

    function set_estado($_estado) {
        $this->_estado = $_estado;
    }

    function set_numero($_numero) {
        $this->_numero = $_numero;
    }

    function set_precioPorNoche($_precioPorNoche) {
        $this->_precioPorNoche = $_precioPorNoche;
    }

    function set_tipo($_tipo) {
        $this->_tipo = $_tipo;
    }

    function set_totalValorConsumo($_totalValorConsumo) {
        $this->_totalValorConsumo = $_totalValorConsumo;
    }
}
