<?php
ob_start();

include_once 'MySmarty.php';
include_once 'DB.php';
include_once 'Musterija.php';
include_once 'slika.php';

session_start();

$smarty = new MySmarty();
$db=new DB();
$zanati=$db->vratiZanate();

/*if(isset($_POST["btn"]))
{
    $smarty->display('header.tpl');
    if($_POST["btn"] == "majstor")
    {  
         $smarty->assign("zanati", $zanati);
        $smarty->display('registrovanjeMajstor.tpl');
   
    }
    else if($_POST["btn"] == "musterija")
        $smarty->display('registrovanjeMusterija.tpl');
    else {}
    $smarty->display('footer.tpl');
}
*/
if (isset($_POST["btnRegistrovanje"]))
{
   
    
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
       
      
        
        
        $db->majstorRegistrovanje($majstor);
        foreach ($majstor->zanati as $zz)
        {
            $db->upisiZanateMajstora($majstor->majstor_Email, $zz->tip);
        }
         foreach($majstor->lokacije as $g)
        {
            $db->upisiGradoveZaMajstora($majstor->majstor_Email, $g->mesto);
        }
        
        
         $naziv="";
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
            }
            
            $_SESSION["majstor"]=$majstor->majstor_Email;
           header("location:index.php");
           exit();
    /* ob_start();
     * header("location:index.php");
    exit();
    ob_end_flush();
        
    }*/
    //  \/ \/ \/ \/ \/ \/
    //ovde ce da se pokupe sve stvari ze registrovanje i da se upisu u bazu
    //  /\ /\ /\ /\ /\ /\
    //$smarty->display('registrovanjeMusterija.tpl');

    
}
}
else
{
    header("location:index.php");
    exit();
}

