<?php
ob_start();
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DB.php';
include_once 'dogadjaj.php';

$db= new DB();

$email=$_SESSION["majstor"];

//var_dump($_POST);
if(isset($_POST["sbmDodajUPlaner"]))
{
$datum=$_POST["datum"];
$naziv=$_POST["naziv"];
$vreme=$_POST["vreme"];
//$dat = strtotime($datum);

$d= new dogadjaj($datum, $email, $vreme, $naziv);

$db->dodajDogadjaj($d);
header("location:profil.php?worker=".$email);

exit();

}
 else 
     if(isset ($_POST["sbmIzmeniDogadjaj"]))
     {
         
     }
     else
         if(isset($_POST["sbmObrisiDogadjaj"]))
         {
            $id=$_POST["hdnDogadjaja"];
            $db->obrisiDogadjaj($id);
            header("location:profil.php?worker=".$email);

exit();

         }

