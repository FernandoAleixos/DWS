<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['no_insertado'])){
            echo '<p>'.$_SESSION['no_insertado'].'</p>';
            unset($_SESSION['no_insertado']);
        }

        if(isset($_GET['idref'])) {
            include_once('db.php');
            $conectar = conexion();
            $idr = $_GET['idref'];
            $sql = "SELECT * FROM Discos WHERE Referencia =".$idr;
            $resultado = mysqli_query($conectar, $sql);
            $disco = mysqli_fetch_assoc($resultado);
        }

        if(empty($disco)) {
            echo 'Añadir disco';
        } else {
            echo 'Edita disco';   
        }
    ?>
    
    <form action="insertar.php" method="post">
        <p>Referencia <input type="hidden" name="Referencia" value="<?php if(isset($disco)){echo $disco['Referencia'];}?>" required></p>
        <p>Nombre <input type="text" name="Nombre" value="<?php if(isset($disco)){echo $disco['Nombre'];}?>" required></p>
        <p>Cantante <input type="text" name="Cantante" value="<?php if(isset($disco)){echo $disco['Cantante'];}?>" required></p>
        <p>Fecha <input type="date" name="Fecha" value="<?php if(isset($disco)){echo $disco['Fecha'];}?>" required></p>
        <p>Estilo <input type="text" name="Estilo" value="<?php if(isset($disco)){echo $disco['Estilo'];}?>" required></p>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>
</body>
</html>