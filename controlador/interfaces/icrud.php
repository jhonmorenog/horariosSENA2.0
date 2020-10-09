<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crud
 *
 * @author jhon
 */
interface iCRUD {
    function guardar();
    function eliminar();
    function actualizar();
    function consultar();
    
}
