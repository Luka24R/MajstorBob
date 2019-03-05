<?php
ob_start();
include_once 'MySmarty.php';
include_once 'Poruka.php';
include_once 'DB.php';
session_start();
$smarty=new MySmarty();
$db= new DB();
include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

 $prijavljen=false;

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]) || isset($_SESSION["admin"]))
{
    $prijavljen=true;
}
if (isset($_POST["sbmPosaljiAdminu"]))
{
    $tekst=$_POST["PorukaZaAdmina"];
    if($prijavljenMajstor)
    {
        $p= new Poruka($_SESSION["majstor"], "admin", $tekst, date("Y-m-d H:i:s"), "majstor");
        $db->posaljiPoruku($p);
    }
    else
        if($prijavljenMusterija)
        {
            
        $p= new Poruka("admin",$_SESSION["musterija"], $tekst, date("Y-m-d H:i:s"), "musterija");
        $db->posaljiPoruku($p);
        }
        
        header("location:inbox.php");
        exit();
        
}
$smarty->assign("prijavljen", $prijavljen);

//$smarty->display('header.tpl');
$smarty->display('pomoc.tpl');
//$smarty->display('footer.tpl');

include_once 'footer.php';

?>