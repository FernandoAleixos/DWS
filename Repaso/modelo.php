<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['modelo_no_insertado'])) {
            echo '<p>'.$_SESSION['prenda_no_insertada'].'</p>';
            unset($_SESSION['prenda_no_insertada']);
        }
    ?>

    <form action="anyadir_modelo.php">
        <label for="marca">Marca</label>
        <input type="text" name="marca" required>

        <label for="color">Color</label>
        <input type="text" name="color" required>

        <label for="id_tipo">Tipo</label>
        <select name="id_tipo">
            <?php
                session_start();
                include_once('db.php');
                $conectar = conexion();
                $sql = "SELECT * FROM vehiculo";
                $resultado = mysqli_query($conectar, $sql);

                while($fila = mysqli_fetch_assoc($resultado)) {
            ?>
                    <option value="<?php echo $fila['referencia']?>"><?php echo $fila['tipo']?></option>
            <?php
                }
            ?>
        </select>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>