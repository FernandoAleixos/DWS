<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulario</title>
</head>
<body>

    <?php
        session_start();

        if(isset($_SESSION['usuario_incorrecto'])) {
            echo '<p>'.$_SESSION['usuario_incorrecto'].'</p>';
            unset($_SESSION['usuario_incorrecto']);
        }
    ?>
    <h2>Inicia sesión</h2>
    <form action="login.php" method="post">
        User <input type="text" name="user">
        Password <input type="password" name="pass">
        <input type="submit" name="Crear">
    </form>
</body>
</html>