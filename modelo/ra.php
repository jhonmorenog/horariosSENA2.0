<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ra
 *
 * @author jhon
 */
abstract class RA extends Competencias {
    private $codigo;
    private $denominacion;
    
    
    function __construct($codigo, $denominacion, $codigoCompetencia) {
        $this->codigo = $codigo;
        $this->denominacion = $denominacion;
        setCodigoCompetencia($codigoCompetencia);
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getDenominacion() {
        return $this->denominacion;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
        return $this;
    }

    function setDenominacion($denominacion) {
        $this->denominacion = $denominacion;
        return $this;
    }



}
