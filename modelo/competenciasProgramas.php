<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of competenciasProgramas
 *
 * @author jhon
 */
abstract class CompetenciasProgramas implements iCRUD {
    private $codigoPrograma;
    private $codigoCompetencia;
    function __construct($codigoPrograma, $codigoCompetencia) {
        $this->codigoPrograma = $codigoPrograma;
        $this->codigoCompetencia = $codigoCompetencia;
    }
    function getCodigoPrograma() {
        return $this->codigoPrograma;
    }

    function getCodigoCompetencia() {
        return $this->codigoCompetencia;
    }

    function setCodigoPrograma($codigoPrograma) {
        $this->codigoPrograma = $codigoPrograma;
        return $this;
    }

    function setCodigoCompetencia($codigoCompetencia) {
        $this->codigoCompetencia = $codigoCompetencia;
        return $this;
    }


}
