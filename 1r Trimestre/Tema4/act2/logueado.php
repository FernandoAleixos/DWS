<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logueado</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['usuario_correcto'])) {
            echo '<p>'.$_SESSION['usuario_correcto'].'</p>';
            unset($_SESSION['usuario_correcto']);
        }
    ?>   

    <button><a href="logout.php">Salir de la sesión</a></button>
</body>
</html>