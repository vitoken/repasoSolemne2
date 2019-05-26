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
    
    
    function __construct($Usuario, $Clave) {
        $this->Usuario = $Usuario;
        $this->Clave = $Clave;
    }
    
    function getUsuario() {
        return $this->Usuario;
    }

    function getClave() {
        return $this->Clave;
    }

    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setClave($Clave) {
        $this->Clave = $Clave;
    }




}
