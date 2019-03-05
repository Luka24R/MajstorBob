<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ob_start();
include_once 'DB.php';
include_once 'MySmarty.php';
session_start();
$prijavljen=true;
$db= new DB();
$smarty=new MySmarty();

if(isset($_GET["majstorBrisanje"])){
    
  $email=$_GET["majstorBrisanje"];
  $db->obrisiGradoveMajstora($email);
  $db->obrisiKomentareMajstora($email);
  $db->obrisiZanateMajstora($email);
  $db->obrisiOceneMajstora($email);
  $db->obrisiPrijaveZaPosao($email);
  $db->obrisiSliku($email);
  $db->obrisiPorukeMajstor($email);
  $db->obrisiMajstora($email);
  
  $db->obrisiNezeljeniProfil($email);
  
  if(!isset($_SESSION["admin"]))
      session_unset("majstor");
  
  header("location:index.php");
  
  
  exit();
    
}
else if (isset($_GET["musterijaBrisanje"]))
{
    $email=$_GET["musterijaBrisanje"];
    $db->obrisiPrijaveZaPosaoMusterija($email);
    $db->obrisiPorukeMusterije($email);
    $db->obrisiSliku($email);
    $db->obrisiOglaseMusterija($email);
    $db->obrisiMusteriju($email);
    
    $db->obrisiNezeljeniProfil($email);
    
  if(!isset($_SESSION["admin"]))
      session_unset("majstor");
  
    header("location:index.php");
    
    exit();
}
else
{
    
}