<?php
include_once 'MySmarty.php';
include_once 'DB.php';
include_once 'PrijavljeniOglasi.php';
include_once 'PrijavljeniProfili.php';
//session_start();
session_start();

$smarty=new MySmarty();

$db=new DB();

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

$prijavljen=false;

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]) || isset($_SESSION["admin"]))
{
    $prijavljen=true;
}

$prijavljeniOglasi = $db->vratiPrijavljeneOglase();
$prijavljeniProfili = $db->vratiPrijavljeneProfile();

$majstorIliMusterija=[];

foreach ($prijavljeniProfili as $imejl)
{
    if($db->daLiJeMajstor($imejl->idPrijavljenogProfila)==true)
        $majstorIliMusterija[] = true;
    else
        $majstorIliMusterija[]=false;    
}

$smarty->assign("prijavljeniOglasi", $prijavljeniOglasi);
$smarty->assign("prijavljeniProfili", $prijavljeniProfili);
$smarty->assign("isMajstor", $majstorIliMusterija);

$smarty->assign("prijavljen", $prijavljen);

//$smarty->display('header.tpl');
$smarty->display('admin.tpl');
//$smarty->display('footer.tpl');

include_once 'footer.php';

?>