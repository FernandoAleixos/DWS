<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['nombre_no_insertado'])){
            echo '<p>'.$_SESSION['nombre_no_insertado'].'</p>';
            unset($_SESSION['nombre_no_insertado']);
        }
    ?>
    
    <form action="insertar.php" method="post">
        <p>Nombre Asignatura <input type="text" name="nombre" required></p>
        <p>Horas Impartidas <input type="text" name="horas" required></p>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>
</body>
</html>