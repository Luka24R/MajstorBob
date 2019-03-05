<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once 'DB.php';
include_once 'MySmarty.php';
include_once 'Poruka.php';

session_start();
include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);



$db= new DB();
$konv=$db->vratiPorukeZaAdmina();

$online=false;
$profilMajstor=false; //profil kog tipa korisnika se gleda
$da=false; //da je za prikaz poruka pojedničane konverzacije
$porukice=null; //poruke iz konverzacije
$ime=""; //osoba sa kojom se komunicira
$emailKorisnika=""; //email korisnika sa kojim se komunicira
$slika=null;
$imaSlika=false;
$display="";
if(isset($_POST["sbmRazgovor"]))
{
    $da=true;
    
    
}

if(isset($_POST["sbmPosaljiPoruku"]))
{
    $da=true;
    if($_POST["txtPoruka"]=="" || $_POST["txtPoruka"]==NULL )
    {
        echo "<script type='text/javascript'>alert('Niste uneli tekst poruke!');</script>";
    }
    else
    {
        $tekst=$_POST["txtPoruka"];
        $dat=date("Y-m-d H:i:s");
        $email=$_POST["emailKorisnika"];
        $emailKorisnika=$email;
        $maj="";
        $mus="";
        if($db->daLiJeMajstor($email)) /*Jer je u bazi dozvoljena samo razmena poruka majstor-mušterija*/
        {
             
            $maj=$email;
            $mus="admin";
            $p=new Poruka($maj,$mus , $tekst, $dat, "musterija");
        }
        else
        {
            $maj="admin";
            $mus=$email;
            $p=new Poruka($maj,$mus , $tekst, $dat, "majstor");
        }
       
        
        $db->posaljiPoruku($p);
       /* if($db->daLiJeMajstor($email))
            $porukice=$db->vratiKonverzaciju($email, "admin");
        else
            $porukice=$db->vratiKonverzaciju ("admin", $email);*/
        
    }
}
if($da) //ako se prikazuje konverzacija
{
    $email=$_POST["emailKorisnika"];
    if($db->daLiJeMajstor($email))
    {
        $majstor=$db->vratiKompletnoMajstor($email);
        
        
        if($majstor->online=="DA")
            $online=true;
        $ime=$majstor->ime." ". $majstor->prezime;
         $display="Adresa: " . $majstor->adresa."<br>Kvalifikacije: ".$majstor->kvalifikacije."<br>";
         $display=$display."Zanati: ";
         foreach ($majstor->zanati as $z)
             $display=$display." ".$z->tip."<br>";
         $display=$display."Gradovi: ";
         foreach ($majstor->lokacije as $l)
              $display=$display." ".$l->mesto."<br>";
        $porukice=$db->vratiKonverzaciju($email, "admin");
        $emailKorisnika=$email;
        $profilMajstor=true;
        
        
    }
 else {
        $musterija=$db->vratiMusteriju($email);
        $ime=$musterija->ime." ". $musterija->prezime;
        $display=$musterija->lokacija;
        $porukice=$db->vratiKonverzaciju("admin", $email);
        $emailKorisnika=$email;
        
    }
    $slika=$db->vratiSlikuKorisnika($email);
    if($slika!=null)
        $imaSlika=true;
}
$smarty= new MySmarty();

$smarty->assign("imaSlika", $imaSlika);
$smarty->assign("slika", $slika);
$smarty->assign("profilMajstora", $profilMajstor);
$smarty->assign("onlajn", $online);
$smarty->assign("emailKorisnika", $emailKorisnika);
$smarty->assign("ime", $ime);
$smarty->assign("porukice", $porukice);
$smarty->assign("da", $da);
$smarty->assign("poruke", $konv);
$smarty->assign("display", $display);
$smarty->display("porukeAdmina.tpl");




