<?php

//incluye la clase Libro y CrudLibro
require_once("../clases/almunos.php");
require_once("../clases/crudAlumno.php");



$crud = new crudAlumno();
$alumnos = new almunos();

// si el elemento insertar no viene nulo llama al crud e inserta un libro
if (isset($_POST['insertar'])) {
    $alumnos->setRut_alumnos($_POST['Rut_alumnos']);
    $alumnos->setDig_alumnos($_POST['Dig_alumnos']);
    $alumnos->setNom_alumnos($_POST['Nom_alumnos']);

    //llama a la función insertar definida en el crud
    $crud->insertar($alumnos);
    header('Location: menu.php');
    // si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
} 
    ?>