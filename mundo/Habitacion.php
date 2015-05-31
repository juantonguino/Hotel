<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../datos/ConsumoDAO.php';
include_once '../datos/ReservaDAO.php';
include_once '../datos/HuespedDAO.php';
/**
 * Description of Habitacion
 *
 * @author MiPc
 */
class Habitacion {
    
    //constantes
    
    const TIPO_SENCILLA="sencilla";
    
    const TIPO_DOBLE="doble";
    
    const TIPO_TRIPLE="triple";
    
    const ESTADO_OCUPADA="Ocupada";
    
    const ESTADO_DISPONIBLE="Disponible";

    //ATRIBUTOS
    
    private $_estado;
    
    private $_numero;
    
    private $_precioPorNoche;
    
    private $_tipo;
    
    private $_totalValorConsumo;
    
    private $_consumos;
    
    private $_reservas;
    
    private $_huespedes;
    
    private $_consumoDAO;
    
    private $_reservaDAO;
    
    private $_huespedDAO;

    //CONSTRUCTOR
    
    public function __construct($_estado, $_numero, $_precioPorNoche, $_tipo, $_totalValorConsumo){
        $this->_estado=$_estado;
        $this->_numero=$_numero;
        $this->_precioPorNoche=$_precioPorNoche;
        $this->_tipo=$_tipo;
        $this->_totalValorConsumo=$_totalValorConsumo;
        $this->_consumos=array();
        $this->_reservas=array();
        $this->_huespedes=array();
        $this->_consumoDAO= new ConsumoDAO();
        $this->_reservaDAO= new ReservaDAO();
        $this->_huespedDAO= new HuespedDAO();
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
    
    function get_consumos() {
        return $this->_consumos;
    }

    function get_reservas() {
        return $this->_reservas;
    }

    function get_huespedes() {
        return $this->_huespedes;
    }

    function set_consumos($_consumos) {
        $this->_consumos = $_consumos;
    }

    function set_reservas($_reservas) {
        $this->_reservas = $_reservas;
    }

    function set_huespedes($_huespedes) {
        $this->_huespedes = $_huespedes;
    }
    
    function get_consumoDAO() {
        return $this->_consumoDAO;
    }

    function get_reservaDAO() {
        return $this->_reservaDAO;
    }

    function get_huespedDAO() {
        return $this->_huespedDAO;
    }

    function set_consumoDAO($_consumoDAO) {
        $this->_consumoDAO = $_consumoDAO;
    }

    function set_reservaDAO($_reservaDAO) {
        $this->_reservaDAO = $_reservaDAO;
    }

    function set_huespedDAO($_huespedDAO) {
        $this->_huespedDAO = $_huespedDAO;
    }
}