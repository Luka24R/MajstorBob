<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'dogadjaj.php';
class kalDb{
    const host="localhost";
    const username="root";
    const password="";
    const dbName="probabetavr1"; //ime baze?
    
    public function vratiDogadjaje($datum, $email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM dogadjaj WHERE datum='$datum' AND emailKorisnika='$email'");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                    $niz[$row["id"]]= new dogadjaj($row["datum"],$row["emailKorisnika"],$row["vreme"], 
                            $row["nazivDogadjaja"]);
                    
                }
                $res->close();
                return $niz;
            }
            else
            {
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                else {
                     print("Query failed");
                }
            }
        }
    }
    public function vratiDogadjajeEmail($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM dogadjaj WHERE datum='$datum' AND emailKorisnika='$email'");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                    $niz[$row["id"]]= new dogadjaj($row["datum"],$row["emailKorisnika"],$row["vreme"], 
                            $row["nazivDogadjaja"]);
                    
                }
                $res->close();
                return $niz;
            }
            else
            {
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                else {
                     print("Query failed");
                }
            }
        }
    }
}