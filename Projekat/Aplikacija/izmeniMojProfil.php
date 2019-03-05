<?php
ob_start();
include_once 'MySmarty.php';
include_once 'DB.php';
include_once 'slika.php';
$db=new DB();
session_start();

$prijavljen=false;
$smarty= new MySmarty();

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

if(isset($_GET["btnIzmeniMusterija"]))
{   
	$prijavljen=true;
	$email=$_GET["btnIzmeniMusterija"];
	$musterija=$db->vratiMusteriju($email);
    $smarty->assign("musterija",$musterija);
    $smarty->assign("prijavljen", $prijavljen);
    //$smarty->display('header.tpl');
    $smarty->display('izmeliProfilMusterija.tpl');



}
else if(isset($_GET["btnIzmeniMajstor"]))
{   
    $zanati=$db->vratiZanate();
    $lokacije=$db->vratiGradove();
    $email=$_GET["btnIzmeniMajstor"];
    $majstor=$db->vratiKompletnoMajstor($email);
   
        $prijavljen=true;
        $smarty->assign("majstor", $majstor);
        $smarty->assign("zanati", $zanati);
        $smarty->assign("lokacije", $lokacije);
         $smarty->assign("prijavljen", $prijavljen);
    $smarty->display('header.tpl');
	$smarty->display("izmeniProfilMajstor.tpl");

}
else if(isset($_POST["btnSnimiIzmeneMusterija"]))
{
	
	$db=new DB();
    
    $ime=$_POST["ime"];
    $prezime=$_POST["prezime"];
    $adresa=  $_POST["adresa"];
    //$lokacija=$_POST["lokacija"];
    $kontakt=$_POST["kontakt"];
    $string=$adresa;//." ".$lokacija;
    //$musterija_Email='a';//$_POST["musterija_Email"];
    $musterija_Email=$_SESSION["musterija"];
    $password=$_POST["password"];
    $passAgain=$_POST["password2"];
    $pitanje=$_POST["pitanje"];
    $odgovor=$_POST["odgovor"];
      if($password!=$passAgain)
    {
        echo "<script type='text/javascript'>alert('Lozinke se ne slazu!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
      
    }
    else
    {   
    	$musterija=new Musterija($musterija_Email,$password,$ime,$prezime,$kontakt,$string,$pitanje,$odgovor);
   		var_dump($musterija);
    $db->updateMusterija($musterija);
     if (isset($_FILES['fajl_input']) 
            && $_FILES['fajl_input']['size'] > 0 && $_FILES['fajl_input']['size'] < 10000000) {
    $fajl_za_dodavanje = new slika(0, $_FILES['fajl_input']['name'], $fileType = $_FILES['fajl_input']['type'], $_FILES['fajl_input']['size'], 1);
    
    $naziv=$fajl_za_dodavanje;
    $naziv=$_FILES['fajl_input'];
           rename($_FILES['fajl_input']['tmp_name'], $fajl_za_dodavanje->putanja);
          $db->obrisiSliku($musterija_Email);
        $db->dodaj_fajl($fajl_za_dodavanje, $musterija->musterija_Email);
        //var_dump($fajl_za_dodavanje);
            }
            
             ob_start();
    //  \/ \/ \/ \/ \/ \/
    //ovde ce da se pokupe sve stvari ze registrovanje i da se upisu u bazu
    //  /\ /\ /\ /\ /\ /\
    //$smarty->display('registrovanjeMusterija.tpl');
//$_SESSION["musterija"]=$musterija->musterija_Email;
    header("location:index.php");
    exit();
    ob_end_flush();
    }

}
else if(isset($_POST["btnSnimiIzmeneMajstor"]))
{

		//kao u prethodnom if kad se klikne dugme snimiIzmene
		//ovde da se pokupi sve iz inputa i poziva se funkcija za  /*updateMajstor koju treba napraviti*/
     
    $ime=$_POST["txtIme"];
    $prezime=$_POST["txtPrezime"];
    $adresa=  $_POST["txtAdresa"];
    $gradovi=$_POST["selGrad"];
    $telefon=$_POST["txtTelefon"];
    
   $majstor_Email=$_POST["txtImejl"];
    $password=$_POST["txtLozinka"];
    $passPonovo=$_POST["txtLozinka2"];
    $pitanje=$_POST["txtPitanje"];
    $odgovor=$_POST["txtOdgovor"];
    //var_dump($pitanje);
    //var_dump($odgovor);
    $teren="";
    if (isset($_POST["chkTeren"]))
    {
        $teren="DA";
    }
    else
    {
        $teren="NE";
    }
    
    $zanatiMajstor=array();
    
   $zanatiMajstor=$_POST["chkZanat"];
   
   
    
    $kvalifikacije=$_POST["txtKvalifikacije"];
    $radniDan="";
    $subota="";
    $nedelja="";
    
    if(isset($_POST["working_days"]))
    {
        $start=$_POST["working_start_time"];
        $end=$_POST["working_end_time"];
        $radniDan=$start."-".$end;
        
    }
    
    if(isset($_POST["saturday"]))
    {
         $start=$_POST["saturday_start_time"];
        $end=$_POST["saturday_end_time"];
        $subota=$start."-".$end;
    }
    
    if(isset($_POST["sunday"]))
    {
        $start=$_POST["sunday_start_time"];
        $end=$_POST["sunday_end_time"];
        $nedelja=$start."-".$end;
    }
    
    
    if($password!=$passPonovo)
    {
        echo "<script type='text/javascript'>alert('Lozinke se ne slazu!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
      
    }
 else {
        $majstor= new Majstor($majstor_Email, $password, $ime, $prezime, $telefon, $kvalifikacije, $adresa, $radniDan, $subota, $nedelja, $teren, $pitanje, $odgovor, "DA", "DA"); //da li je dostupan za rad i online
        if(is_array($gradovi))
        foreach($gradovi as $g)
        {
            $majstor->dodajLokacije(new Lokacija($g));
        }
 else {
     $majstor->dodajLokacije(new Lokacija($gradovi));
 }
        foreach($zanatiMajstor as $z)
        {
            $majstor->dodajZanate(new Zanat($z));
            
        }
       // var_dump($majstor);
      
        
        
        $db->updateKompletnoMajstor($majstor);
       
        if (isset($_FILES['fajl_input']) 
            && $_FILES['fajl_input']['size'] > 0 && $_FILES['fajl_input']['size'] < 10000000) {
    $fajl_za_dodavanje = new slika(0, $_FILES['fajl_input']['name'], $fileType = $_FILES['fajl_input']['type'], $_FILES['fajl_input']['size'], 1);
    
    $naziv=$fajl_za_dodavanje;
    $naziv=$_FILES['fajl_input'];
           rename($_FILES['fajl_input']['tmp_name'], $fajl_za_dodavanje->putanja);
          $db->obrisiSliku($majstor_Email);
        $db->dodaj_fajl($fajl_za_dodavanje, $majstor->majstor_Email);
        //var_dump($fajl_za_dodavanje);
            }
        
      /*   $naziv="";
          //var_dump($_FILES);
            
    if (isset($_FILES['fajl_input']) 
            && $_FILES['fajl_input']['size'] > 0 && $_FILES['fajl_input']['size'] < 10000000) {
        $nazivSlike=$_FILES['fajl_input']['name'];
        
    $fajl_za_dodavanje = new slika(0, $_FILES['fajl_input']['name'], $fileType = $_FILES['fajl_input']['type'], $_FILES['fajl_input']['size'], 1);
    
    $naziv=$fajl_za_dodavanje;
    $naziv=$_FILES['fajl_input'];
           rename($_FILES['fajl_input']['tmp_name'], $fajl_za_dodavanje->putanja);
          
        $db->dodaj_fajl($fajl_za_dodavanje, $majstor->majstor_Email);
        //var_dump($fajl_za_dodavanje);
            }*/
            
           // $_SESSION["majstor"]=$majstor->majstor_Email;
           header("location:index.php");
           exit();

}
}
include_once 'footer.php';