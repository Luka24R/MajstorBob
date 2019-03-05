<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ob_start();
include_once 'MySmarty.php';
include_once 'DB.php';
$db= new DB();

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $db->obrisiOglas($id);
    
    $db->obrisiNezeljeniOglas($id);
    
    header("location:mojiOglasi.php");
    exit();
}
$smarty= new MySmarty();