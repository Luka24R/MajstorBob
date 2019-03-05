<?php

include ("MySmarty.php");
include_once 'DB.php';

session_start();

$smarty = new MySmarty();
$db=new DB();
$zanati=$db->vratiZanate();
$lokacije=$db->vratiGradove();

include_once 'header.php';

if(isset($_POST["btn"]))
{
    $prijavljen=false;

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]) || isset($_SESSION["admin"]))
{
    $prijavljen=true;
}

$smarty->assign("prijavljen", $prijavljen);
    //$smarty->display('header.tpl');
    if($_POST["btn"] == "majstor")
    {
        $smarty->assign("lokacije",$lokacije);
      $smarty->assign("zanati", $zanati);   
        $smarty->display('registrovanjeMajstor.tpl');
    }
    else if($_POST["btn"] == "musterija")
        $smarty->display('registrovanjeMusterija.tpl');
    else {}
    //$smarty->display('footer.tpl');
    include_once 'footer.php';
}