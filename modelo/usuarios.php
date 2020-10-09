<?php
@include '../controlador/interfaces/icrud.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarios
 *
 * @author jhon
 */
abstract class Usuarios implements iCRUD {
    private $documento;
    private $pnombre;
    private $snombre;
    private $papellido;
    private $sapellido;
    private $correoElectronico;
    private $clave;
    
    function __construct($documento,$pnombre,$snombre, $papellido,$sapellido,$correoElectronico,$clave) {  
        $this->clave=$clave;
        $this->correoElectronico=$correoElectronico;
        $this->documento=$documento;
        $this->papellido=$papellido;
        $this->pnombre=$pnombre;
        $this->sapellido=$sapellido;
        $this->snombre=$snombre;
    }
    function getDocumento() {
        return $this->documento;
    }

    function getPnombre() {
        return $this->pnombre;
    }

    function getSnombre() {
        return $this->snombre;
    }

    function getPapellido() {
        return $this->papellido;
    }

    function getSapellido() {
        return $this->sapellido;
    }

    function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    function getClave() {
        return $this->clave;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
        return $this;
    }

    function setPnombre($pnombre) {
        $this->pnombre = $pnombre;
        return $this;
    }

    function setSnombre($snombre) {
        $this->snombre = $snombre;
        return $this;
    }

    function setPapellido($papellido) {
        $this->papellido = $papellido;
        return $this;
    }

    function setSapellido($sapellido) {
        $this->sapellido = $sapellido;
        return $this;
    }

    function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
        return $this;
    }

    function setClave($clave) {
        $this->clave = $clave;
        return $this;
    }

    
}
