<?php
include_once 'Lokacija.php';
include_once 'Komentar.php';
include_once 'Zanat.php';
include_once 'Oglas.php';

class Majstor {
	public $majstor_Email;
	public $password;
        public $ime;
        public $prezime;
        public $kontakt;
	public $kvalifikacije;
	public $adresa;
	public $vreme_radni_dan;
	public $vreme_subota;
	public $vreme_nedelja;
	public $izlazak_na_teren;
	public $dostupnost_za_rad;
	public $online;
	public $majstor_hint_pitanje;
	public $majstor_hint_odgovor;
	
        
        public $slika;
        public function dodajSliku($s)
        {
            $this->slika=$s;
        }
        public $ocena;
        
	public $prijava_na_oglase=array();
	public $lokacije=array();
	
	public $zanati=array();
        public $komentari=array();
        
        public function dodajLokacije(Lokacija $l)
        { $this->lokacije[]=$l;}
        public function dodajKomentare(Komentar $k)
        { $this->komentari[]=$k;}
        
        public function dodajSveKomentare($kom)
        {
            $this->komentari=$kom;
        }
        public function dodajZanate(Zanat $z)
        {$this->zanati[]=$z;}
        public function  dodajSveZanate($z)
        {
            $this->zanati=$z;
        }
        public function dodajSveLokacije(array $l)
        {
            $this->lokacije=$l;
        }

        public function dodajPrijavljeneOglase(Oglas $o)
        {$this->prijava_na_oglase[]=$o;}

        public function ocenaSet($i)
        { $this->ocena=$i;}
        
    public function __construct($email,$psw,$i,$p,
							$knkt,$kvl,$adr,
							$r_dan,$sub,$ned,$izl_na_ter,
                                                        $pitanje, $odgovor,
							$dost_z_rad,
							$onli) {
                $this->majstor_Email=$email;
		$this->password=$psw;
		$this->ime=$i;
                $this->prezime=$p;
                $this->kontakt=$knkt;
		$this->kvalifikacije=$kvl;
		$this->adresa=$adr;
		$this->vreme_radni_dan=$r_dan;
		$this->vreme_subota=$sub;
		$this->vreme_nedelja=$ned;
		$this->izlazak_na_teren=$izl_na_ter;
		
		
		$this->majstor_hint_pitanje=$pitanje;
                $this->majstor_hint_odgovor=$odgovor;
                
                $this->dostupnost_za_rad=$dost_z_rad;
                $this->online=$onli;
    }
    
    
    
            
    
    
    
    
}
