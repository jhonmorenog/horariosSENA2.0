<?php
if (isset($_POST['entrar'])) {
    @include './controlador/conexion.php';
    @include './controlador/interfaces/icrud.php';
    @include './modelo/usuarios.php';
    @include './controlador/usuariosControlador.php';
    $uc = new usuariosControlador();
    $uc->ingresar();
}
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>

        <!--        boostrap-->
        <link href="vista/boostrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="vista/boostrap/js/jquery.js" type="text/javascript"></script>
        <script src="vista/boostrap/js/bootstrap.min.js" type="text/javascript"></script>


        <link href="vista/css/login.css" rel="stylesheet" type="text/css"/>
        <script src="vista/js/login.js" type="text/javascript"></script>



        <meta charset="UTF-8">
        <title>ASIS-CENIGRAF</title>
    </head>
    <body>
        <video class="fondo" autoplay>
            <source src="source/video/Background - 9584.mp4" type="video/mp4">
            Your browser does not support the <code>video</code> tag.
        </video>
        <form method="post" action="index.php">
            <div class="login">
                <div class="form-group">
                    <label for="documento">Documento:</label>
                    <input id="documento" name="documento" class="form-control" required>                
                </div>
                <div class="form-group">
                    <label for="clave">Contraseña</label>
                    <input type="password" id="clave" name="clave" class="form-control" required>                
                </div>
                <div class="form-group">
                    <button type="submit" id="entrar" name="entrar" class="btn btn-success form-control">Entrar</button>
                </div>
            </div>
        </form>
    </body>
</html>
