<?php


include_once 'Mysmarty.php';
include_once 'DB.php';
include_once 'Musterija.php';
include_once 'slika.php';

ob_start();

$db= new DB();


if(isset($_POST["submit"]) && isset($_POST["hdnId"]))
{
    var_dump($_POST["submit"]);
    var_dump($_POST["hdnId"]);
    $id = $_POST["hdnId"];
    var_dump($id);
    $razlog = $_POST["razlog"];
    
    $db->novaPrijavaOglasa($id, $razlog);
    
    header("location:actionProfilOglasa.php?hdnId=$id");
    exit();
    ob_end_flush();
}