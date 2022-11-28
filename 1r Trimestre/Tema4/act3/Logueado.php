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

    <button><a href="Logout.php">Cerrar la sesión</a></button>
    <button><a href="Mostrar.php">Seguir con este usuario</a></button>
</body>
</html>