<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['usuario_insertado'])) {
            echo '<p>'.$_SESSION['user_insertado'].'</p>';
            unset($_SESSION['user_insertado']);
        }

        if(isset($_SESSION['user_no_insertado'])) {
            echo '<p>'.$_SESSION['user_no_insertado'].'</p>';
            unset($_SESSION['user_no_insertado']);
        }
    ?>
    
    <h2>Crear Usuario</h2>
    <form action="User.php" method="post">
        <p>User <input type="text" name="user"></p>
        <p>Password <input type="password" name="pass"></p>
        <input type="submit" name="Crear">
        <button><a href="Formulario_login.php">Ya tienes un usuario?</a></button>
    </form>
</body>
</html>