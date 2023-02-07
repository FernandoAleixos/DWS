<?php
include_once('db.php');

$cp = $_POST['cp'];

$conectar = conexion();

if (isset($cp)) {
  $sql = "SELECT ciudad FROM Ciudades WHERE cp = '$cp'";

  $result = mysqli_query($conectar, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)) {
      if($cp == $fila['cp']) {
        echo json_encode($fila['ciudad']);   
      }
    }
  } else {
    echo json_encode('error');
  }
}
