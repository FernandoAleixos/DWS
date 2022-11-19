<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <?php
        session_start();
        
        if(isset($_SESSION['nombreNoInsertado'])) {
            echo '<p>'.$_SESSION['nombreNoInsertado'].'</p>';
        }
    ?>

    <form action="Insertar.php" method="post">
        Nombre <input type="text" name="Nombre" required></p>
        Fecha inicio <input type="date" name="FechaInicio" required></p>
        Fecha final <input type="date" name="FechaFinal" required></p>
        Horario <input type="text" name="Horario" required></p>
        Precio <input type="text" name="Precio" required></p>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>
</body>
</html>