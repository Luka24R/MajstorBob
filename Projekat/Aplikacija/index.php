<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include ("MySmarty.php");
include_once 'DB.php';
include_once 'Majstor.php';
include_once 'Zanat.php';
session_start();

include_once 'header.php';


$DB=new DB();

$zanati=$DB->vratiZanate();
$lokacije=$DB->vratiGradove();
$oglasi=$DB->oglasi();



$najboljeOcenjeni=$DB->vratiNajboljegOcenjenogMajstora();
$najboljeOcenjeniMajstor=$DB->majstor($najboljeOcenjeni->majstor_koji_je_ocenjen);
$zanatiOcenjeniMajstor=$DB->vratiZanateMajstora($najboljeOcenjeni->majstor_koji_je_ocenjen);
$gradoviOcenjeniMajstor=$DB->vratiGradoveMajstora($najboljeOcenjeni->majstor_koji_je_ocenjen);
        foreach ($zanatiOcenjeniMajstor as $zOm)
        {
            $najboljeOcenjeniMajstor->dodajZanate($zOm);

        }
        foreach ($gradoviOcenjeniMajstor as $gOm)
        {

            $najboljeOcenjeniMajstor->dodajLokacije($gOm);
        }
$slika=$DB->vratiSlikuKorisnika($najboljeOcenjeni->majstor_koji_je_ocenjen);
$imaSlika=false;
    if($slika!=null)
    {
        $imaSlika=true;
        
    }
    //var_dump($slika);
  

$onlineMajstori=$DB->onlineMajstori();
    foreach ($onlineMajstori as $onM) 
    {
        $zanatiMajstora=$DB->vratiZanateMajstora($onM->majstor_Email);
        $gradoviMajstora=$DB->vratiGradoveMajstora($onM->majstor_Email);
        $onM->ocena=$DB->prosecnaOcena($onM->majstor_Email);
        foreach ($zanatiMajstora as $zm)
        {
            $onM->dodajZanate($zm);

        }
        foreach ($gradoviMajstora as $gm)
        {

            $onM->dodajLokacije($gm);
        }
    }
//var_dump($onlineMajstori);


$smarty = new MySmarty();

$smarty->assign("prijavljen", $prijavljen);
$smarty->assign('zanati', $zanati);
$smarty->assign('lokacije', $lokacije);
$smarty->assign('oglasi', $oglasi);

$smarty->assign('ocenjen', $najboljeOcenjeni);
$smarty->assign('najboljeOcenjen', $najboljeOcenjeniMajstor);


$smarty->assign('onlineMajstor', $onlineMajstori);

$smarty->assign("imaSlika", $imaSlika);
    $smarty->assign("slika", $slika);
//$smarty->assign('Naziv', $RACUN->naziv);

//$smarty->assign('Naziv', $IGRA->naziv);
//$smarty->assign('Mesto', $IGRA->mesto);

//$smarty->assign('igraci', $IGRA->lista);

//$smarty->assign('Najbolji', $var);
  /*  $prijavljen=false;

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]))
{
    $prijavljen=true;
}

$smarty->assign("prijavljen", $prijavljen);
*/
//$smarty->display('header.tpl');

$smarty->display('index.tpl');

include_once 'footer.php';

//$smarty->display('footer.tpl');
//$smarty->display('registrovanjeMajstor.tpl');
//$smarty->display('registrovanjeMusterija.tpl');
//$smarty->display('zaboravljenaLozinka.tpl');


?>
    
