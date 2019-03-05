<?php
ob_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'MySmarty.php';
include_once 'DB.php';

$db=new DB();
session_start();
//include_once 'header.php';
$prijavljen=false;
$prijavljenMajstor=false;
$prijavljenMusterija=false;
$smarty= new MySmarty();
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

if(isset($_SESSION["majstor"]))
{
    $m=$_SESSION["majstor"];
    header("location:profil.php?worker=".$m);
    $prijavljen=true;
     $prijavljenMajstor=true;
    $email=$_SESSION["majstor"];
    $ja=true;
    $imaSlika=false;
    $majstor=$db->vratiKompletnoMajstor($email);
    $slika=$db->vratiSlikuKorisnika($email);
    if($slika!=null)
    {
        $imaSlika=true;
        
    }
    //var_dump($slika);
     $smarty->assign("prijavljenMajstor", $prijavljenMajstor);
    $smarty->assign("imaSlika", $imaSlika);
    $smarty->assign("slika", $slika);
    $smarty->assign("ja", $ja);
    $smarty->assign("drugiMajstor", false);
    $smarty->assign("ocenio", true);
    $smarty->assign("majstor", $majstor);

    $smarty->assign("prijavljen", $prijavljen);

    //$smarty->display('header.tpl');
    $smarty->display('profilMajstoraProba.tpl');

}
else
    if(isset($_SESSION["musterija"]))
    {
        header("location:profil.php?client=".$_SESSION['musterija']);
        $prijavljen=true;
        $prijavljenMusterija=true;
        $ja=true;
        
        $email=$_SESSION["musterija"];
        $musterija=$db->vratiMusteriju($email);
        $smarty->assign("musterija",$musterija);
        $smarty->assign("ja", $ja);
        $smarty->assign("prijavljen", $prijavljen);
         $smarty->assign("prijavljenMusterija", $prijavljenMusterija);
       // $smarty->display('header.tpl');
        $smarty->display('profilMusterijeProba.tpl');
    }
else
{
        $prijavljen=true;

        //$email=$_SESSION["musterija"];
        /*$email='a';
        var_dump($email);
        $musterija=$db->vratiMusteriju($email);
        $smarty->assign("musterija",$musterija);
        

        $smarty->assign("prijavljen", $prijavljen);
        $smarty->display('header.tpl');
        $smarty->display('profilMusterijeProba.tpl');*/
        header("location:index.php");
}
include_once 'footer.php';