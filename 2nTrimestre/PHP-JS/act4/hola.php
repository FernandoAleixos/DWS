<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Bienvenido</title>
</head>

<body>

  <?php
    include_once('db.php');
    $conectar = conexion();

    $sql = "SELECT * FROM Usuarios";
    $resultado = mysqli_query($conectar, $sql);
    $filas = mysqli_num_rows($resultado);
  ?>

  <table class="table table-striped">
    <thead class="thead-light">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">DNI</th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <?php
          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<td>' . $fila['cod'] . '</td>';
            echo '<td>' . $fila['nombre'] . '</td>';
            echo '<td>' . $fila['apellido'] . '</td>';
            echo '<td>' . $fila['dni'] . '</td>';
          }
        ?>
      </tr>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>