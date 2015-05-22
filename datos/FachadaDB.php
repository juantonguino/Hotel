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
    
    public function __construct(){
        $this->_server= self::SERVER;
        $this->_user =self::USER;
        $this->_password= self::PASSWORD;
        $this->_database= self::DATABASE;
    }
    
    //CONEXION
    
    public function conectarDB(){
        $conexion = new mysqli($this->_server, $this->_user, $this->_password, $this->_database);
        return $conexion;
    }
    public function desconectarDB(mysqli $conexion){
        mysqli_close($conexion);
    }
    
    //OPERACIONES
    
    public function consultaNumeroRegistros($sql){
        $conexion=  $this->conectarDB();
        $consulta = mysqli_query($conexion, $sql);
        $numeroRegistros= mysqli_num_rows($consulta);
        return $numeroRegistros;
    }
    
    public function consultar($sql){
        $conexion= $this->conectarDB();
        $consulta = $conexion->query($sql);
        $registros=array();
        while ($registros[]=$consulta->fetch_assoc());
        return $registros;
    }
    
    public function agregarModificarEliminar($sql){
        $conexion=  $this->conectarDB();
        $consulta = mysqli_query($conexion, $sql);
    }
}