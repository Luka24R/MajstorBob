<?php


include_once 'Mysmarty.php';
include_once 'DB.php';
include_once 'Musterija.php';
include_once 'slika.php';

ob_start();

$db= new DB();


if(isset($_POST["submit"]) && isset($_POST["klijentId"]))
{
    var_dump($_POST["submit"]);
    var_dump($_POST["klijentId"]);
    $id = $_POST["klijentId"];
    var_dump($id);
    
    $razlog = $_POST["razlog"];
    var_dump($razlog);
    
    var_dump($db->daLiJeMajstor($id));
    
    $db->novaPrijavaProfila($id, $razlog);
    
    if($db->daLiJeMajstor($id)==true)
        header("location:profil.php?worker=$id");
    else
        header("location:profil.php?client=$id");
    exit();
    ob_end_flush();
}