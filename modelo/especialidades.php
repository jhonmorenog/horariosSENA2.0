<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of especialidades
 *
 * @author jhon
 */
abstract  class Especialidades implements iCRUD {
    private $id;
    private $especialidad;
    function __construct($id, $especialidad) {
        $this->id = $id;
        $this->especialidad = $especialidad;
    }
    function getId() {
        return $this->id;
    }

    function getEspecialidad() {
        return $this->especialidad;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
        return $this;
    }



}
