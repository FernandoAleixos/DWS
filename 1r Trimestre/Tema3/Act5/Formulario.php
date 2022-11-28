<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        
        if(isset($_SESSION['nombre_no_insertado'])) {
            echo '<p>'.$_SESSION['nombre_no_insertado'].'</p>';
            unset($_SESSION['nombre_no_insertado']);
        }

        if(isset($_GET['idref'])) {
            include_once('db.php');
            $conectar = conexion();
            $ids = $_GET['idref'];
            $sql = "SELECT * FROM Ropa WHERE Ref =".$ids;
            $resultado = mysqli_query($conectar, $sql);
            $ropa = mysqli_fetch_assoc($resultado);
        }

        if(empty($ropa)) {
            echo 'Añadir prenda';
        } else {
            echo 'Edita prenda';
        }
    ?>
    
    <form action="Insertar.php" method="post">
        <p>Ref<input type="hidden" name="Ref" value="<?php if(isset($ropa)){echo $ropa['Ref'];} ?>"></p>
        <p>Marca<input type="text" name="Marca" value="<?php if(isset($ropa)){echo $ropa['Marca'];} ?>" required></p>
        <p>Color <input type="text" name="Color" value="<?php if(isset($ropa)){echo $ropa['Color'];} ?>" required></p>
        <p>Talla <input type="text" name="Talla" value="<?php if(isset($ropa)){echo $ropa['Talla'];} ?>" required></p>
        <p>Preu <input type="text" name="Preu" value="<?php if(isset($ropa)){echo $ropa['Preu'];} ?>" required></p>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>
</body>
</html>