<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of programas
 *
 * @author jhon
 */
abstract class Programas implements iCRUD {
    private $codigo;
    private $denominacion;
    private $id;
    
    function __construct($codigo, $denominacion, $id) {
        $this->codigo = $codigo;
        $this->denominacion = $denominacion;
        $this->id = $id;
    }
    function getCodigo() {
        return $this->codigo;
    }

    function getDenominacion() {
        return $this->denominacion;
    }

    function getId() {
        return $this->id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
        return $this;
    }

    function setDenominacion($denominacion) {
        $this->denominacion = $denominacion;
        return $this;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }



    
}
