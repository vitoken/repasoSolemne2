<?php
include("lib/constantes.php");
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <form id="formvalida" class="needs-validation" action="<?=URLBASE?>controladores/contAlumno.php" method="post" >

            <div class="form-group">
                <label>Nombre </label>
                <input id="nombre" class="form-control" name="nombre" type="text" placeholder="Escriba el nombre" required="">
                <div class="invalid-feedback">Escriba el nombre</div>
            </div>
            <div class="form-group">
                <label>Rut </label>
                <input id="rut" class="form-control" name="rut" type="number" placeholder="Escriba el rut" required="">
                <div class="invalid-feedback">Escriba el rut</div>
            </div>
            <div class="form-group">
                <label>Digito Verificador</label>
                <input id="digito" class="form-control" name="digito" type="text" placeholder="Numero o K" required="">
                <div class="invalid-feedback">Escriba el Digito Verificador</div>
            </div>
            <input type="hidden" name="insertar" value="insertar">
            <input id="btnenviar" type="submit" value="Enviar">
            <?php
            
            ?>
        </form>
        <div id="mensaje"></div>
        <script>
            $("#btnenviar").click(function (event) {
                var form = $("#formvalida");
                if (form[0].checkValidity() ===false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.addClass("was-validated");
            });
            function cargadatos(){
                var nombre = $("#nombre");
                var rut = $("#rut");
                var digito = $("#digito");
        $("#mensaje").load("menu.php",
        {"nombre":nombre,
           "rut":rut,
           "digito":digito});
        
             }
        </script>
    </body>


</html>
