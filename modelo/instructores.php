<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of intructores
 *
 * @author jhon
 */
abstract class  Instructores extends Usuarios {
    private $id;
    
    function __construct($id, $documento) {
        setDocumento($documento);
        $this->id = $id;
    }
   
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }


}
