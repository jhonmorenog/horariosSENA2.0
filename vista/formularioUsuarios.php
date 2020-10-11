<?php
if (isset($_POST['guardar'])) {
    require_once '../controlador/usuariosControlador.php';
    include '../controlador/factoryQuery.php';
    $uc=new usuariosControlador();
    $uc->guardar();
    
}
?>
<form method="post" action="formularioUsuarios.php">
    <label for="documento">documento</label>
    <input id="documento" name="documento" class="">
    <label for="pnombre">pnombre</label>
    <input id="pnombre" name="pnombre" class="">
    <label for="snombre">snombre</label>
    <input id="snombre" name="snombre" class="">
    <label for="papellido">papellido</label>
    <input id="papellido" name="papellido" class="">
    <label for="sapellido">sapellido</label>
    <input id="sapellido" name="sapellido" class="">
    <label for="correoElectronico">correoElectronico</label>
    <input id="correoElectronico" name="correoElectronico" class="">
    <label for="clave">clave</label>
    <input id="clave" name="clave" class="">
    <label for="clave1">clave1</label>
    <input id="clave1" name="clave1" class="">
    <button type="submit" name="guardar">Guardar</button>
</form>
