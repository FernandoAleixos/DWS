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
        if (isset($_SESSION['aula_no_insertada'])) {
            echo '<p>'.$_SESSION['aula_no_insertada'].'</p>';
            unset($_SESSION['aula_no_insertada']);
        }
    ?>

    <form action="insertar_aula.php" method="post">
        <label for="numero">Numero</label>
        <input type="text" name="numero" required>

        <label for="metros">Metros</label>
        <input type="text" name="metros" required>

        <label for="id_centro">Centro</label>
        <select name="id_centro">
            <?php
                session_start();
                include_once('db.php');
        
                $conectar = conexion();
                $sql = "SELECT * FROM Centro";
        
                $resultado = mysqli_query($conectar, $sql);

                while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
                    <option value="<?php echo $fila['Id']?>"><?php echo $fila['Nombre_Centro']?></option>

            <?php
                }
            ?>
        </select>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>