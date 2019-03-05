<?php

class Poruka {
    public $majstor_email0;
    public $musterija_email1;
    public $tekst_poruke;
    public $datum_slanja_poruke;
	public $posiljaoc;
   
    
    function __construct($majstor, $musterija,$txt, $datum,$sender) {
        $this->majstor_email0=$majstor;
        $this->musterija_email1=$musterija;
        $this->tekst_poruke=$txt;
        $this->datum_slanja_poruke=$datum;
		$this->posiljaoc=$sender;
    }
}