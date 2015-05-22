<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caja
 *
 * @author MiPc
 */
class Caja {
    
    //ATRIBUTOS
    
    private $_valorRecaudado;
    
    private $_valorPendiente;
    
    //CONSTRUCTOR;
    
    public function __construct($_valorRecaudado, $_valorPendiente) {
        $this->_valorRecaudado=$_valorRecaudado;
        $this->_valorPendiente=$_valorPendiente;
    }
    
    //GETTERS AND SETTERS
    
    function get_valorRecaudado() {
        return $this->_valorRecaudado;
    }

    function get_valorPendiente() {
        return $this->_valorPendiente;
    }

    function set_valorRecaudado($_valorRecaudado) {
        $this->_valorRecaudado = $_valorRecaudado;
    }

    function set_valorPendiente($_valorPendiente) {
        $this->_valorPendiente = $_valorPendiente;
    }
}