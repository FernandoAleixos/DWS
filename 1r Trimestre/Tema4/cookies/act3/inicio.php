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

        if(isset($_SESSION['nologin'])) {
            echo '<p>'.$_SESSION['nologin'].'</p>';
            unset($_SESSION['nologin']);
        }

        if(isset($_SESSION['fallo'])) {
            echo '<p>'.$_SESSION['fallo'].'</p>';
            unset($_SESSION['fallo']);
        }

        if(isset($_COOKIE['usuario'])) {
            header('Location: final.php');
        }
    ?>

    <h2>Inicia Sesión</h2>
    <form action="login.php" method="post">
        Usuario <input type="text" name="user">
        Contraseña <input type="password" name="pass">
        <input type="submit" name="Inicia sesión">
    </form>
</body>
</html>