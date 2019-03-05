<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'MySmarty.php';
include_once 'DB.php';
include_once 'Poruka.php';
include_once 'slika.php';
session_start();
$DB=new DB();
$emailKorisnika="";
$korisnikMajstor=false;
$prijavljen=false;

$imaSlika=false;
$slika=null;

//$musterijaEmail="n@gmail.com";//ovo ce morati iz sesije da se uzima 
if(isset($_SESSION["musterija"]))
{
    $prijavljen=true;
    $korisnikMajstor=false;
    $emailKorisnika=$_SESSION["musterija"];
    $poruke=$DB->vratiRazgovoreZaMusteriju($emailKorisnika);
$ime="";
$da=false;
$display="";
$porukice=NULL;
$emailM="";
$onlajn=false;

//var_dump($_POST);
if(isset($_POST["sbmPosaljiPoruku"]))
{
    
    $email=$_POST["emailMajstora"];
    $emailM=$email;
    $da=true;
    if($_POST["txtPoruka"]=="" || $_POST["txtPoruka"]==NULL )
    {
        echo "<script type='text/javascript'>alert('Niste uneli tekst poruke!');</script>";
    }
    else
    {
        $tekst=$_POST["txtPoruka"];
        $dat=date("Y-m-d H:i:s");
        $p=new Poruka($_POST["emailMajstora"],$emailKorisnika , $tekst, $dat, "musterija");
        
        $DB->posaljiPoruku($p);
        
    }
}

if (isset($_POST["majstorEmail"]))
{   
    $da=true;
    $email=$_POST["majstorEmail"];
    $emailM=$email;
   
    
   // var_dump($porukice);
}

if ($da==true)
{
    if($email!="admin")
    {$majstor=$DB->vratiKompletnoMajstor($email);
   // var_dump($majstor);
    if($majstor->online==true)
        $onlajn=true;
    $slika=$DB->vratiSlikuKorisnika($email);
    if($slika!=null)
        $imaSlika=true;
    $ime=$majstor->ime." ".$majstor->prezime;
    $display="Adresa: " . $majstor->adresa."<br>Kvalifikacije: ".$majstor->kvalifikacije."<br>"; //ovde bi trebalo da se dodaju i zanati, ali za sad to ne uzimamo iz baze
     $display=$display."Zanati: ";
         foreach ($majstor->zanati as $z)
             $display=$display." ".$z->tip."<br>";
         $display=$display."Gradovi: ";
         foreach ($majstor->lokacije as $l)
              $display=$display." ".$l->mesto."<br>";
// var_dump($display);
    }
 else {
        $ime="ADMIN";
        $display="";
    }
    $porukice=$DB->vratiKonverzaciju($email, $emailKorisnika);
}
$smarty=new MySmarty();

include_once 'header.php';

$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);


$smarty->assign("imaSlika", $imaSlika);
$smarty->assign("slika", $slika);

$smarty->assign("porukice", $porukice);
$smarty->assign('poruke', $poruke);
$smarty->assign("ime", $ime);
$smarty->assign("da", $da);
$smarty->assign("emailM", $emailM);
$smarty->assign("display", $display);
$smarty->assign("korisnikMajstor", $korisnikMajstor);
$smarty->assign("prijavljen", $prijavljen);
$smarty->assign("onlajn", $onlajn);

//$smarty->display('header.tpl');
$smarty->display('poruke.tpl');
//$smarty->display('footer.tpl');
}
else 
    if(isset($_SESSION["majstor"]))
{
        $prijavljen=true;
        $korisnikMajstor=true;
    $emailKorisnika=$_SESSION["majstor"];
    $poruke=$DB->vratiRazgovoreZaMajstora($emailKorisnika);
    //var_dump($poruke);
$ime="";
$da=false;
$display="";
$porukice=NULL;
$emailM="";
//var_dump($_POST);
if(isset($_POST["sbmPosaljiPoruku"]))
{
    
    $email=$_POST["emailMajstora"];
    $emailM=$email;
    $da=true;
    if($_POST["txtPoruka"]=="" || $_POST["txtPoruka"]==NULL )
    {
        echo "<script type='text/javascript'>alert('Niste uneli tekst poruke!');</script>";
    }
    else
    {
        $tekst=$_POST["txtPoruka"];
        $dat=date("Y-m-d H:i:s");
        $p=new Poruka($emailKorisnika,$_POST["emailMajstora"] , $tekst, $dat, "majstor");
        
        $DB->posaljiPoruku($p);
        
    }
}

if (isset($_POST["majstorEmail"]))
{   
    $da=true;
    $email=$_POST["majstorEmail"];
    $emailM=$email;
   
    
   // var_dump($porukice);
}

if ($da==true)
{
  //  var_dump($email);
    if($email!="admin")
    {
        $musterija=$DB->vratiMusteriju($email);
        $slika=$DB->vratiSlikuKorisnika($email);
       
        if($slika!=null)
            $imaSlika=true;
   
    $ime=$musterija->ime." ".$musterija->prezime;
    $display=$musterija->lokacija;
    }
    else
    {
        $ime="ADMIN";
        $display="";
    }
    
    $porukice=$DB->vratiKonverzaciju( $emailKorisnika, $email);
}
$smarty=new MySmarty();



include_once 'header.php';

$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

$smarty->assign("imaSlika", $imaSlika);
$smarty->assign("slika", $slika);

$smarty->assign("porukice", $porukice);
$smarty->assign('poruke', $poruke);
$smarty->assign("ime", $ime);
$smarty->assign("da", $da);
$smarty->assign("emailM", $emailM);
$smarty->assign("display", $display);
$smarty->assign("korisnikMajstor", $korisnikMajstor);
$smarty->assign("prijavljen", $prijavljen);
$smarty->assign("onlajn", false);

$smarty->display('header.tpl');
$smarty->display('poruke.tpl');
//$smarty->display('footer.tpl');
}

else
{
     ob_start();
            header("location:index.php");
            exit();
            ob_end_flush();
}
//include_once 'footer.php';