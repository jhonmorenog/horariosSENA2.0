<?php
require_once './conexion.php';

$sql="SELECT `documento` FROM `USUARIO` WHERE `documento`='".$_POST['datos'][0]."' and `clave_de_acceso`=md5('".$_POST['datos'][1]."')";
$c=new conexion();
$result=$c->consulta($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "true";
  }
} else {
  echo "false";
}
$c->cerrarConexion();
?>