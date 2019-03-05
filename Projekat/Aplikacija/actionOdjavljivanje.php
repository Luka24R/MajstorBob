<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ob_start();
include_once 'DB.php';
session_start();

$db = new DB();

if(isset($_POST["btnDaOdjava"]))
{
    if(isset($_SESSION["majstor"]))
    {
        $db->offlineMajstor($_SESSION["majstor"]);
        unset($_SESSION["majstor"]);
    }
    if(isset($_SESSION["musterija"]))
        unset ($_SESSION["musterija"]);
    if(isset($_SESSION["admin"]))
        unset ($_SESSION["admin"]);
    header("location:index.php");
    
    exit();
    
    ob_flush();
    /*echo 'Odjavljen';
    var_dump($_SESSION);*/
}

