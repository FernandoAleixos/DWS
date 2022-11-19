<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>formulario de usuarios</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['user_insertado'])) {
            echo '<p>'.$_SESSION['user_insertado'].'</p>';
            unset($_SESSION['user_insertado']);
        }

        if(isset($_SESSION['user_no_insertado'])) {
            echo '<p>'.$_SESSION['user_no_insertado'].'</p>';
            unset($_SESSION['user_no_insertado']);
        }
    ?>

    <form action="user.php" method="post">
        User <input type="text" name="user">
        Password <input type="password" name="pass">
        <input type="submit" name="Crear">
    </form>
</body>
</html>