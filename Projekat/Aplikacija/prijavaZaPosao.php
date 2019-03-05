<?php
ob_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DB.php';
include_once 'Poruka.php';
session_start();
$db=new DB();

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $majstor=$_SESSION["majstor"];
    $oglas= $db->vratiOglasPoId($id);
    $db->prijaviMajstoraZaPosao($majstor, $id, $oglas);
    $oglas=$db->vratiOglasPoId($id);
    $tekst="AUTOMATSKA PORUKA: majstor:".$majstor." je prijavljen za oglas ". $oglas->vrsta_posla." ". $oglas->tekst_oglasa." ".$oglas->mesto.". ";
    $p= new Poruka($majstor, $oglas->vlasnik, $tekst, date("Y-m-d H:i:s"), "majstor");
    $db->posaljiPoruku($p);
    header("location:actionProfilOglasa.php?hdnId=".$id);
    exit();
}
if (isset($_GET["otkaziPrijavu"]))
{
    $id=$_GET["otkaziPrijavu"];
    $db->otkaziPrijavuMajstora($_SESSION["majstor"], $id);
    header("location:actionProfilOglasa.php?hdnId=".$id);
    
    exit();
}