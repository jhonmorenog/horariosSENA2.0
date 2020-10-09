<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fichas
 *
 * @author jhon
 */
abstract class Fichas extends Programas implements iCRUD {
    private $numero;
    private $jornada;
   
    function __construct($numero, $jornada, $codigoPrograma) {
        $this->numero = $numero;
        $this->jornada = $jornada;
        setCodigo($codigoPrograma);
    }
    function getNumero() {
        return $this->numero;
    }

    function getJornada() {
        return $this->jornada;
    }

    

    function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    function setJornada($jornada) {
        $this->jornada = $jornada;
        return $this;
    }

   



}
