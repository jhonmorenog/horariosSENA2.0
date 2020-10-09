<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aulas
 *
 * @author jhon
 */
abstract class Aulas extends Sedes implements iCRUD{
    private $numero;
    function __construct($numero) {
        $this->numero = $numero;
    }
    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }



}
