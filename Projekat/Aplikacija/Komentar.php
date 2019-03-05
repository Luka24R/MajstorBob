<?php
class Komentar {
    public $komentar_tekst_pozitivan;  
    public $komentar_tekst_negativan;  
    public $posiljaoc;
    public function __construct($pos, $poz, $neg) {
        
        $this->posiljaoc=$pos;
        $this->komentar_tekst_pozitivan=$poz;
        $this->komentar_tekst_negativan=$neg;
    }
    
    
}