<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of notas
 *
 * @author Victor
 */
class notas {
    //put your code here
    private $nota_1;
    private $FechaNota1;
    private $Nota2;
    private $FechaNota2;
    private $Cod_Asignatura;
    
    function __construct($nota_1, $FechaNota1, $Nota2, $FechaNota2, $Cod_Asignatura) {
        $this->nota_1 = $nota_1;
        $this->FechaNota1 = $FechaNota1;
        $this->Nota2 = $Nota2;
        $this->FechaNota2 = $FechaNota2;
        $this->Cod_Asignatura = $Cod_Asignatura;
    }
    
    function getNota_1() {
        return $this->nota_1;
    }

    function getFechaNota1() {
        return $this->FechaNota1;
    }

    function getNota2() {
        return $this->Nota2;
    }

    function getFechaNota2() {
        return $this->FechaNota2;
    }

    function getCod_Asignatura() {
        return $this->Cod_Asignatura;
    }

    function setNota_1($nota_1) {
        $this->nota_1 = $nota_1;
    }

    function setFechaNota1($FechaNota1) {
        $this->FechaNota1 = $FechaNota1;
    }

    function setNota2($Nota2) {
        $this->Nota2 = $Nota2;
    }

    function setFechaNota2($FechaNota2) {
        $this->FechaNota2 = $FechaNota2;
    }

    function setCod_Asignatura($Cod_Asignatura) {
        $this->Cod_Asignatura = $Cod_Asignatura;
    }



}
