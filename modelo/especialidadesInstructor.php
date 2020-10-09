<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of especialidadesInstructor
 *
 * @author jhon
 */
abstract class EspecialidadesInstructor implements iCRUD {
    private $idEspecialidad;
    private $idInstructor;
    
    function __construct($idEspecialidad, $idInstructor) {
        $this->idEspecialidad = $idEspecialidad;
        $this->idInstructor = $idInstructor;
    }
    function getIdEspecialidad() {
        return $this->idEspecialidad;
    }

    function getIdInstructor() {
        return $this->idInstructor;
    }

    function setIdEspecialidad($idEspecialidad) {
        $this->idEspecialidad = $idEspecialidad;
        return $this;
    }

    function setIdInstructor($idInstructor) {
        $this->idInstructor = $idInstructor;
        return $this;
    }



}
