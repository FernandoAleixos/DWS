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
        include_once "Conexion.php";

        $sql = "SELECT * FROM Ropa";

        $result = $conexion->query($sql);

        while($fila = $result->fetch(PDO::FETCH_OBJ)) {
            echo $fila->Marca."<br/>";
        }
    ?>
</body>
</html>