<?php
ob_start();
include_once 'Mysmarty.php';
include_once 'DB.php';

$smarty = new MySmarty();
$db=new DB();
include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

if(isset($_POST["btn"]))
{
	$email=$_POST["txtImejl"];
	
	if($daLiMajstor=$db->daLiJeMajstor($email)==true)
	{
		$hintPitanje=$db->vratiHintPitanjeMajstor($email);
	}
	else if($daLiJeMusterija=$db->daLiJeMusterija($email)==true)
	{
		$hintPitanje=$db->vratiHintPitanjeMusterija($email);
	}
	else
	{
		header("location: index.php");
		echo 'Uneli ste pogrešnu imejl adresu ';
		exit();
	}

	$p=true;

	$smarty->assign("hintPitanje",$hintPitanje);
    $smarty->assign("email", $email);
    $smarty->assign("p", $p);
    $smarty->display('zaboravljenaLozinka.tpl');
}
else if(isset($_POST["vratiSifru"]))
{
	$email=$_POST["hdnEmail"];
	$maj=false;
	$mus=false;

	if(isset($_POST["odgovor"]))
	{
		if($db->daLiJeMajstor($email)==true)
		{
			$hintOdgovor=$db->vratiHintOdgovorMajstor($email);
			$maj=true;
		}
		else if($db->daLiJeMusterija($email)==true)
		{
			$hintOdgovor=$db->vratiHintOdgovorMusterija($email);
			$mus=true;
		}
		else
		{
			header("location: index.php");
			echo 'Uneli ste pogrešnu imejl adresu ';
			exit();
		}

	}

	$odgovor=$_POST["odgovor"];
	
	
	if(strcmp($odgovor,$hintOdgovor)==0)
	{
		if($maj==true)
		{
			$sifra=$db->vratiSifruMajstor($email);
		}
		else if($mus==true)
		{
			$sifra=$db->vratiSifruMusterija($email);
		}
		else{$sifra='Niste tacno odgovorili na pitanje';}
	}
	else
	{
		$sifra='Niste tacno odgovorili ';
	}
	$p=false;
	$smarty->assign("p", $p);
	$smarty->assign("sifra", $sifra);
	$smarty->display('zaboravljenaLozinka.tpl');
}

//funkcije da se stave u bazu

/*
public function vratiSifruMusterija($email)
   {
    $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $niz=null;
            $res=$con->query("SELECT password FROM musterija WHERE musterija_Email='$email'");
            
            if($res){
                if($row=$res->fetch_assoc()){
                  $niz=$row["password"];}
                  $res->close();
                  return $niz;}
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   public function vratiSifruMajstor($email)
   {
    $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $niz=null;
            $res=$con->query("SELECT password FROM majstor WHERE majstor_Email='$email'");
            
            if($res){
                if($row=$res->fetch_assoc()){
                  $niz=$row["password"];}
                  $res->close();
                  return $niz;}
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   public function vratiHintOdgovorMusterija($email)
   {
    $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $niz=null;
            $res=$con->query("SELECT musterija_hint_odgovor FROM musterija WHERE musterija_Email='$email'");
            
            if($res){
                if($row=$res->fetch_assoc()){
                  $niz=$row["musterija_hint_odgovor"];}
                  $res->close();
                  return $niz;}
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   public function vratiHintOdgovorMajstor($email)
   {
    $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $niz=null;
            $res=$con->query("SELECT majstor_hint_odgovor FROM majstor WHERE majstor_Email='$email'");
            
            if($res){
                if($row=$res->fetch_assoc()){
                  $niz=$row["majstor_hint_odgovor"];}
                  $res->close();
                  return $niz;}
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   public function vratiHintPitanjeMajstor($email)
   {
    $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $niz=null;
            $res=$con->query("SELECT majstor_hint_pitanje FROM majstor WHERE majstor_Email='$email'");
            
            if($res){
                if($row=$res->fetch_assoc()){
                  $niz=$row["majstor_hint_pitanje"];}
                  $res->close();
                  return $niz;}
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   public function vratiHintPitanjeMusterija($email)
   {
    $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $niz=null;
            $res=$con->query("SELECT musterija_hint_pitanje FROM musterija WHERE musterija_Email='$email'");
            
            if($res){
                if($row=$res->fetch_assoc()){
                  $niz=$row["musterija_hint_pitanje"];}
                  $res->close();
                  return $niz;}
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
*/