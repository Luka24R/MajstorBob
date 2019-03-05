<?php



class Oglas {
    
    public $majstor_koji_radi_email;
    public $vrsta_posla;
    public $adresa;
	public $datum;
	public $tekst_oglasa;
    public $mesto;
    public $vlasnik;
    
    public $prijavljeniMajstori=array();
    
    function __construct($txt,$dat,$adr,$vrP,$vl,$me) {
       
        $this->vrsta_posla=$vrP;
        $this->adresa=$adr;
		$this->datum=$dat;
		$this->tekst_oglasa=$txt;
                $this->vlasnik=$vl;
        $this->mesto=$me;
    }
    function dodajMajstora($emailM)
    {
        $this->majstor_koji_radi_email=$emailM;
    }
    
    public function dodajPrijavljeneMajstore($email)
    {
        $this->prijavljeniMajstori[]=$email;
    }
}