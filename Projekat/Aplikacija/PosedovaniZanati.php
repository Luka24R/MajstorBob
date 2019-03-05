<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of posedovaniZanati
 *
 * @author ASUS
 */
class PosedovaniZanati {
    
    public $majstor_email;
    public $vrsta_posla;
    
    
    function __construct($mkr, $vrP) {
        $this->majstor_email=$mkr;
        $this->vrsta_zanata=$vrP;
        
        
    }   
}
