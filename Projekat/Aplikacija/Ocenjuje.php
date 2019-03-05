<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ocenjuje
 *
 * @author ASUS
 */
class Ocenjuje {
    public $majstor_koji_je_ocenjen;
    public $musterija_koja_je_ocenila;
    public $ocena;
    
    function __construct($mko, $mus, $o) {
        $this->majstor_koji_je_ocenjen=$mko;
        $this->musterija_koja_je_ocenila=$mus;
        $this->ocena=$o;
        
    }   
}
