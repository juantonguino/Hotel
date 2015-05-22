<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FachadaDB
 *
 * @author MiPc
 */
class FachadaDB {
    
    //CONSTANTES
    
    const SERVER="localhost";
    
    const USER="root";
    
    const PASSWORD="admin";
    
    const DATABASE="hotel";

    //ATRIBUTOS
    
    private $_server;
    
    private $_user;
    
    private $_password;
    
    private $_database;
    
    //CONSTRUCTOR
    
    public function _construct(){
        $this->_server= SERVER;
        $this->_user =USER;
        $this->_password=PASSWORD;
        $this->_database=DATABASE;
    }
    
    //CONEXION
    
    public function conectarDB(){
        $conexion = mysqli_connect($this->_server, $this->_user, $this->_password, $this->_database);
        return $conexion;
    }
    public function desconectarDB(mysqli $conexion){
        mysqli_close($conexion);
    }
    
    //OPERACIONES
    
    public function consultar(String $sql){
        //$conexion= $this->conectarDB();
        //$consulta = $conexion->query($sql);
        //$campos= mysqli_fetch_object($consulta);
        //$this->desconectarDB($conexion);
        //return $campos;
        $conexion=  $this->conectarDB();
        $resultados=$conexion->query($sql);
        return $resultados->fe;
    }
    
    public function agregarModificarEliminar($sql){
        //$conexion=  $this->conectarDB();
        //$consulta = mysqli_query($conexion, $sql);
    }
}