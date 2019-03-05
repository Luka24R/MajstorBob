<?php
include_once 'MySmarty.php';
include_once 'DB.php';
session_start();


$smarty=new MySmarty();

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

$db= new DB();

$zanati=$db->vratiZanate();
$lokacije=$db->vratiGradove();

$lokacija="";
$kategorija="";
$teren="";
$majstori=null;
//var_dump($_POST);
if(isset ($_GET["sbmPotraziPoImenu"]) || isset($_GET["sbmImePrezime"]))
{
    $ip=$_GET["majstorIme"];
  
    if(!empty($ip))
    {
    $ipp=  explode(" ", $ip);
    $ime=$ipp[0];
    if(count($ipp)==1)
    {
        $prezime="";
    }
 else {
        $prezime=$ipp[1];
    }
    
    $majstori=$db->vratiPoImenu($ime, $prezime);
    //var_dump($majstori);
    
    }
    
}

else
{
    if(isset($_GET["sbmPretraziMajstore"]))
    {
    $lokacija=$_GET["selLokacija"];
    $kategorija=$_GET["selKategorija"];
    $teren=$_GET["izlazakNaTeren"];
    }
    else
    if(isset($_GET["sbmMajstor"]))
    {
        $lokacija=$_GET["selLok"];
        $kategorija=$_GET["selKat"];
        $teren=$_GET["radIzlazakNaTeren"];
        
    }
    
    $majstori=$db->vratiMajstorePoKriterijumima($lokacija, $kategorija, $teren);
    
    }
    
    foreach ($majstori as $majstor)
    {
        if($db->vratiSlikuKorisnika($majstor->majstor_Email)!= null)
        {
            $majstor->dodajSliku($db->vratiSlikuKorisnika($majstor->majstor_Email));
        }
    }
    
//var_dump($majstori);
    
/*$prijavljen=false;

if (isset($_SESSION["majstor"]) || isset($_SESSION["musterija"]))
{
    $prijavljen=true;
}

$smarty->assign("prijavljen", $prijavljen);
*/
$smarty->assign("zanati", $zanati);
$smarty->assign("lokacije", $lokacije);
$smarty->assign("majstori", $majstori);
$smarty->display('header.tpl');
$smarty->display('pretrazivanjeMajstora.tpl');
//$smarty->display('footer.tpl');

//include_once 'footer.php';

?>