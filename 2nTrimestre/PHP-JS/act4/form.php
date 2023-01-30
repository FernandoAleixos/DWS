<?php
include_once('db.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];

$conectar = conexion();

if (isset($nombre) && isset($apellido) && isset($dni)) {
  $sql = "SELECT * FROM Usuarios where (nombre = '$nombre' AND apellido = '$apellido' AND dni = '$dni')";

  $result = mysqli_query($conectar, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo json_encode('correcto');
  } else {
    echo json_encode('error');
  }
}
