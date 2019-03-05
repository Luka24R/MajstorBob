<?php
ob_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'MySmarty.php';
include_once 'DB.php';
include_once 'Poruka.php';
session_start();


$smarty=new MySmarty();

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

$db= new DB();
$zanati=$db->vratiZanate();
$lokacije=$db->vratiGradove();
if(isset($_POST["sbmKreiraj"]) && isset($_SESSION["musterija"]))
{
    $grad=$_POST["selGrad"];
    $kategorija=$_POST["selKat"];
    $adresa=$_POST["txtAdresa"];
    $tekst=$_POST["txtTekst"];
    $vl="";
   
        $vl=$_SESSION["musterija"];
   $dat=date("Y-m-d H:i:s");
    $oglas=new Oglas($tekst, $dat, $adresa, $kategorija, $vl, $grad);
  
    $db->dodajNoviOglas($oglas); //ubacićemo da se svim majstorima šalje automatksa poruka
    $majstori=$db->vratiMajstorePoZanatuILokaciji($kategorija, $grad);
   
    foreach($majstori as $majstor)
    {
        $txt="AUTOMATSKA PORUKA: NOVI OGLAS KOJI ODGOVARA VAŠIM KVALIFIKACIJAMA. PROVERITE NAJNOVIJE OGLASE : -----------".$oglas->mesto." ". $oglas->vrsta_posla." ". $oglas->tekst_oglasa;
        
        $p= new Poruka($majstor->majstor_Email, $oglas->vlasnik, $txt, date("Y-m-d H:i:s"), $oglas->vlasnik);
       // $headers='From: Team96hypeR@gmail.com';
       // mail($majstor->majstor_Email, "Proba", $txt, $headers);
        
        $db->posaljiPoruku($p);
    }
   header("location:pretrazivanjeOglasa.php");
   exit();
}

$smarty= new MySmarty();

$prijavljen=false;

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]))
{
    $prijavljen=true;
}

$smarty->assign("prijavljen", $prijavljen);

$smarty->assign("lokacije", $lokacije);
$smarty->assign("zanati", $zanati);
//$smarty->display('header.tpl');
$smarty->display('noviOglas.tpl');
//$smarty->display('footer.tpl');

include_once 'footer.php';