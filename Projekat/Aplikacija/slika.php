<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class slika {
 
    public static $folder = "slikeslike\\";
    

    public $id;
    public $naziv;
    public $tip;
    public $velicina;
    public $sadrzaj;
    public $redniBroj;  
    
    public $putanja;   
    public function __construct($id, $naziv, $tip, $velicina, $redniBroj, $putanja = NULL) {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->tip = $tip;
        $this->velicina = $velicina;
        $this->redniBroj = $redniBroj;
        if (is_null($putanja)) {
            
            $this->putanja = slika::$folder . $redniBroj . "_" . $naziv;
        }
        else {
          
            $this->putanja = $putanja;
        }
    }    

}