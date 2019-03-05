<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrijavljeniOglasi
 *
 * @author Aleksandar
 */
class PrijavljeniOglasi {
    public $idPrijavljenogOglasa;
    public $razlog;
    
    function __construct($id, $razlog) {
        $this->idPrijavljenogOglasa=$id;
        $this->razlog=$razlog;
    }
}
