<?php
include_once 'Zanat.php';
include_once 'Lokacija.php';
include_once 'Ocenjuje.php';
include_once 'Majstor.php';
include_once 'Oglas.php';
include_once 'Musterija.php';
include_once 'Komentar.php';
include_once 'dogadjaj.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DB{
    const host="localhost";
    const username="root";
    const password="";
    const dbName="probabetavr1"; //ime baze?
    
   /* public static function connectDB(){
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
    * 
   }*/
   public function updateMusterija($musterija)
   {

    $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query
            ("UPDATE musterija 
              SET password='$musterija->password', ime='$musterija->ime', 
                prezime='$musterija->prezime', kontakt='$musterija->kontakt', 
                lokacija='$musterija->lokacija',
                musterija_hint_pitanje='$musterija->musterija_hint_pitanje',
                musterija_hint_odgovor='$musterija->musterija_hint_odgovor'

                WHERE musterija_Email = '$musterija->musterija_Email'");
            
            if($res){
                
                
                
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
   
   public function updateKompletnoMajstor(Majstor $majstor)
   {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query
            ("UPDATE majstor 
              SET password='$majstor->password', ime='$majstor->ime', 
                prezime='$majstor->prezime', kontakt='$majstor->kontakt', 
                adresa='$majstor->adresa',
                majstor_hint_pitanje='$majstor->majstor_hint_pitanje',
                majstor_hint_odgovor='$majstor->majstor_hint_odgovor',
                kvalifikacije='$majstor->kvalifikacije',
                vreme_radni_dan='$majstor->vreme_radni_dan',
                vreme_subota='$majstor->vreme_subota',
                 vreme_nedelja='$majstor->vreme_nedelja',
                dostupnost_za_rad='$majstor->dostupnost_za_rad',
                izlazak_na_teren='$majstor->izlazak_na_teren',
                online='$majstor->online'
                WHERE majstor_Email = '$majstor->majstor_Email'");
            
            if($res){
                $this->obrisiZanateMajstora($majstor->majstor_Email);
                foreach ($majstor->zanati as $zanat)
                {
                    $this->upisiZanateMajstora($majstor->majstor_Email, $zanat->tip);
                }
                $this->obrisiGradoveMajstora($majstor->majstor_Email);
                foreach($majstor->lokacije as $l)
                {
                    $this->upisiGradoveZaMajstora($majstor->majstor_Email, $l->mesto);
                }
                $con->close();
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
   public function obrisiKomentareMajstora($email)
   {
    $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM ostavljanje_komentara WHERE majstor_Email1='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }   
   }
   public function obrisiOceneMajstora($email)
   {
       $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM ocenjuje WHERE majstor_Email0='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   public function obrisiSliku($email)
   {
       $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM fajl_u_bazi WHERE email_korisnika='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   public  function obrisiPrijaveZaPosao($email)
   {
       $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM prijava_za_posao WHERE majstor_Email3='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   
   public function obrisiPorukeMajstor($email)
   {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM razmena_poruka WHERE majstor_Email0='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   
   public function obrisiMajstora($email)
   {
       $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM majstor WHERE majstor_Email='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
       
   }
   
   public function obrisiMusteriju($email)
   {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM musterija WHERE musterija_Email='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   
   public function obrisiPorukeMusterije($email)
   {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM razmena_poruka WHERE musterija_Email1='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   public function obrisiKomentareMusterija($email)
   {
       $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM ostavljanje_komentara WHERE musterija_Email0='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }   
   }
   
   public function obrisiOceneMusterija($email)
   {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM ocenjuje WHERE musterija_Email1='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   
   public function obrisiOglaseMusterija($email)
   {
      $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM oglas WHERE musterija_Email5='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   
   public function obrisiPrijaveZaPosaoMusterija($email)
   {
       $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM prijava_za_posao WHERE musterija_Email5='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
   
   
    public function vratiOglasPoId($id)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM oglas WHERE id='$id'");
            $ogl=null;;
            if($res){

                while($row=$res->fetch_assoc()){
                   $ogl= new Oglas($row["tekst_oglasa"],$row["datum"],$row["adresa"], 
                            $row["vrsta_posla_zanata"],$row["musterija_Email5"],$row["mesto6"]);
                    $ogl->dodajMajstora($row["majstor_koji_radi_email"]);
                }
                $res->close();
                return $ogl;
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
    
    public function novaPrijavaOglasa($id, $razlog)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO prijava_nepozeljnih__oglasa (majstor_Email0, vrsta_posla_zanata3) VALUES ('$id', '$razlog');");
            if($res){
                
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
    
    public function novaPrijavaProfila($id, $razlog)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO prijava_nezeljenih_profila (majstor_Email0, prijavljeni_profil) VALUES ('$razlog', '$id');");
            if($res){
                
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

    public function vratiSveOglase()
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM oglas ORDER BY datum DESC");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                    $niz[$row["id"]]= new Oglas($row["tekst_oglasa"],$row["datum"],$row["adresa"], 
                            $row["vrsta_posla_zanata"],$row["musterija_Email5"],$row["mesto6"]);
                    
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
    
    public function vratiOglasePoMestu($mesto)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM oglas WHERE mesto6='$mesto'");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                   $niz[$row["id"]]= new Oglas($row["tekst_oglasa"],$row["datum"],$row["adresa"], 
                            $row["vrsta_posla_zanata"],$row["musterija_Email5"],$row["mesto6"]);
                    
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
    
    public function vratiOglasePoKategoriji($kat)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM oglas WHERE vrsta_posla_zanata='$kat'");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                  $niz[$row["id"]]= new Oglas($row["tekst_oglasa"],$row["datum"],$row["adresa"], 
                            $row["vrsta_posla_zanata"],$row["musterija_Email5"],$row["mesto6"]);
                    
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
    public function vratiOglasePoKategorijiIMestu($mesto, $kat)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("SELECT * FROM oglas WHERE  mesto6='$mesto' AND  vrsta_posla_zanata='$kat'");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                    $niz[$row["id"]]= new Oglas($row["tekst_oglasa"],$row["datum"],$row["adresa"], 
                            $row["vrsta_posla_zanata"],$row["musterija_Email5"],$row["mesto6"]);
                    
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
    public function obrisiOglas($id)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM oglas WHERE id='$id'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    
    public function obrisiNezeljeniOglas($id)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM prijava_nepozeljnih__oglasa WHERE majstor_Email0='$id';");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    public function obrisiNezeljeniProfil($id)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM prijava_nezeljenih_profila WHERE prijavljeni_profil='$id';");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    
    
    public function vratiOglaseMusterije($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("SELECT * FROM oglas WHERE musterija_Email5='$email'");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                    $niz[$row["id"]]= new Oglas($row["tekst_oglasa"],$row["datum"],$row["adresa"], 
                            $row["vrsta_posla_zanata"],$row["musterija_Email5"],$row["mesto6"]);
                    
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
    public function oglasi()
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM oglas WHERE datum>(CURDATE()-INTERVAL 5 DAY)");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                    $niz[$row["id"]]= new Oglas($row["tekst_oglasa"],$row["datum"],$row["adresa"], 
                            $row["vrsta_posla_zanata"],$row["musterija_Email5"],$row["mesto6"]);
                    
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
    public function majstor($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM majstor WHERE majstor_Email ='$email'");
            $Majstor=NULL;
            if($res){
                
                
                if($row=$res->fetch_assoc()){
                   $Majstor = new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                            $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                            $row["vreme_subota"], $row["vreme_nedelja"],$row["adresa"],  $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"],$row["izlazak_na_teren"],
                            $row["dostupnost_za_rad"], $row["online"]);
                   //var_dump($Majstor);
                    
                }
                $res->close();
                return $Majstor;
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
    public function vratiKompletnoMajstor($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM majstor WHERE majstor_Email ='$email'");
            $Majstor=NULL;
            if($res){
                
                
                if($row=$res->fetch_assoc()){
                   $Majstor = new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                            $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                            $row["vreme_subota"], $row["vreme_nedelja"],$row["izlazak_na_teren"],  $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"],$row["izlazak_na_teren"],
                            $row["dostupnost_za_rad"], $row["online"]);
                   //var_dump($Majstor);
                   $zanati=$this->vratiZanateMajstora($Majstor->majstor_Email);
                    $Majstor->dodajSveZanate($zanati);
                    $lokacije=  $this->vratiGradoveMajstora($Majstor->majstor_Email);
                   // var_dump($lokacije);
                    $Majstor->dodajSveLokacije($lokacije);
                    $Majstor->ocena=  $this->prosecnaOcena($Majstor->majstor_Email);
                    $komentari=  $this->vratiKomentare($email);
                    $Majstor->komentari=$komentari;
                }
                $res->close();
                return $Majstor;
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

    public function vratiNajboljegOcenjenogMajstora()
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT majstor_Email0, musterija_Email1, MAX(o) as m 
        FROM ( 
         SELECT majstor_Email0, musterija_Email1 , ROUND(AVG(ocena),2) as o 
         FROM ocenjuje GROUP BY majstor_Email0 
          ) ocenjuje 
        GROUP BY majstor_Email0 ORDER BY m DESC");
            $niz;
            if($res){
                
                
                if($row=$res->fetch_assoc()){
                    $niz = new Ocenjuje($row["majstor_Email0"],$row["musterija_Email1"],$row["m"]);
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
    
    public function vratiGradoveMajstora($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM radi_na WHERE majstor_Email0='$email'");
            $zanat=null;
            $niz=array();
            if($res){
                
                
                while($row=$res->fetch_assoc()){
                    array_push($niz, new Lokacija($row["mesto1"]));
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
     public function vratiPrijavljeneOglase()
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM prijava_nepozeljnih__oglasa");
            $zanat=null;
            $niz=array();
            if($res){
                
                
                while($row=$res->fetch_assoc()){
                    array_push($niz, new PrijavljeniOglasi($row["majstor_Email0"], $row["vrsta_posla_zanata3"]));
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
    
    public function vratiPrijavljeneProfile()
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM prijava_nezeljenih_profila");
            $zanat=null;
            $niz=array();
            if($res){
                
                
                while($row=$res->fetch_assoc()){
                    array_push($niz, new PrijavljeniProfili($row["prijavljeni_profil"], $row["majstor_Email0"]));
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
    public function vratiGradove()
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM lokacija");
            $zanat=null;
            $niz=array();
            if($res){
                
                
                while($row=$res->fetch_assoc()){
                    array_push($niz, new Lokacija($row["mesto"]));
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
    public function vratiZanateMajstora($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM poseduje_zanate WHERE majstor_Email0='$email'");
            
            $niz=array();
            if($res){
                while($row=$res->fetch_assoc()){
                    array_push($niz, new Zanat($row["tip1"]));
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

    public function vratiZanate()
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM zanat");
            $zanat=null;
            $niz=array();
            if($res){
                
                
                while($row=$res->fetch_assoc()){
                    array_push($niz, new Zanat($row["tip"]));
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
    public static function vratiMajstora($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM majstor WHERE majstor_Email = '$email'");
            $majstor=null;
            if($res){
                $row=array();
                
                if($row=$res->fetch_assoc()){
                    $majstor=new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                                                                                    $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                                                                                 $row["vreme_subota"], $row["vreme_nedelja"], $row["izlazak_na_teren"], $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"], 
                                                                                    $row["dostupnost_za_rad"], $row["online"]);
                    $ocena=$this->prosecnaOcena($majstor->majstor_Email);
                    $majstor->dodajOcenu($ocena);
                    return $majstor;  
                }
                $res->close();
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
    
    public function onlineMajstori()//majstori dostupni za rad
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM majstor WHERE online='DA'");
            $majstori=array();
            $majstor=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $majstor=new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                                                                                    $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                                                                                 $row["vreme_subota"], $row["vreme_nedelja"], $row["izlazak_na_teren"], $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"], 
                                                                                    $row["dostupnost_za_rad"], $row["online"]);
                    
                    $majstori[]=$majstor;
                }
                $res->close();
                return $majstori;
                
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
    public static function vratiSveMajstore() //vraca sve majstore koji postoje u bazi
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM majstor");
            $majstori=array();
            $majstor=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $majstor=new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                                                                                    $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                                                                                 $row["vreme_subota"], $row["vreme_nedelja"], $row["izlazak_na_teren"], $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"], 
                                                                                    $row["dostupnost_za_rad"], $row["online"]);
                    
                    $majstori[]=$majstor;
                }
                $res->close();
                return $majstori;
                
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
    public function vratiSveMajstorePoLokaciji($lok) //vraca sve majstore koji postoje u bazi
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM radi_na WHERE mesto1='$lok'");
            $majstori=array();
            $majstor=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $email=$row["majstor_Email0"];
                    
                    $majstor=$this->majstor($email);
                    
                    $ocena=$this->prosecnaOcena($majstor->majstor_Email);
                    $majstor->dodajOcenu($ocena);
                    $majstori[]=$majstor;
                }
                 $res->close();
                return $majstori;
               
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
    
   public static function vratiSveMajstorePoZanatu($zanat)
   {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM poseduje_zanate WHERE tip1='$zanat'");
            $majstori=array();
            $majstor=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $majstor=new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                                                                                    $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                                                                                 $row["vreme_subota"], $row["vreme_nedelja"], $row["izlazak_na_teren"], $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"], 
                                                                                    $row["dostupnost_za_rad"], $row["online"]);
                    $ocena=$this->prosecnaOcena($majstor->majstor_Email);
                    $majstor->dodajOcenu($ocena);
                    $majstori[]=$majstor;
                }
                $res->close();
                return $majstori;
                
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
    
    public function prosecnaOcena($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT ROUND(AVG(ocena),2) as prosek FROM ocenjuje WHERE majstor_Email0 = '$email'");
            $prosek=0;
            if($res){
                $row=array();
                if($row=$res->fetch_assoc()){
                    $prosek=$row["prosek"];
                    return $prosek;
                }
                $res->close();
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
    
    public  function dajOcenu($emailMajstor, $emailMusterija, $ocena)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO ocenjuje VALUES (null,'$emailMajstor', '$emailMusterija', '$ocena')");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    public function vratiMusteriju($email){
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM musterija WHERE musterija_Email = '$email'");
            $musterija=null;
            if($res){
                
                
                if($row=$res->fetch_assoc()){
                    $musterija=new Musterija($row["musterija_Email"], $row["password"], $row["ime"], $row["prezime"],
                    $row["kontakt"], $row["lokacija"],$row["musterija_hint_pitanje"], 
                    $row["musterija_hint_odgovor"]);
                    
                                                                                  
                }
               
                $res->close();
                return $musterija;  
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
    
    public static function majstorRegistrovanje(Majstor $majstor) //pod uslovom da smo podatke o majstoru pokupili iz forme
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO majstor VALUES('$majstor->majstor_Email', '$majstor->password', '$majstor->ime', '$majstor->prezime', '$majstor->kontakt',"
                    . "                                   '$majstor->kvalifikacije', '$majstor->vreme_radni_dan', '$majstor->vreme_subota', '$majstor->vreme_nedelja',"
                    . "                                    '$majstor->adresa', '$majstor->majstor_hint_pitanje', '$majstor->majstor_hint_odgovor', '$majstor->izlazak_na_teren', '$majstor->dostupnost_za_rad', '$majstor->online')");
                    
        
            if($res)
                $con->close ();
            else{
                 if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    public function musterijaRegistrovanje(Musterija $musterija)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO `musterija` (musterija_Email,password,ime,prezime,kontakt,lokacija,musterija_hint_pitanje,musterija_hint_odgovor) "
                    . " VALUES('$musterija->musterija_Email', '$musterija->password', '$musterija->ime', '$musterija->prezime', '$musterija->kontakt',"
                    . "'$musterija->lokacija',  '$musterija->musterija_hint_pitanje', '$musterija->musterija_hint_odgovor')");
        
            if($res)
                $con->close ();
            else{
                 if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }




public function vratiPorukeMajstor ($majstor_email) //sve poruke za jednog majstora
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM razmena_poruka WHERE majstor_Email0='$majstor_email'");
            $poruke=array();
            $poruka=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $poruka=new Poruka($row["majstor_Email0"], $row["musterija_Email1"], $row["tekst_poruke"], $row["datum_slanja_poruke"], $row["posiljaoc"]);
                    
                    $poruke[]=$poruka;
                }
                $res->close();
                return $poruke;
                
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
    
    public function vratiPorukeMusterija ($musterija_email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM razmena_poruka WHERE musterija_Email1='$musterija_email'");
            $poruke=array();
            $poruka=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $poruka=new Poruka($row["majstor_Email0"], $row["musterija_Email1"], $row["tekst_poruke"], $row["datum_slanja_poruke"], $row["posiljaoc"]);
                    
                    $poruke[]=$poruka;
                }
                $res->close();
                return $poruke;
                
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
    
    public function vratiKonverzaciju ($majstor, $musterija)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM razmena_poruka WHERE musterija_Email1='$musterija' and majstor_Email0='$majstor' ORDER BY datum_slanja_poruke ASC");
            $poruke=array();
            $poruka=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $poruka=new Poruka($row["majstor_Email0"], $row["musterija_Email1"], $row["tekst_poruke"], $row["datum_slanja_poruke"], $row["posiljaoc"]);
                    
                    $poruke[]=$poruka;
                }
                $res->close();
                return $poruke;
                
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
    
    public function vratiRazgovoreZaMusteriju($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM razmena_poruka WHERE musterija_Email1='$email' GROUP BY majstor_Email0 ORDER BY datum_slanja_poruke DESC");
          // $res=$con->query(" SELECT * FROM ( SELECT majstor_Email0, musterija_Email1, datum_slanja_poruke, tekst_poruke, posiljaoc, MAX(id), id FROM razmena_poruka GROUP BY datum_slanja_poruke DESC) as ids GROUP BY majstor_Email0
            $poruke=array();
            $poruka=null;
           
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $poruka=new Poruka($row["majstor_Email0"], $row["musterija_Email1"], $row["tekst_poruke"], $row["datum_slanja_poruke"], $row["posiljaoc"]);
                    /*$majstori[]=new  Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                            $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                            $row["vreme_subota"], $row["vreme_nedelja"],$row["adresa"],  $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"],$row["izlazak_na_teren"],
                            $row["dostupnost_za_rad"], $row["online"]);*/
                    $poruke[]=$poruka;
                    
                    
                }
                return $poruke;
                
                
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
    
    public function vratiRazgovoreZaMajstora ($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM razmena_poruka WHERE majstor_Email0='$email' GROUP BY musterija_Email1 ORDER BY datum_slanja_poruke DESC");
          // $res=$con->query(" SELECT * FROM ( SELECT majstor_Email0, musterija_Email1, datum_slanja_poruke, tekst_poruke, posiljaoc, MAX(id), id FROM razmena_poruka GROUP BY datum_slanja_poruke DESC) as ids GROUP BY majstor_Email0
            $poruke=array();
            $poruka=null;
           
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $poruka=new Poruka($row["majstor_Email0"], $row["musterija_Email1"], $row["tekst_poruke"], $row["datum_slanja_poruke"], $row["posiljaoc"]);
                    /*$majstori[]=new  Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                            $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                            $row["vreme_subota"], $row["vreme_nedelja"],$row["adresa"],  $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"],$row["izlazak_na_teren"],
                            $row["dostupnost_za_rad"], $row["online"]);*/
                    $poruke[]=$poruka;
                    
                    
                }
                return $poruke;
                
                
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
    
    public function posaljiPoruku(Poruka $p)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO razmena_poruka VALUES (NULL,'$p->majstor_email0', '$p->musterija_email1', NOW(), '$p->tekst_poruke', '$p->posiljaoc')");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    public function obrisiZanateMajstora($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM poseduje_zanate WHERE majstor_Email0='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    public  function updateZanateMajstora($email, $stariZanat, $noviZanat)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("UPDATE poseduje_zanate SET tip1='$noviZanat' WHERE majstor_Email0='$email'AND tip1='$stariZanat'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    
    public function upisiZanateMajstora($email, $zanat)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("INSERT INTO poseduje_zanate VALUES (NULL,'$email', '$zanat')");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    public function daLiJeAdmin($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM admin WHERE imejl='$email'");
            $da=false;
           
            if($res){
                 if($row=$res->fetch_assoc()){
                     $da=true;
                 }
                 return $da;
            }
             else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }    
    }
     public function daLiJeMajstor($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM majstor WHERE majstor_Email='$email'");
            $da=false;
           
            if($res){
                 if($row=$res->fetch_assoc()){
                     $da=true;
                 }
                 return $da;
            }
             else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }    
    }
    
    public function daLiJeMusterija($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM musterija WHERE musterija_Email='$email'");
            $da=false;
           
            if($res){
                 if($row=$res->fetch_assoc()){
                     $da=true;
                 }
                 return $da;
            }
             else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }    
    }
     public function logAdmina($email, $pas) {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM admin WHERE imejl='$email'  AND lozinka='$pas'  ");
            $da=false;
           
            if($res){
                 if($row=$res->fetch_assoc()){
                     $da=true;
                 }
                 return $da;
            }
             else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }    
        
    }
    public function logMajstor($email, $pas)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM majstor WHERE majstor_Email='$email' AND password='$pas' ");
            $da=false;
           
            if($res){
                 if($row=$res->fetch_assoc()){
                     $da=true;
                 }
                 return $da;
            }
             else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }    
    }
    
    public function logMusterija($email, $pas) {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM musterija WHERE musterija_Email='$email'  AND password='$pas'  ");
            $da=false;
           
            if($res){
                 if($row=$res->fetch_assoc()){
                     $da=true;
                 }
                 return $da;
            }
             else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }    
        
    }
    
    public function vratiMajstorePoKriterijumima($lokacija, $kategorija, $izlazakNaTeren)
    {
                $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT DISTINCT * FROM majstor, radi_na, poseduje_zanate WHERE majstor.majstor_Email=radi_na.majstor_Email0 AND majstor.majstor_Email=poseduje_zanate.majstor_Email0 AND poseduje_zanate.tip1='$kategorija' AND radi_na.mesto1='$lokacija' AND majstor.izlazak_na_teren='$izlazakNaTeren'");
            $majstori=array();
            $majstor=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $majstor=new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                                                                                    $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                                                                                 $row["vreme_subota"], $row["vreme_nedelja"], $row["izlazak_na_teren"], $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"], 
                                                                                    $row["dostupnost_za_rad"], $row["online"]);
                    $zanati=$this->vratiZanateMajstora($majstor->majstor_Email);
                    $majstor->dodajSveZanate($zanati);
                    $lokacije=  $this->vratiGradoveMajstora($majstor->majstor_Email);
                   // var_dump($lokacije);
                    $majstor->dodajSveLokacije($lokacije);
                    $majstor->ocena=  $this->prosecnaOcena($majstor->majstor_Email);
                    $majstori[]=$majstor;
                }
                $res->close();
                return $majstori;
                
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
    
    public function upisiGradoveZaMajstora($email, $grad)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("INSERT INTO radi_na VALUES (NULL,'$email', '$grad')");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    public function updateGradoveMajstora($email, $stariGrad, $noviGrad)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("UPDATE radi_na SET mesto1='$noviGrad' WHERE majstor_Email0='$email' AND mesto1='$stariGrad'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    public function obrisiGradoveMajstora($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM radi_na WHERE majstor_Email0='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    public function vratiPoImenu($ime, $prezime)
    {
                  $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT * FROM majstor WHERE ime='$ime' AND prezime='$prezime'");
            $majstori=array();
            $majstor=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $majstor=new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                                                                                    $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                                                                                 $row["vreme_subota"], $row["vreme_nedelja"], $row["izlazak_na_teren"], $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"], 
                                                                                    $row["dostupnost_za_rad"], $row["online"]);
                    $zanati=$this->vratiZanateMajstora($majstor->majstor_Email);
                    $majstor->dodajSveZanate($zanati);
                    $lokacije=  $this->vratiGradoveMajstora($majstor->majstor_Email);
                   // var_dump($lokacije);
                    $majstor->dodajSveLokacije($lokacije);
                    $majstor->ocena=  $this->prosecnaOcena($majstor->majstor_Email);
                    $majstori[]=$majstor;
                }
                $res->close();
                return $majstori;
                
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
     public function vratiKategorije()
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM lokacija");
            $zanat=null;
            $niz=array();
            if($res){
                
                
                while($row=$res->fetch_assoc()){
                    array_push($niz, new Lokacija($row["mesto"]));
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
    
    public function  dodajNoviOglas(Oglas $o)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO oglas VALUES(null, '$o->tekst_oglasa', '$o->datum', '$o->adresa', '$o->vrsta_posla', null, '$o->vlasnik', '$o->mesto')");
        
            if($res)
                $con->close ();
            else{
                 if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    
    public function vratiKomentare($email)
    {
        
                  $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT * FROM ostavljanje_komentara WHERE majstor_Email1='$email'");
            $komentari=array();
            $komentar=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $komentar= new Komentar($row["musterija_Email0"], $row["komentar_poz_tekst"], $row["komentar_neg_tekst"]);
                    
                    $komentari[]=$komentar;
                }
                $res->close();
                return $komentari;
                
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
    
    public function dodajKomentar(Komentar $k,$emailM )
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO ostavljanje_komentara VALUES(null, '$k->posiljaoc', '$emailM', '$k->komentar_tekst_pozitivan', '$k->komentar_tekst_negativan')");
        
            if($res)
            {$con->close ();
          
            }
            else{
                 if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    public function proveriDaLiJeOcenio($musterija, $majstor)
    {
        
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM ocenjuje WHERE majstor_Email0='$majstor' AND musterija_Email1='$musterija'");
            $da=false;
           
            if($res){
                 if($row=$res->fetch_assoc()){
                     $da=true;
                 }
                 return $da;
            }
             else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }    
    }
    
   public function prijaviMajstoraZaPosao($emailMajstora, $idOglasa, Oglas $oglas)
   {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO prijava_za_posao VALUES(null, '$oglas->vlasnik', '$oglas->datum', '$oglas->adresa', '$oglas->vrsta_posla', '$emailMajstora', '$idOglasa')");
        
            if($res)
            {$con->close ();
          
            }
            else{
                 if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
   }
    
   public function prikaziPrijavljeneMajstore($idOglasa)
   {
       
                  $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT * FROM prijava_za_posao WHERE idOglasa='$idOglasa'");
            $majstori=array();
            $majstor=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $majstor= $this->vratiKompletnoMajstor($row["majstor_Email3"]);
                    
                    $majstori[]=$majstor;
                }
                $res->close();
                return $majstori;
                
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
    public function dodajMajstoraKojiRadi($emailMajstor, $idOglasa)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("UPDATE oglas SET majstor_koji_radi_email='$emailMajstor' WHERE id='$idOglasa'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    
    public function prijaveZaPosaoMajstora($emailM)
    {
        
                  $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT * FROM prijava_za_posao,oglas WHERE prijava_za_posao.idOglasa=oglas.id AND majstor_Email3='$emailM' ORDER BY oglas.datum DESC");
            $oglasi=array();
            $oglas=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $oglas= $this->vratiOglasPoId($row["idOglasa"]);
                    
                    $oglasi[$row["idOglasa"]]=$oglas;
                }
                $res->close();
                return $oglasi;
                
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
    public function daLiJeMajstorPrijavljenZaOglas($emailM, $idOglasa)
    {
        
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT * FROM prijava_za_posao WHERE majstor_Email3='$emailM' AND idOglasa='$idOglasa'");
            $da=false;
            if($res){
                
                
                if($row=$res->fetch_assoc()){
                   $da=true;
                }
                $res->close();
                return $da;
                
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
    
    public function vratiPrijave($idOglas)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT * FROM prijava_za_posao WHERE idOglasa='$idOglas'");
            $email="";
            $prijave=array();
            if($res){
                
                
                while($row=$res->fetch_assoc()){
                   $email=$row["majstor_Email3"];
                   $prijave[]=$email;
                }
                $res->close();
                return $prijave;
                
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
    
    public function offlineMajstor($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query
            ("UPDATE majstor SET online='NE' WHERE majstor_Email = '$email'");
            
            if($res){
                
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
    
    public function onlajnMajstor($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query
            ("UPDATE majstor SET online='DA' WHERE majstor_Email = '$email'");
            
            if($res){
                
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
public function vratiDogadjaje($datum, $email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
         $con->set_charset('utf8');
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
         $con->set_charset('utf8');
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM dogadjaj WHERE emailKorisnika='$email' AND datum>=NOW()-1");
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
    public function vratiDatumeEmail($email)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
          $con->set_charset('utf8');
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT DISTINCT datum FROM dogadjaj WHERE emailKorisnika='$email' AND datum>=NOW()-1 ORDER BY datum, vreme");
            $niz=array();
            if($res){

                while($row=$res->fetch_assoc()){
                    $niz[]= $row["datum"];
                    
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
      public function dodajDogadjaj(Dogadjaj $d)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
         $con->set_charset('utf8');
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("INSERT INTO dogadjaj VALUES (null, '$d->datum', '$d->emailKorisnika', '$d->vreme', '$d->opisDogadjaja');");
            if($res){
                
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
    public function obrisiDogadjaj($id)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM dogadjaj WHERE id='$id'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }   
    }
    public  function izmeniDogadjaj($id, Dogadjaj $d)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("UPDATE dogadjaj SET datum='$d->datum', emailKorisnika='$d->emailKorisnika', vreme='$d->vreme', nazivDogadjaja='$d->opisDogadjaja' WHERE id='$id'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }   
    }
    public function  obrisiDogadjajeMajstora($email)
    {
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM dogadjaj WHERE emailKorisnika='$email'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }   
    }
    
    public function vratiMajstorePoZanatuILokaciji($z, $lokacija)
    {
                  $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query(" SELECT * FROM majstor, radi_na, poseduje_zanate WHERE majstor.majstor_Email=radi_na.majstor_Email0 AND majstor.majstor_Email=poseduje_zanate.majstor_Email0 AND poseduje_zanate.tip1='$z' AND radi_na.mesto1='$lokacija'");
            $majstori=array();
            $majstor=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    $majstor=new Majstor($row["majstor_Email"], $row["password"], $row["ime"], $row["prezime"],
                                                                                    $row["kontakt"], $row["kvalifikacije"],$row["adresa"], $row["vreme_radni_dan"],
                                                                                 $row["vreme_subota"], $row["vreme_nedelja"], $row["izlazak_na_teren"], $row["majstor_hint_pitanje"], $row["majstor_hint_odgovor"], 
                                                                                    $row["dostupnost_za_rad"], $row["online"]);
                    $zanati=$this->vratiZanateMajstora($majstor->majstor_Email);
                    $majstor->dodajSveZanate($zanati);
                    $lokacije=  $this->vratiGradoveMajstora($majstor->majstor_Email);
                   // var_dump($lokacije);
                    $majstor->dodajSveLokacije($lokacije);
                    $majstor->ocena=  $this->prosecnaOcena($majstor->majstor_Email);
                    $majstori[]=$majstor;
                }
                $res->close();
                return $majstori;
                
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
    
    public function vratiPorukeZaAdmina()
    {
          $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT DISTINCT * FROM razmena_poruka WHERE majstor_Email0='admin' OR musterija_Email1='admin' ORDER BY datum_slanja_poruke DESC");
            $poruke=array();
            $poruka=null;
            if($res){
                $row=array();
                
                while($row=$res->fetch_assoc()){
                    if($row["majstor_Email0"]=="admin")
                        $poruka=$row["musterija_Email1"];
                    else
                        $poruka=$row["majstor_Email0"];
                    if(!in_array($poruka, $poruke))
                        $poruke[]=$poruka;
                }
                $res->close();
                return $poruke;
                
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
    
    //-------------------------SECTION ZA SLIKE --------------------------//
    function vrati_sve_fajlove_za_prikaz() {
       
        $konekcija = new mysqli(self::host, self::username, self::password, self::dbName);
       
        $konekcija->set_charset('utf8');
        if ($konekcija->connect_errno) {
            
            print ("Greška pri povezivanju sa bazom podataka ($konekcija->connect_errno): $konekcija->connect_error");
        } else {
           
            $naredba = $konekcija->prepare(
                    "SELECT id, naziv, tip, velicina, redni_broj, putanja FROM fajl_u_bazi");
            
            $rezultat = $naredba->execute();
           
            $naredba->bind_result($id, $naziv, $tip, $velicina, $redniBroj, $putanja);
            if ($rezultat) {
                $niz = array();
                
                while ($naredba->fetch()) {
                   
                    $niz[$id] = new slika($id, $naziv, $tip, $velicina, $redniBroj, $putanja);
                }
                $naredba->close();
                $konekcija->close();
                return $niz;
            } else if ($konekcija->errno) {
               
                print ("Greška pri izvrsenju upita ($konekcija->errno): $konekcija->error");
            } else {
               
                print ("Nepoznata greška pri izvrsenju upita");
            }
        }
    }

    
    function vrati_fajl_za_preuzimanje($email) {
        
        $konekcija = new mysqli(self::host, self::username, self::password, self::dbName);
      
        $konekcija->set_charset('utf8');
        if ($konekcija->connect_errno) {
           
            print ("Greška pri povezivanju sa bazom podataka ($konekcija->connect_errno): $konekcija->connect_error");
        } else {
           
            $naredba = $konekcija->prepare("SELECT id, naziv, tip, velicina, redni_broj, putanja, email_korisnika FROM fajl_u_bazi WHERE email_korisnika=?");
           
            $naredba->bind_param("s", $email);
           
            $rezultat = $naredba->execute();
         
            $naredba->bind_result($idFromDb, $naziv, $tip, $velicina, $redniBroj, $putanja);
            $toReturn = NULL;
            if ($rezultat) {
               
                if ($naredba->fetch()) {
                  
                    $toReturn = new slika($idFromDb, $naziv, $tip, $velicina, $redniBroj, $putanja);
                }
                $naredba->close();
                $konekcija->close();
                $fp=fopen($toReturn->putanja, "r");
                if ($fp) {
                    $toReturn->sadrzaj = fread($fp, $toReturn->velicina);
                    fclose($fp);
                }
                return $toReturn;
            } else if ($konekcija->errno) {
               
                print ("Greška pri izvrsenju upita ($konekcija->errno): $konekcija->error");
            } else {
               
                print ("Nepoznata greška pri izvrsenju upita");
            }
        }
    }
  
    // Dodaje fajl u bazu podataka
    function dodaj_fajl(slika $fajl, $email) {
        $konekcija = new mysqli(self::host, self::username, self::password, self::dbName);

       $konekcija->set_charset('utf8');
        if ($konekcija->connect_errno) {
           
            print ("Greška pri povezivanju sa bazom podataka ($konekcija->connect_errno): $konekcija->connect_error");
        } else {
          
            $naredba = $konekcija->prepare("INSERT INTO fajl_u_bazi (naziv, tip, velicina, putanja, redni_broj, email_korisnika) "
                    . "VALUES (?, ?, ?, ?, ?, ?)");
            // Povezivanje naredbe i parametara za upit. 
            // "i" označava celobrojni tip podataka. 
            // "s" označava string tip podataka.
            // "d" označava realni tip podataka.
            // "b" označava BLOB tip podataka.     
            $naredba->bind_param("ssisis", $fajl->naziv, $fajl->tip, $fajl->velicina, $fajl->putanja, $fajl->redniBroj, $email);

            $rezultat = $naredba->execute();
            
            if (!$rezultat) {
                if ($konekcija->errno) {
                   
                    print ("Greška pri izvrsenju upita ($konekcija->errno): $konekcija->error");
                } else {
                  
                    print ("Nepoznata greška pri izvrsenju upita");
                }
            }
            // Zatvaranje naredbe i konekcije. 
            $naredba->close();
            $konekcija->close();
            return $rezultat;
        }
    }
    
    function vratiSlikuKorisnika($email)
    {
        	
         $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM fajl_u_bazi WHERE email_korisnika='$email'");
            $slika=null;
            
            if($res){
                
                
                if($row=$res->fetch_assoc()){
                   $slika=$row["putanja"];
                }
                $res->close();
                return $slika;
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
   
   public function vratiPrijavljeneOglaseZaMajstora($emailM)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            $res=$con->query("SELECT * FROM prijava_za_posao,oglas WHERE prijava_za_posao.idOglasa=oglas.id AND majstor_Email3='$emailM' ORDER BY oglas.datum DESC");
            $idOglasa="";
            $oglas=null;
            $oglasi=array();
            if($res){
                
                
                while($row=$res->fetch_assoc()){
                   $idOglasa=$row["idOglasa"];
                  $oglas= $this->vratiOglasPoId($idOglasa);
                  $oglasi[$idOglasa]=$oglas;
                }
                $res->close();
                return $oglasi;
                
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
    public function otkaziPrijavuMajstora($emailMajstora, $id)
    {
        $con=new mysqli(self::host, self::username, self::password, self::dbName); 
        if($con->connect_errno){
            print("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else {
            
            $res=$con->query("DELETE FROM prijava_za_posao WHERE majstor_Email3='$emailMajstora' AND idOglasa='$id'");
            
            if($res){
                $con->close();
            }
            else{
               
                if($con->errno)
                    print("Greska pri izvrsenju upita ($con->error)");
                
                else {
                     print("Query failed");
                }
            }
        }
    }
    //----------------------------------------END SECTION --------------------------------------------//
    
}