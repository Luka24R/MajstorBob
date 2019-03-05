<?php
ob_start();
include_once 'MySmarty.php';
include_once 'DB.php';
include_once 'Poruka.php';
session_start();

$smarty=new MySmarty();

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

 $db=new DB();
 
if(isset($_GET["btnPosPorukuMajsotor"]))
{
$em=$_GET["btnPosPorukuMajsotor"];


//$prijavljen=true;
$smarty->assign("em", $em);
//$smarty->assign("prijavljen", $prijavljen);
//$smarty->display('header.tpl');
$smarty->display('novaPoruka.tpl');
//$smarty->display('footer.tpl');
include_once 'footer.php';
}
else if(isset($_GET["btnPosPorukuMusterija"]))
{
$em=$_GET["btnPosPorukuMusterija"];
$smarty=new MySmarty();
//$prijavljen=true;
$smarty->assign("em", $em);
//$smarty->assign("prijavljen", $prijavljen);
//$smarty->display('header.tpl');
$smarty->display('novaPoruka.tpl');
//$smarty->display('footer.tpl');
include_once 'footer.php';
}
else if(isset($_POST["btnPosPor"]))
{
    $majstor=false;
    $email_posiljaoc="";
    $posiljaoc="";
	//skripta za izvrsenje kad se pritisne dugme 
	//posalji
	$primalac=$_POST["hdnEmail"];
        
	if(isset($_SESSION["majstor"]))
        {
        $email_posiljaoc=$_SESSION["majstor"];
        $posiljaoc='majstor';
        $majstor=true;
        }
    if(isset($_SESSION["musterija"]))
        {
        
        $email_posiljaoc=$_SESSION["musterija"];
        $posiljaoc='musterija';
        }
         $tekst=$_POST["tekstPoruke"];
      if($prijavljenAdmin)
      {
          $emailPosiljaoc="admin";
          if($db->daLiJeMajstor($primalac))
          {
            $posiljaoc="musterija";
            $p= new Poruka($primalac, $emailPosiljaoc, $tekst, date("Y-m-d H:i:s"), $posiljaoc);
          }
          else
          {
              $posiljaoc="majstor";
               $p= new Poruka($emailPosiljaoc, $primalac, $tekst, date("Y-m-d H:i:s"), $posiljaoc);
          }
      }
    //var_dump($tekst);
    else
    {
        if($majstor)
        {
            $p= new Poruka($email_posiljaoc, $primalac, $tekst, date("Y-m-d H:i:s"), $posiljaoc);
        }
        else
            {
                $p=new Poruka($primalac, $email_posiljaoc, $tekst, date("Y-m-d H:i:s"), $posiljaoc);
                
            }
    }
   
    $db->posaljiPoruku($p);
    header("location:inbox.php");
    
    exit();
    }








?>