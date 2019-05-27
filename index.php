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
        <title>Form Login | Fazt </title>
        <link href="estilos/estilos.css" rel="stylesheet"/>        
    </head>
    <body>
                
        <div class="login-box">
            <img src="img/download.png" class="avatar" alt="Logo de Coneccion">
            <h1>Login Here</h1>
            <form id ="frmusuario" class="needs-validation" name="formu" action="<?=URLBASE?>controladores/AccUsuario.php" method="post">
<!--            <form id="frmusuario" name="formu" method="post" class="needs-validation">-->
                <!--Username-->
                <div class="form-group">
                <label for="username">Username</label>
                <input id="idusuario" class="form-control" name="usuario" type="text" placeholder="Enter Username" required>
                <div class="invalid-feedback">Escriba el usuario</div>
                </div>
                <!--Password-->
                <label for="password">Pasword</label>
                <input id="idclave" class="form-control" name="clave" type="password" placeholder="Enter Password" required>
                <input id="btnenviar" type="submit" value="Log In">

                <!--Crear Enlaces-->
                <a href="#">Lost your password?</a><br>
                <a href="#">Don't have an accoint</a>

            </form>
            
<!--            <div id="mensaje"></div>
            
            <script>
            
            $("#btnenviar").click(function(event){
                var form=$("#frmusuario");
                
                if(form[0].checkValidity()===false){
                    event.preventDefault();
                    event.stopPropagation();   
                }
                else{
                    cargadatos();
                }
               form.addClass("was-validated"); 
            });
            
            function cargadatos(){
                var Nomusuario=$("#idusuario").val();
                var Password=$("#idclave").val();
                $("#mensaje").load("menu.php",
                {"Usuario":Nomusuario,
                 "Password":Password});
            }
    </script>-->
            
            
            
            
        </div>    
    </body>
</html>