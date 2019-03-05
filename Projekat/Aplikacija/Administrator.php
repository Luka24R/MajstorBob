<?php

class Administrator {
    public $imejl;
    public $lozinka;
    public $ime;
    public $prezime;
    
    function __construct($imejl, $lozinka, $ime, $prezime) {
        $this->imejl=$imejl;
        $this->lozinka=$lozinka;
        $this->ime=$ime;
        $this->prezime=$prezime;
    }
}
