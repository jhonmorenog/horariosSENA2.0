<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clases
 *
 * @author jhon
 */
abstract class Clases extends Competencias implements iCRUD {
    private $id;
    private $codigoRA;
    private $idInstructor;
    
    function __construct($id, $codigoRA, $idInstructor) {
        $this->id = $id;
        $this->codigoRA = $codigoRA;
        $this->idInstructor = $idInstructor;
    }
    function getId() {
        return $this->id;
    }

    function getCodigoRA() {
        return $this->codigoRA;
    }

    function getIdInstructor() {
        return $this->idInstructor;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setCodigoRA($codigoRA) {
        $this->codigoRA = $codigoRA;
        return $this;
    }

    function setIdInstructor($idInstructor) {
        $this->idInstructor = $idInstructor;
        return $this;
    }


    
}
