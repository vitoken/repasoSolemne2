<?php

//incluye la clase Libro y CrudLibro
require_once("../clases/almunos.php");
require_once("../clases/crudAlumno.php");



$crud = new crudAlumno();
$alumnos = new almunos();

echo $_POST["rut"];
// si el elemento insertar no viene nulo llama al crud e inserta un libro
if (isset($_POST['insertar'])) {
    $alumnos->setRut_alumnos($_POST['rut']);
    $alumnos->setDig_alumnos($_POST['digito']);
    $alumnos->setNom_alumnos($_POST['nombre']);

//    echo '$alumnos->getRut_alumnos()';
//    echo '$alumnos->getDig_alumnos()';
//    
//    echo $_POST["rut"];
//    echo $_POST["nombre"];
//    echo $_POST["nombre"];
    
    //llama a la función insertar definida en el crud
    $crud->insertar($alumnos);
//    header('Location: menu.php');
    // si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
} 
    ?>