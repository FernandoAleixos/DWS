<?php
include_once('db.php');

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$conectar = conexion();

if (isset($usuario) && isset($pass)) {
  $sql = "SELECT * FROM Usuarios where (usuario = '$usuario' && pass = '$pass')";

  $result = mysqli_query($conectar, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo json_encode('success');
  } else {
    echo json_encode('error');
  }
}
