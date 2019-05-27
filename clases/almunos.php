<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of almunos
 *
 * @author Victor
 */
class almunos {
    //put your code here
    private $rut_alumnos;
    private $Dig_alumnos;
    private $Nom_alumnos;
    
    
       function __construct() {
        
    }
    
    
    function getRut_alumnos() {
        return $this->rut_alumnos;
    }

    function getDig_alumnos() {
        return $this->Dig_alumnos;
    }

    function getNom_alumnos() {
        return $this->Nom_alumnos;
    }

    function setRut_alumnos($rut_alumnos) {
        $this->rut_alumnos = $rut_alumnos;
    }

    function setDig_alumnos($Dig_alumnos) {
        $this->Dig_alumnos = $Dig_alumnos;
    }

    function setNom_alumnos($Nom_alumnos) {
        $this->Nom_alumnos = $Nom_alumnos;
    }

    
    
}
