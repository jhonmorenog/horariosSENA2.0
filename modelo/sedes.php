<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sedes
 *
 * @author jhon
 */
abstract class Sedes implements iCRUD {
    private $id;
    private $nombre;
    private $direccion;
    
    function __construct($id, $nombre, $direccion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }



}
