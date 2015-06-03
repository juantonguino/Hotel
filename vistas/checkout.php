<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../mundo/Hotel.php';
//$mundo=new Hotel();
$numero= $_GET['numero'];
$mundo= Hotel::get_isntancia();
$mundo->realizarCheckOut($numero);
header("Location:login.php");