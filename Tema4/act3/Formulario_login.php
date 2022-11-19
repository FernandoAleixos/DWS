<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['usuario_incorrecto'])) {
            echo '<p>'.$_SESSION['usuario_incorrecto'].'</p>';
            unset($_SESSION['usuario_incorrecto']);
        }
    ?>

    <h2>Inicia Sesión</h2>
    <form action="Login.php" method="post">
        Usuario <input type="text" name="user">
        Contraseña <input type="password" name="pass">
        <input type="submit" name="Inicia sesión">
    </form>
</body>
</html>