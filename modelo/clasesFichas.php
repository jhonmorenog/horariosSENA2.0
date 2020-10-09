<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clasesFichas
 *
 * @author jhon
 */
abstract class ClasesFichas implements iCRUD {
    private $numeroFicha;
    private $idClase;
    
    function __construct($numeroFicha, $idClase) {
        $this->numeroFicha = $numeroFicha;
        $this->idClase = $idClase;
    }
    
    function getNumeroFicha() {
        return $this->numeroFicha;
    }

    function getIdClase() {
        return $this->idClase;
    }

    function setNumeroFicha($numeroFicha) {
        $this->numeroFicha = $numeroFicha;
        return $this;
    }

    function setIdClase($idClase) {
        $this->idClase = $idClase;
        return $this;
    }



}
