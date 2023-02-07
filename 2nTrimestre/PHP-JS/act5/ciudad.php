<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('db.php');
        $conectar = conexion();

        $cp = $_POST['cp'];

        $sql = "SELECT * FROM Ciudades";
        $result = mysqli_query($conectar, $sql);

        while ($fila = mysqli_fetch_assoc($result)) {
            if ($cp == $fila['cp']) {
                echo $fila['ciudad'];
            } else {
                echo 'ERROR';
            }
        }
    ?>
</body>
</html>