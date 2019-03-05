<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'MySmarty.php';
include_once 'DB.php';

session_start();
include_once 'header.php';
$smarty=new MySmarty();
$db= new DB();

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);



//oglas=null;
//if(isset($_GET["sbmPrikaziOglas"]))
//{
    $id=$_GET["hdnId"];
    
    $oglas=$db->vratiOglasPoId($id);
    //var_dump($oglas);
    $musterija=$db->vratiMusteriju($oglas->vlasnik);
    //var_dump($musterija);
$prijavljen=false;
$ja=false;
$majstor=false;
$majstorKojiGledaOglas=null;
if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]) || isset($_SESSION["admin"]))
{
    $prijavljen=true;
    if(isset($_SESSION["majstor"]))
    {
        $majstor=true;
        $majstorKojiGledaOglas=$_SESSION["majstor"];
    }
}
if(isset($_SESSION["musterija"]) )
{
    if($_SESSION["musterija"]==$oglas->vlasnik)
    {
        $ja=true;
    }
}
$prijave=$db->vratiPrijave($id);
if(is_array($prijave))
{
    foreach ($prijave as $p)
        $oglas->dodajPrijavljeneMajstore ($p);
}
$prijavljeni=$db->prikaziPrijavljeneMajstore($id);

$imaSlika=false;
$slika=$db->vratiSlikuKorisnika($oglas->vlasnik);
if($slika)
{
    $imaSlika=true;
}
$smarty->assign("imaSlika", $imaSlika);
$smarty->assign("slika", $slika);
$smarty->assign("majstorKojiGleda", $majstorKojiGledaOglas);
$smarty->assign("prijavljeni", $prijavljeni);
$smarty->assign("prijavljen", $prijavljen);
 $smarty->assign("ja", $ja);
 $smarty->assign("majstor", $majstor);
 $smarty->assign("id", $id);
$smarty->assign('musterija', $musterija);
$smarty->assign('oglas', $oglas);

$smarty->display('profilOglasaProba.tpl');
include_once 'footer.php';

