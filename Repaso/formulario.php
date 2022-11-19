<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <?php
        // Iniciamos sesión
        session_start();

        // Si no se insertan los datos en la tabla nos mostrará que no se ha insertado
        // IMPORTANTE!! Solo nos mostrará este mensaje si esta declarado en ambos docuemntos
        if(isset($_SESSION['vehiculo_no_insertado'])) {
            echo '<p>' . $_SESSION['vehiculo_no_insertado'] . '</p>';
            unset($_SESSION['vehiculo_no_insertado']);
        }

        //Cogemos la información del botón editar de la tabla 
        if(isset($_GET['idvehiculo'])) {
            include_once('db.php');
            $conectar = conexion();
            $idv = $_GET['idvehiculo'];
            $sql = "SELECT * FROM vehiculo WHERE referencia =".$idv;
            $resultado = mysqli_query($conectar, $sql);
            $vehic = mysqli_fetch_assoc($resultado);
        }

        //Comprrobamos que el campo seleccionado no este vacío
        if(empty($vehic)) {
            echo 'Añadir vehículo';
        } else {
            echo 'Edita el vehículo';
        }
    ?>

    <!-- Cremamos un formulario que recojera los datos introducidos y los enviara al docuemnto que inserta en la tabla -->
    <form action="insertar.php" method="post">
        <p>Referencia <input type="hidden" name="referencia" value="<?php if(isset($vehic)){echo $vehic['referencia'];}?>"></p>
        <p>Tipo <input type="text" name="tipo" value="<?php if(isset($vehic)){echo $vehic['tipo'];}?>" required></p>
        <p>Precio <input type="text" name="precio" value="<?php if(isset($vehic)){echo $vehic['precio'];}?>" required></p>
        <p>Fecha <input type="date" name="fecha" value="<?php if(isset($vehic)){echo $vehic['fecha'];}?>" required></p>
        <p>Matrícula <input type="text" name="matricula" value="<?php if(isset($vehic)){echo $vehic['matricula'];}?>" required></p>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>

</body>
</html>