<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dogadjaj{
    public $datum;
    public $emailKorisnika;
    public $vreme;
    public $opisDogadjaja;
    
    public function __construct($d, $e, $v, $o) {
        $this->datum=$d;
        $this->emailKorisnika=$e;
        $this->vreme=$v;
        $this->opisDogadjaja=$o;
    }
}