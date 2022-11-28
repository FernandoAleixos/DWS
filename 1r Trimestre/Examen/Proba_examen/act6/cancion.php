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
        session_start();
        if (isset($_SESSION['no_insertado'])) {
            echo '<p>'.$_SESSION['no_insertado'].'</p>';
            unset($_SESSION['no_insertado']);
        }
    ?>

    <form action="anyadir_cancion.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="Nombre" required>

        <label for="fecha">Fecha</label>
        <input type="date" name="Fecha" required>

        <label for="cantante">Cantante</label>
        <select name="Cantante">
            <?php
                session_start();
                include_once('db.php');
                $conectar = conexion();
                $sql = "SELECT * FROM Discos";
                $resultado = mysqli_query($conectar, $sql);

                while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
                    <option value="<?php echo $fila['Referencia']?>"><?php echo $fila['Cantante']?></option>

            <?php
                }
            ?>
        </select>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>