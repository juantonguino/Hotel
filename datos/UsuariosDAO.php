<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuariosDAO
 *
 * @author MiPc
 */
class UsuariosDAO {
    
    //ATRIBUTOS
    
    private $fachadaDB;
    
    //CONSTRUCTOR
    
    public function __construct(){
        $this->fachadaDB=new FachadaDB();
    }
    
    //OPERACIONES
    
    public function verificarUsuarioRegistrado(){
        $sql="SELECT * FROM hotel.usuario where ";
    }
}
