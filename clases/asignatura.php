<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of asignatura
 *
 * @author Victor
 */
class asignatura {
    //put your code here
    private $Cod_asignatura;
    private $Desc_asignatura;
    private $rut_alumnos;
    
    function __construct($Cod_asignatura, $Desc_asignatura, $rut_alumnos) {
        $this->Cod_asignatura = $Cod_asignatura;
        $this->Desc_asignatura = $Desc_asignatura;
        $this->rut_alumnos = $rut_alumnos;
    }
    
    function getCod_asignatura() {
        return $this->Cod_asignatura;
    }

    function getDesc_asignatura() {
        return $this->Desc_asignatura;
    }

    function getRut_alumnos() {
        return $this->rut_alumnos;
    }

    function setCod_asignatura($Cod_asignatura) {
        $this->Cod_asignatura = $Cod_asignatura;
    }

    function setDesc_asignatura($Desc_asignatura) {
        $this->Desc_asignatura = $Desc_asignatura;
    }

    function setRut_alumnos($rut_alumnos) {
        $this->rut_alumnos = $rut_alumnos;
    }



}
