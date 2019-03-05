<?php
ob_start();

include_once 'Mysmarty.php';
include_once 'DB.php';
include_once 'Musterija.php';
include_once 'slika.php';

session_start();
    
    $smarty = new MySmarty();
    
include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

if(isset($_POST["btnRegistrovanje"]))
{   
                                    //$smarty = new MySmarty();
    $db=new DB();
    
    $ime=$_POST["ime"];
    $prezime=$_POST["prezime"];
    $adresa=  $_POST["adresa"];
    $lokacija=$_POST["lokacija"];
    $kontakt=$_POST["kontakt"];
    $string=$adresa." ".$lokacija;
    $musterija_Email=$_POST["musterija_Email"];
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
    {   $musterija=new Musterija($musterija_Email,$password,$ime,$prezime,$kontakt,$string,$pitanje,$odgovor);
   
    $db->musterijaRegistrovanje($musterija);
     if (isset($_FILES['fajl_input']) 
            && $_FILES['fajl_input']['size'] > 0 && $_FILES['fajl_input']['size'] < 10000000) {
    $fajl_za_dodavanje = new slika(0, $_FILES['fajl_input']['name'], $fileType = $_FILES['fajl_input']['type'], $_FILES['fajl_input']['size'], 1);
    
    $naziv=$fajl_za_dodavanje;
    $naziv=$_FILES['fajl_input'];
           rename($_FILES['fajl_input']['tmp_name'], $fajl_za_dodavanje->putanja);
          
        $db->dodaj_fajl($fajl_za_dodavanje, $musterija->musterija_Email);
       // var_dump($fajl_za_dodavanje);
            }
            
             //ob_start();
    //  \/ \/ \/ \/ \/ \/
    //ovde ce da se pokupe sve stvari ze registrovanje i da se upisu u bazu
    //  /\ /\ /\ /\ /\ /\
    //$smarty->display('registrovanjeMusterija.tpl');
$_SESSION["musterija"]=$musterija->musterija_Email;
    header("location:index.php");
    exit();
    ob_end_flush();
    }
}
else{  
    
    
    
    
    
    //$smarty->display('header.tpl');
    $smarty->display('registrovanjeMusterija.tpl');
    //$smarty->display('footer.tpl');
    
    include_once 'footer.php';
}