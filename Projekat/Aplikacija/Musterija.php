<?php

include_once 'slika.php';
class Musterija {
    public $musterija_Email;
    public $password;
    public $ime;
	public $prezime;
	public $kontakt;
	public $lokacija;
	public $musterija_hint_pitanje;
	public $musterija_hint_odgovor;
    public $slika;
    public function dodajSliku(slika $s)
    {
        $this->slika=$s;
    }
    function __construct($mE, $ps, $ime, $prez, $kont, $lok, $mhp, $mho) {
        $this->musterija_Email=$mE;
		$this->password=$ps;
		$this->ime=$ime;
		$this->prezime=$prez;
		$this->kontakt=$kont;
		$this->lokacija=$lok;
		$this->musterija_hint_pitanje=$mhp;
		$this->musterija_hint_odgovor=$mho;
        
    }  
}