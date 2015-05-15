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
}
