<?php
include_once 'MySmarty.php';
include_once 'DB.php';

session_start();


$smarty=new MySmarty();
$prijavljen=false;

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);


$db= new DB();
$oglasi=$db->vratiSveOglase();
$gradovi=$db->vratiGradove();
$zanati=$db->vratiZanate();

if(isset($_POST["sbmPretrazi"]))
{
   
    $zanat=$_POST["selZanat"];
    $grad=$_POST["selGrad"];
    $oglasi=$db->vratiOglasePoKategorijiIMestu($grad, $zanat);
    
}

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]))
{
    $prijavljen=true;
}

$smarty->assign("prijavljen", $prijavljen);
$smarty->assign("zanati", $zanati);
$smarty->assign("lokacije", $gradovi);
$smarty->assign("oglasi", $oglasi);
//$smarty->display('header.tpl');
$smarty->display('pretrazivanjeOglasa.tpl');
//$smarty->display('footer.tpl');

include_once 'footer.php';

?>