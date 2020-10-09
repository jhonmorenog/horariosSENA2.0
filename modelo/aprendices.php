<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aprendices
 *
 * @author jhon
 */
abstract  class Aprendices implements iCRUD {
   private $documento;
   private $numeroFicha;
   function __construct($documento, $numeroFicha) {
       $this->documento = $documento;
       $this->numeroFicha = $numeroFicha;
   }
   
   function getDocumento() {
       return $this->documento;
   }

   function getNumeroFicha() {
       return $this->numeroFicha;
   }

   function setDocumento($documento) {
       $this->documento = $documento;
       return $this;
   }

   function setNumeroFicha($numeroFicha) {
       $this->numeroFicha = $numeroFicha;
       return $this;
   }

}
