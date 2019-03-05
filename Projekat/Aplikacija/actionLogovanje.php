<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DB.php';
session_start();
$db=new DB();
if(isset($_POST["btnPrijaviSe"])) //Ovde ne dolazi iz logovanje.tpl nego iz header.tpl
{
    $mejl=$_POST["txtImejl"];
    $lozinka=$_POST["txtLozinka"];
    
    $daLiMajstor=$db->daLiJeMajstor($mejl); //ako je majstor bice true
    
    if($daLiMajstor)
    {
        if($db->logMajstor($mejl, $lozinka))
        {
            $_SESSION["majstor"]=$mejl;
            
            $db->onlajnMajstor($mejl);
            
           
            header("location:index.php");
           
        }
        else
        {
             echo "<script type='text/javascript'>alert('Pogrešni podaci !');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
      
        }
    }
    else
        if($db->daLiJeMusterija($mejl))
        {
            if($db->logMusterija($mejl, $lozinka))
            {
                $_SESSION["musterija"]=$mejl;
                
              
                header("location:index.php");
               
            }
            else
            {
                   echo "<script type='text/javascript'>alert('Pogrešni podaci !');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
            }
        }
        else if($db->daLiJeAdmin($mejl))
        {
            if($db->logAdmina($mejl, $lozinka))
            {
                $_SESSION["admin"]=$mejl;
                
              
                header("location:index.php");
               
            }
            else
            {
                  echo "<script type='text/javascript'>alert('Pogrešni podaci !');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
            }
        }
        else
        {
              echo "<script type='text/javascript'>alert('Pogrešni podaci !');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
        }
    
}