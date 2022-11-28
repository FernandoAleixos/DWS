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
        if (isset($_SESSION['prenda_no_insertada'])) {
            echo '<p>'.$_SESSION['prenda_no_insertada'].'</p>';
            unset($_SESSION['prenda_no_insertada']);
        }
    ?>

    <form action="Anyadir_prenda.php" method="post">
        <label for="Tipo">Tipo</label>
        <input type="text" name="Tipo" required>

        <label for="Fecha_compra">Fecha de compra</label>
        <input type="date" name="Fecha_compra" required>

        <label for="id_Marca">Marca</label>
        <select name="id_Marca">
            <?php
                session_start();
                include_once('db.php');
                $conectar = conexion();
                $sql = "SELECT * FROM Ropa";
                $resultado = mysqli_query($conectar, $sql);

                while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
                    <option value="<?php echo $fila['Ref']?>"><?php echo $fila['Marca']?></option>

            <?php
                }
            ?>
        </select>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>