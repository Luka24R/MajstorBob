<?php
include_once 'MySmarty.php';
session_start();

$smarty=new MySmarty();

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

 $prijavljen=false;

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]) || isset($_SESSION["admin"]))
{
    $prijavljen=true;
}

$smarty->assign("prijavljen", $prijavljen);
//$smarty->display('header.tpl');
$smarty->display('kontakt.tpl');
//$smarty->display('footer.tpl');

//include_once 'footer.php';

?>