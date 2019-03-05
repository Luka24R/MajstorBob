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

 $db= new DB();
 
 $idOglasa=$_GET["id"];
 $majstorKojiRadi=$_GET["worker"];
 $musterija=$_SESSION["musterija"];
 $db->dodajMajstoraKojiRadi($majstorKojiRadi, $idOglasa);
 $oglas=$db->vratiOglasPoId($idOglasa);
    $tekst="AUTOMATSKA PORUKA: musterija:".$musterija." Vas je angažovao za posao ". $oglas->vrsta_posla." ". $oglas->tekst_oglasa." ".$oglas->mesto.". ";
    $p= new Poruka($majstorKojiRadi, $musterija, $tekst, date("Y-m-d H:i:s"), "musterija");
    $db->posaljiPoruku($p);
 header("location:actionProfilOglasa.php?hdnId=".$idOglasa);
 exit();
 