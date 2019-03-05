<?php
include_once 'MySmarty.php';



$smarty=new MySmarty();

$prijavljen=false;
    $prijavljenMajstor=false;
    $prijavljenMusterija=false;
    $prijavljenAdmin=false;

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]) || isset($_SESSION["admin"]))
{
    $prijavljen=true;
}

if(isset($_SESSION["majstor"]))
    $prijavljenMajstor=true;
else if(isset($_SESSION["musterija"]))
    $prijavljenMusterija=true;
else if(isset($_SESSION["admin"]))
    $prijavljenAdmin=true;
else {}

$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

$smarty->assign("prijavljen", $prijavljen);
$smarty->display('header.tpl');

?>