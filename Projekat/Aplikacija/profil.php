<?php
include_once 'MySmarty.php';
include_once 'DB.php';
include_once 'kalDb.php';

session_start();
include_once 'header.php';
$db=new DB();
$smarty=new MySmarty();

$email=null;

//if( sesija == majstor)
if(isset($_GET["worker"]))
{
$prijavljen=false;
$ja=false;
$email="";
    $email=$_GET["worker"];
 $pos="blah";
$ocenio="";
$drugiMajstor=false;

 if(isset($_SESSION["musterija"]))
    {
        $pos=$_SESSION["musterija"];
        $drugiMajstor=false;
        $prijavljen=true;
    }
 else
     if(isset ($_SESSION["majstor"]))
     {
         $prijavljen=true;
         if($_SESSION["majstor"]==$email)
         {
             $ja=true;
         }
         else
            $drugiMajstor=true;
         
     }
     else if(isset($_SESSION["admin"]))
{
    $prijavljen=true;
    $prijavljenAdmin=true;
}
else{}
 $ocenio=$db->proveriDaLiJeOcenio($pos, $email);

 
if(isset($_POST["btnObjavi"]))
{
    
    $poz=$_POST["txtKomPoz"];
    $neg=$_POST["txtKomNeg"];
   
   $kom= new Komentar($pos, $poz, $neg);
   
   $db->dodajKomentar($kom, $email);
   $oc=$_POST["ocenaStar"];
   $ocena=(int)$oc;
   
   $db->dajOcenu($email, $pos, $ocena);
}

 $ocenio=$db->proveriDaLiJeOcenio($pos, $email);

$majstor=$db->vratiKompletnoMajstor($email);
$slika=$db->vratiSlikuKorisnika($email);
$imaSlika=false;
    if($slika!=null)
    {
        $imaSlika=true;
        
    }

$datumi=$db->vratiDatumeEmail($email);
$dogadjaji=$db->vratiDogadjajeEmail($email);

$smarty->assign("db", $db);
$smarty->assign("datumi", $datumi);
$smarty->assign("dogadjaji", $dogadjaji);
$smarty->assign("imaSlika", $imaSlika);
$smarty->assign("slika", $slika);
$smarty->assign("prijavljen", $prijavljen);

$smarty->assign("ja", $ja);
$smarty->assign("drugiMajstor", $drugiMajstor);
$smarty->assign("ocenio", $ocenio);
$smarty->assign("majstor", $majstor);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);
$smarty->assign("imejl", $email);
//$smarty->display('header.tpl');
$smarty->display('profilMajstoraProba.tpl');
//include_once 'footer.php';
//$smarty->display('footer.tpl');
//else
//$smarty->display('profilMusterije.tpl');
}
else
    if(isset($_GET["client"]))
    {
        $ja=false;
        
        $email=$_GET["client"];
        if(isset($_SESSION["musterija"]))
        {
            if($email==$_SESSION["musterija"])
        {
            $ja=true;
            
        }
        $prijavljenMusterija=true;
        }
          else if(isset($_SESSION["admin"]))
{
    $prijavljen=true;
    $prijavljenAdmin=true;
}
else{}
        $musterija=$db->vratiMusteriju($email);
        $slika=$db->vratiSlikuKorisnika($email);
         $imaSlika=false;
         if($slika!=null)
        {
            $imaSlika=true;
        
        }
    //var_dump($slika);
    $smarty->assign("imaSlika", $imaSlika);
    $smarty->assign("slika", $slika);
       // var_dump($musterija);
        $prijavljen=true;
        $smarty->assign("ja", $ja);
        $smarty->assign("prijavljen", $prijavljen);
        $smarty->assign("prijavljenAdmin", $prijavljenAdmin);
        $smarty->assign("prijavljenMusterija", $prijavljenMusterija);
        $smarty->assign("musterija", $musterija);
        $smarty->assign("imejl", $email);
       //$smarty->display('header.tpl');
$smarty->display('profilMusterijeProba.tpl');
include_once 'footer.php';
    }
?>