<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author Victor
 */
class usuario {
    //put your code here
    private $Usuario;
    private $Clave;
    private $Nombre;
    
    function __construct($Usuario, $Clave, $Nombre) {
        $this->Usuario = $Usuario;
        $this->Clave = $Clave;
        $this->Nombre = $Nombre;
    }

    function getUsuario() {
        return $this->Usuario;
    }

    function getClave() {
        return $this->Clave;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setClave($Clave) {
        $this->Clave = $Clave;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }




}
