<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrijavljeniProfili
 *
 * @author Aleksandar
 */
class PrijavljeniProfili {
    public $idPrijavljenogProfila;
    public $razlog;
    
    function __construct($id, $razlog) {
        $this->idPrijavljenogProfila=$id;
        $this->razlog=$razlog;
    }
}
