<?php
    include_once('db.php');
    $conectar = conexion();

    session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM Usuarios WHERE trim(user) = trim('".$user."')";

    $resultado = mysqli_query($conectar, $sql);

    if($resultado) {
        $fila = mysqli_fetch_assoc($resultado);

        if(password_verify($pass, $fila['pass'])) {
            $_SESSION['usuario_correcto'] = 'Usuario logueado correctamente';
            header('Location: Logueado.php');
        } else {
            $_SESSION['usuario_incorrecto'] = 'Usuario o contraseña incorrectos';
            header('Location: Formulario_user.php');
        }
    } else {
        $_SESSION['usuario_incorrecto'] = 'Usuario o contraseña incorrectos';
            header('Location: Formulario_user.php');
    }
?>