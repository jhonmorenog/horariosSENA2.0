<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bloques
 *
 * @author jhon
 */
abstract class Bloques implements iCRUD {
    private $numeroFicha;
    private $idClase;
    private $dia;
    private $numeroAula;
    private $bloque;
    
    function __construct($numeroFicha, $idClase, $dia, $numeroAula, $bloque) {
        $this->numeroFicha = $numeroFicha;
        $this->idClase = $idClase;
        $this->dia = $dia;
        $this->numeroAula = $numeroAula;
        $this->bloque = $bloque;
    }
    function getNumeroFicha() {
        return $this->numeroFicha;
    }

    function getIdClase() {
        return $this->idClase;
    }

    function getDia() {
        return $this->dia;
    }

    function getNumeroAula() {
        return $this->numeroAula;
    }

    function getBloque() {
        return $this->bloque;
    }

    function setNumeroFicha($numeroFicha) {
        $this->numeroFicha = $numeroFicha;
        return $this;
    }

    function setIdClase($idClase) {
        $this->idClase = $idClase;
        return $this;
    }

    function setDia($dia) {
        $this->dia = $dia;
        return $this;
    }

    function setNumeroAula($numeroAula) {
        $this->numeroAula = $numeroAula;
        return $this;
    }

    function setBloque($bloque) {
        $this->bloque = $bloque;
        return $this;
    }



}
