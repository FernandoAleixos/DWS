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

        if(isset($_GET['idasig'])) {
            include_once('db.php');
            $conectar = conexion();
            $ids = $_GET['idasig'];
            $sql = "SELECT * FROM Trabajador WHERE Id_Trabajador =".$ids;
            $resultado = mysqli_query($conectar, $sql);
            $trabajador = mysqli_fetch_assoc($resultado);
        }

        if(empty($trabajador)) {
            echo 'Añadir Trabajador';
        } else {
            echo 'Edita Trbajador';
        }
    ?>
    
    <form action="editar.php" method="post">
        <p>Id<input type="hidden" name="id" value="<?php if(isset($trabajador)){echo $trabajador['Id_Trabajador'];} ?>"></p>
        <p>Nombre<input type="text" name="nombre" value="<?php if(isset($trabajador)){echo $trabajador['Nombre'];} ?>" required></p>
        <p>Direccion <input type="text" name="dir" value="<?php if(isset($trabajador)){echo $trabajador['Direccion'];} ?>" required></p>
        <p>Cuenta <input type="text" name="cuenta" value="<?php if(isset($trabajador)){echo $trabajador['Cuenta_Bancaria'];} ?>" required></p>
        <p>Telefono <input type="text" name="telefono" value="<?php if(isset($trabajador)){echo $trabajador['Telefono'];} ?>" required></p>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>
</body>
</html>