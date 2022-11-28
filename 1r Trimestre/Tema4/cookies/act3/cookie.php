<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('db.php');
        $conectar = conexion();
        session_start();

        $sql = "SELECT * FROM Usuarios WHERE trim(user) = trim('".$user."')";

        $resultado = mysqli_query($conectar, $sql);

        $fila = mysqli_fetch_assoc($resultado);

        //setcookie("usuario", $fila['user'], time() + 120);

        if (!isset($_COOKIE['usuario'])) {
            $_SESSION['fallo'] = 'Vuelve a iniciar sesión';
            header('Location: inicio.php');
        } else {
            header('Location: final.php');
        }
    ?>
    
</body>
</html>